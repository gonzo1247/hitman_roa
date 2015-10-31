<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/14
 * Time: 16:11
 */

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
	public static function addcode($username, $char_guid, $itemid = 0, $quantity = 1,  $titleid = 0, $achievid = 0, $new_level = 0) {
		$account_id = auth_account::get_id($username);
		$code = self::generate_code();

		// Check Data
		if(! $account_id)
			return false;
		if(! $code)
			return false;

		// Add Code
		if(char_code::add($code, $account_id, $char_guid, $itemid, $new_level, $titleid, $achievid, $quantity) !== false)
			return true;
		// Default Value
		return false;
	}

	/**
	 * @return bool|string
	 */
	private static function generate_code() {
		$startpos = rand(1, 5);
		$endpos = rand(11, 16);
		$code = mb_substr(md5(time(), rand(400, 9282)), $startpos, $endpos);
		$code = mb_strtoupper($code);

		if($code)
			return $code;

		return false;
	}

}
