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

		// Check if there are enough points
		if($points_row['points_curr'] >= $product["points"] && $product["enabled"]) {
			// Remove Points
			if(user_points::update(get_phpbb_info::$instance->user_id, $product["name"], ($product["points"] * -1)) !== false) {
				$code["result"] = false;
				if($product["function"]) {
					// Run Function
					if(function_exists($product["function"])) {

					}
				} else if($product["item_id"] !== null) {
					// Add Item
					$code = codebot::addcode(get_phpbb_info::$instance->username, 0, $product["item_id"], $product["qty"]);

					// Send PM
					get_phpbb_info::$instance->sendPM(output::getCodeMsg($product, $code["key"]), SYSTEM_USER, "Neuer Code für " . $product["name"]);
				}

				if($code["result"] !== true) {
					// Rollback changes on points if code wasn't generated
					user_points::update(get_phpbb_info::$instance->user_id, $product["name"] . " - ROLLBACK", $product["points"]);
					return "<span class=\"code_fail\">" . $code["fail"] . "</span><br><br>";
				} else
					return "<span class=\"code_success\">Code wurde erfolgreich erstellt, du erhälst eine PM mit dem Code! <a href=\"ucp.php?i=pm&folder=inbox\">-> Zum Posteingang</a></span><br><br>";
			}
		} else
			return "<span class=\"code_fail\">Leider hast du dafür nicht genügend Punkte!</span><br><br>";
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

	/**
	 * @param int $charguid - character guid
	 * @param int $newaccountid - new account id
	 * @param int $oldaccountid - old account id
	 * @return bool|int
	 */
	private static function setCharTrans($charguid, $newaccountid, $oldaccountid) {
		if ($newaccountid == $oldaccountid)
			return false;
		if ($newaccountid == 0)
			return false;

		$sql = 'UPDATE ' . self::getFullTableName() . ' SET account = new WHERE guid = guid';
		user_transfer_log::add($charguid, $oldaccountid, $newaccountid);

		return SQL::execute(self::getConnection(), $sql, array("new" => $newaccountid, "guid" => $charguid ));
	}
}
