<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/10/31
 * Time: 20:22
 */

require_once(LIB_DIR . DS . 'class.char_character.php');

/**
 * Class code_functions
 */
class code_functions extends char_character {
	/**
	 * @param int $id
	 * @return string
	 */
	public static function execute_codebot($id) {
		$id = output::escapeALL($id, true);

		// Include LIB
		require_once(LIB_DIR . DS . 'class.char_code.php');
		require_once(LIB_DIR . DS . 'class.codebot.php');

		// Get own Points
		$points_row = user_points::get(get_phpbb_info::$instance->user_id);
		$product = point_costs::get($id);

		// Check if user has exceded limit of exchange product
		if(points_exchange::getNumByUserId(get_phpbb_info::$instance->user_id, $product["id"]) > $product["aviable_count"] && $product["aviable_count"] != -1)
			return "<span class=\"code_fail\">Du kannst das nicht mehr eintauschen.</span><br><br>";

		// Check if there are enough points
		if($points_row['points_curr'] >= $product["points"] && $product["enabled"]) {
			// Remove Points
			if(user_points::update(get_phpbb_info::$instance->user_id, $product["name"], ($product["points"] * -1)) !== false) {
				$code["result"] = false;
				if($product["function"]) {
					// Run Function
					if (method_exists(__CLASS__, $product["function"]))
						$code = self::$product["function"]($id);
				}else if($product["item_id"] !== null) {
					// Add Item
					$code = codebot::addcode(get_phpbb_info::$instance->username, 0, $product["item_id"], $product["qty"]);
				}

				// Send PM
				if($code["result"] === true && $product["code"] == 1)
					get_phpbb_info::$instance->sendPM(output::getCodeMsg($product, $code["key"]), SYSTEM_USER, "Neuer Code für " . $product["name"]);
				else if($code["result"] === true)
					get_phpbb_info::$instance->sendPM(output::getPointActionsSuccess($product), SYSTEM_USER, $product["name"] . ": Aktion erfolgreich ausgeführt");

				if($code["result"] === "other")
					return $code;
				else if($code["result"] !== true) {
					// Rollback changes on points if code wasn't generated
					user_points::update(get_phpbb_info::$instance->user_id, $product["name"] . " - ROLLBACK", $product["points"]);
					return "<span class=\"code_fail\">" . $code["fail"] . "</span><br><br>";
				} else {
					if($product["code"] == 1)
						return "<span class=\"code_success\">Code wurde erfolgreich erstellt, du erhälst eine PM mit dem Code! <a href=\"ucp.php?i=pm&folder=inbox\">-> Zum Posteingang</a></span><br><br>";
					else {
						// Add exchange product if it has limits
						if($product["aviable_count"] != -1)
							points_exchange::add(get_phpbb_info::$instance->user_id, $product["id"]);

						return "<span class=\"code_success\">Aktion erfolgreich ausgeführt!</span><br><br>";
					}
				}
			}
		} else
			return "<span class=\"code_fail\">Leider hast du dafür nicht genügend Punkte!</span><br><br>";
		return "";
	}

	private static function setCharTrans($id) {
		if(! isset($_POST['new_acc']))
			$_POST['new_acc'] = "";
		if(! isset($_POST['char_guid']))
			$_POST['char_guid'] = "";

		$newaccount = output::escapeALL($_POST['new_acc'], true);
		$char_guid = output::escapeALL($_POST['char_guid'], true);
		$error = false;

		if($newaccount && $char_guid){
			// Get CharacterData
			$char = char_character::get($char_guid);
			$own_wow_acc = auth_account::get(get_phpbb_info::$instance->username);
			$new_acc_id = auth_account::get_id($newaccount);

			// Precheck if character is offline
			if($char === false)
				$error = "Der Charakter existiert nicht!";
			else if(char_character::isOnline($char_guid))
				$error = "Der ausgewählte Charakter darf nicht online sein!";
			else if($char["account"] != $own_wow_acc[0]["id"]) // Check if char is on own Account
				$error = "Der Charakter gehört dir nicht!";
			else if(auth_account::get_id($newaccount) === false)
				$error = "Der Zielaccount existiert nicht.";
			else if(char_character::getNumCharsOnAccount($new_acc_id) >= 10) // check if the target account has less than 10 chars
				$error = "Der Zielaccount kann keine weiteren Charaktäre aufnehmen, bitte lösche dort einen Charakter oder wähle einen anderen Account aus.";
			else {
				// Make Char Transfer
				if(! char_character::charTrans($char_guid, $new_acc_id, $own_wow_acc[0]["id"]))
					$error = "Ein unbekannter Fehler ist beim Transferieren aufgetreten...";
			}
			unset($char);
			unset($own_wow_acc);
		}

		// Show input field if something is missing
		if(! $newaccount || ! $char_guid || $error) {
			$product = point_costs::get($id);
			user_points::update(get_phpbb_info::$instance->user_id, $product["name"] . " - Angaben fehlten -> Rückgabe der Punkte", $product["points"]);
			return array("result" => "other", "code" => output::getCharTransfer($id, $_POST['char_guid'], $_POST['new_acc'], $error));
		}
		return array("result" => true);
	}

	/**
	 * @param int $charguid - character guid
	 * @return int
	 */
	private static function updateRename($charguid) {
		$activeflag = self::getFlag($charguid);
		$flag = 1;
		if ($activeflag != 0)
			$newflag = $activeflag + $flag;
		else
			$newflag = $flag;

		$sql = 'UPDATE ' . self::getFullTableName() . ' SET at_login = :flag WHERE guid = :guid';

		return SQL::execute(self::getConnection(), $sql, array("guid" => $charguid, "flag" => $newflag));
	}

	/**
	 * @param int $charguid - character guid
	 * @return int
	 */
	private static function updateRace($charguid) {
		$activeflag = self::getFlag($charguid);
		$flag = 128;
		if ($activeflag != 0)
			$newflag = $activeflag + $flag;
		else
			$newflag = $flag;

		$sql = 'UPDATE ' . self::getFullTableName() . ' SET at_login = :flag WHERE guid = :guid';

		return SQL::execute(self::getConnection(), $sql, array("guid" => $charguid, "flag" => $newflag));
	}

	/**
	 * @param int $charguid - character guid
	 * @return int
	 */
	private static function updateFaction($charguid) {
		$activeflag = self::getFlag($charguid);
		$flag = 64;
		if ($activeflag != 0)
			$newflag = $activeflag + $flag;
		else
			$newflag = $flag;

		$sql = 'UPDATE ' . self::getFullTableName() . ' SET at_login = :flag WHERE guid = :guid';

		return SQL::execute(self::getConnection(), $sql, array("guid" => $charguid, "flag" => $newflag));
	}
}
