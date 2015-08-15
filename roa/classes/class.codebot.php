<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/14
 * Time: 16:11
 */
class codebot {

	public static function addcode($username = "", $itemid = 0, $quantity = 1,  $titleid = 0, $achievid = 0, $char_guid = 0, $new_level = 0 ) {
		$account_id = auth_account::get_id($username);

		if (empty ($account_id)) {
			trigger_error("Account ID nicht gefunden. Melde dich bitte bei einem GameMaster.");
			return false;
		}

		$code = codebot::generate_code();

		if (empty ($code)) {
			trigger_error("Code konnte nicht erzeugt werden. Versuch es bitte erneut");
			return false;
			}

		char_code::add($code, $itemid, $account_id, $quantity, $char_guid, $new_level, $titleid, $achievid );

		return false;

	}

	public static function generate_code() {
		$startpos = rand(1, 5);
		$endpos = rand(11, 16);
		$code = mb_substr(md5(time(), rand(400, 9282)), $startpos, $endpos);

		$code = mb_strtoupper($code);

		if ($code)
			return $code;

		return false;
	}

}