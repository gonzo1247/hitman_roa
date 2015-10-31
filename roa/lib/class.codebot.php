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
	 * @return bool
	 */
	public static function addcode($username, $char_guid = 0, $itemid = 0, $quantity = 1,  $titleid = 0, $achievid = 0, $new_level = 0) {
		$account_id = auth_account::get_id(mb_strtolower($username));
		$code = self::generate_code();

		// Check Data
		if(! $account_id)
			return 'Account konnte nicht gefunden werden';
		if(! $code)
			return 'Code konnte nicht generiert werden';

		// Add Code
		if(char_code::add($code, $account_id, $char_guid, $itemid, $new_level, $titleid, $achievid, $quantity) !== false)
			return true;
		// Default Value
		return 'Ein unbekannter Fehler ist aufgetreten...';
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
