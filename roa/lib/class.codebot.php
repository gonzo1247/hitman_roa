<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/14
 * Time: 16:11
 */

require_once(LIB_DIR . DS . 'class.auth_account.php');

/**
 * Class codebot
 */
class codebot {
	/**
	 * @param string $username
	 * @param int $char_guid
	 * @param int $itemid
	 * @param int $quantity
	 * @param int $titleid
	 * @param int $achievid
	 * @param int $new_level
	 * @return array
	 */
	public static function addcode($username, $char_guid = 0, $itemid = 0, $quantity = 1,  $titleid = 0, $achievid = 0, $new_level = 0) {
		$account_id = auth_account::get_id(mb_strtolower($username));
		$code = self::generate_code();

		// Check Data
		if(! $account_id)
			return array("fail" => 'Account konnte nicht gefunden werden', "result" => false);
		if(! $code)
			return array("fail" => 'Code konnte nicht generiert werden', "result" => false);

		// Add Code
		if(char_code::add($code, $account_id, $char_guid, $itemid, $new_level, $titleid, $achievid, $quantity) !== false)
			return array("key" => $code, "result" => true);
		// Default Value
		return array("fail" => 'Ein unbekannter Fehler ist aufgetreten...', "result" => false);
	}

	/**
	 * @return bool|string
	 */
	private static function generate_code() {
		$startpos = rand(1, 5);
		$endpos = rand(11, 16);
		$code = mb_substr(md5(rand(1, 10000) .  time() . rand(1, 10000)),  $startpos , $endpos);
		$code = mb_strtoupper($code);

		if($code)
			return $code;

		return false;
	}

}
