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
				} else if($product["item_id"] !== null) {
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
						return "<span class=\"code_success\">Code wurde erfolgreich erstellt, du erhälst eine PM mit dem Code! <a href=\"ucp.php?i=pm&folder=inbox\" target=\"_blank\">-> Zum Posteingang</a></span><br><br>";
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

	/**
	 * @param int $id
	 * @return array
	 */
	private static function charRestore($id) {
		if(! isset($_POST['charname']))
			$_POST['charname'] = "";

		$charname = output::escapeALL($_POST['charname'], true);
		$error = false;

		if($charname) {
			// Send PM to Admin group
			if(! get_phpbb_info::$instance->sendPMtoGroup("ADMINISTRATORS", output::char_restorePMmsg($charname), SYSTEM_USER, "Charakter wiederherstellungs Anfrage - " . get_phpbb_info::$instance->username . " -> Char: " . $charname))
				$error = "Ein unbekannter Fehler ist beim senden der PM aufgetreten...";
		}

		if(! $charname || $error) {
			$product = point_costs::get($id);
			user_points::update(get_phpbb_info::$instance->user_id, $product["name"] . " - Angaben fehlten -> Rückgabe der Punkte", $product["points"]);
			$desc = "Bitte trage hier deinen Charakternamen ein. Eine Private-Nachricht wird dann an einen Administrator gesendet, bitte habe nach diesen Vorgang ein klein wenig Geduld!";
			return array("result" => "other", "code" => output::getText($id, "charname", $_POST['charname'], $desc, $error));
		}
		return array("result" => true);
	}

	/**
	 * @param int $id
	 * @return array
	 */
	private static function changeAvatar($id) {
		require_once(LIB_DIR . DS . 'class.phpbb_groups.php');
		require_once(LIB_DIR . DS . 'class.phpbb_group_members.php');

		if(phpbb_group_members::isUserInGroup(get_phpbb_info::$instance->user_id, phpbb_groups::getId(ROA_AVATAR_GROUP)))
			return array("result" => false, "fail" => "Du bist bereits in der Gruppe " . ROA_AVATAR_GROUP . "!");

		if(phpbb_group_members::add(phpbb_groups::getId(ROA_AVATAR_GROUP), get_phpbb_info::$instance->user_id))
			return array("result" => true);
		else
			return array("result" => false, "fail" => "Ein unbekannter Fehler ist beim hinzufügen der Gruppe aufgetreten.");
	}

	/**
	 * @param int $id
	 * @return array
	 */
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
			$own_wow_acc = auth_account::getByName(get_phpbb_info::$instance->username);
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
				$error = "Der Zielaccount kann keine weiteren Charaktere aufnehmen, bitte lösche dort einen Charakter oder wähle einen anderen Account aus.";
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
	 * @param int $id
	 * @return array
	 */
	private static function updateCustomize($id) {
		if(! isset($_POST['char_guid']))
			$_POST['char_guid'] = "";

		$char_guid = output::escapeALL($_POST['char_guid'], true);
		$error = false;

		if($char_guid) {
			$char = char_character::get($char_guid);
			$own_wow_acc = auth_account::getByName(get_phpbb_info::$instance->username);

			// Check input and data
			if($char === false)
				$error = "Der Charakter existiert nicht!";
			else if($char["account"] != $own_wow_acc[0]["id"])
				$error = "Der Charakter gehört dir nicht!";
			else {
				// Change gender
				if(! char_character::updateFlag($char_guid, 8))
					$error = "Ein unbekannter Fehler ist beim ändern des Geschlechtes aufgetreten...";
			}
			unset($char);
			unset($own_wow_acc);
		}

		if(! $char_guid || $error) {
			$product = point_costs::get($id);
			user_points::update(get_phpbb_info::$instance->user_id, $product["name"] . " - Angaben fehlten -> Rückgabe der Punkte", $product["points"]);
			return array("result" => "other", "code" => output::getChar($id, $_POST['char_guid'], $error));
		}
		return array("result" => true);
	}

	/**
	 * @param int $id
	 * @return int
	 */
	private static function updateRename($id) {
		if(! isset($_POST['char_guid']))
			$_POST['char_guid'] = "";

		$char_guid = output::escapeALL($_POST['char_guid'], true);
		$error = false;

		if($char_guid) {
			$char = char_character::get($char_guid);
			$own_wow_acc = auth_account::getByName(get_phpbb_info::$instance->username);

			// Check input and data
			if($char === false)
				$error = "Der Charakter existiert nicht!";
			else if($char["account"] != $own_wow_acc[0]["id"])
				$error = "Der Charakter gehört dir nicht!";
			else {
				// Change Name
				if(! char_character::updateFlag($char_guid, 1))
					$error = "Ein unbekannter Fehler ist beim ändern des Namens aufgetreten...";
			}
			unset($char);
			unset($own_wow_acc);
		}

		if(! $char_guid || $error) {
			$product = point_costs::get($id);
			user_points::update(get_phpbb_info::$instance->user_id, $product["name"] . " - Angaben fehlten -> Rückgabe der Punkte", $product["points"]);
			return array("result" => "other", "code" => output::getChar($id, $_POST['char_guid'], $error));
		}
		return array("result" => true);
	}

	/**
	 * @param int $id
	 * @return array
	 */
	private static function updateRace($id) {
		if(! isset($_POST['char_guid']))
			$_POST['char_guid'] = "";

		$char_guid = output::escapeALL($_POST['char_guid'], true);
		$error = false;

		if($char_guid) {
			$char = char_character::get($char_guid);
			$own_wow_acc = auth_account::getByName(get_phpbb_info::$instance->username);

			// Check input and data
			if($char === false)
				$error = "Der Charakter existiert nicht!";
			else if($char["account"] != $own_wow_acc[0]["id"])
				$error = "Der Charakter gehört dir nicht!";
			else {
				// Change Race
				if(! char_character::updateFlag($char_guid, 128))
					$error = "Ein unbekannter Fehler ist beim ändern der Rasse aufgetreten...";
			}
			unset($char);
			unset($own_wow_acc);
		}

		if(! $char_guid || $error) {
			$product = point_costs::get($id);
			user_points::update(get_phpbb_info::$instance->user_id, $product["name"] . " - Angaben fehlten -> Rückgabe der Punkte", $product["points"]);
			return array("result" => "other", "code" => output::getChar($id, $_POST['char_guid'], $error));
		}
		return array("result" => true);
	}

	/**
	 * @param int $id
	 * @return array
	 */
	private static function updateFaction($id) {
		if(! isset($_POST['char_guid']))
			$_POST['char_guid'] = "";

		$char_guid = output::escapeALL($_POST['char_guid'], true);
		$error = false;

		if($char_guid) {
			$char = char_character::get($char_guid);
			$own_wow_acc = auth_account::getByName(get_phpbb_info::$instance->username);

			// Check input and data
			if($char === false)
				$error = "Der Charakter existiert nicht!";
			else if($char["account"] != $own_wow_acc[0]["id"])
				$error = "Der Charakter gehört dir nicht!";
			else {
				// Change Faction
				if(! char_character::updateFlag($char_guid, 64))
					$error = "Ein unbekannter Fehler ist beim ändern der Fraktion aufgetreten...";
			}
			unset($char);
			unset($own_wow_acc);
		}

		if(! $char_guid || $error) {
			$product = point_costs::get($id);
			user_points::update(get_phpbb_info::$instance->user_id, $product["name"] . " - Angaben fehlten -> Rückgabe der Punkte", $product["points"]);
			return array("result" => "other", "code" => output::getChar($id, $_POST['char_guid'], $error));
		}
		return array("result" => true);
	}
}
