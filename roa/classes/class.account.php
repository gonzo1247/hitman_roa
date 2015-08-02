<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/01
 * Time: 19:11
 */

class account {
	public static function game_account_create($username = "", $paswd = "", $email = "", $date = "", $ip = "" ) {
		// wow account table needs: id, username, pass hash, email, joindata, last_ip, expansion, locale
		// with RAF functions: recruiter (account guid)

		if (!empty ($username) && !empty ($paswd) && !empty ($email) && !empty ($date) && !empty ($ip)) {
			$username = mb_strtolower(($username));

			// Check is Username Already exist in wow account Database?
			$usnam = auth_account::get($username);
			if ($usnam != null)
				return "Error: Benutzername exestiert bereits schon.<br>" . PHP_EOL . "Bitte waehle einen anderen Namen!";

			$ujoin = gmdate("Y-m-d H:i:s", $date);
			$pass_sha = self::sha_password($username, $paswd);
			auth_account::add($username, $pass_sha, $email, $ujoin, $ip);

			$username2 = auth_account::get($username);

			if ($username2)
				return true;

			return false;
		}

		return false;
	}

	public static function sha_password ( $username, $pass ) {

		$username = strtoupper ( $username );
		$pass = strtoupper ( $pass );
		$SHA1P = ( $username . ':' . $pass );

		return hash ( 'sha1', $SHA1P );
	}

}
