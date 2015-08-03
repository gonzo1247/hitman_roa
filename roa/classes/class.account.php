<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/01
 * Time: 19:11
 */

mb_internal_encoding("UTF-8");
class account {
	public static function game_account_create($username = "", $paswd = "", $email = "", $date = "", $ip = "") {
		// wow account table needs: id, username, pass hash, email, joindata, last_ip, expansion, locale
		// with RAF functions: recruiter (account guid)

		if (! empty($username) && ! empty($paswd) && ! empty($email) && ! empty($date) && ! empty($ip)) {
			$username = mb_strtolower($username);

			// Check is Username Already exist in wow account Database?
			$usnam = auth_account::get($username);
			if($usnam != null)
				return false;

			$ujoin = gmdate("Y-m-d H:i:s", $date);
			$pass_sha = self::sha_password($username, $paswd);
			auth_account::add($username, $pass_sha, $email, $ujoin, $ip);

			if(auth_account::get($username))
				return true;

			return false;
		}

		return false;
	}

	/**
	 * @param string $username
	 * @param string $pass
	 * @return string - WoW-Passwd
	 */
	public static function sha_password($username, $pass) {
		$username = mb_strtoupper($username);
		$pass = mb_strtoupper($pass);
		$SHA1P = ($username . ':' . $pass);

		return hash('sha1', $SHA1P);
	}

	public static function game_account_activate ($userid) {
		if (empty ($userid))
			return false;

		if (auth_account::update_activated($userid))
			return true;

		return false;
	}

	public static function game_account_password($pwd = "", $username = "") {
		if(! empty($pwd) && ! empty($username)) {
			$username = mb_strtolower($username);

			$pwd_sha = self::sha_password($username, $pwd);
			if(auth_account::update_password(auth_account::get_id($username), $pwd_sha))
				return true;
		}
		return false;
	}

	public static function game_account_email($username, $email = "") {
		if (!empty ($username) && !empty ($email)) {
			$username = mb_strtolower($username);

			if(auth_account::update_email(auth_account::get_id($username), $email)) {
				// Lock user on change E-Mail
				if(auth_account::update_activated(auth_account::get_id($username), "127.0.0.1", 1))
					return true;
			}
		}
		return false;
	}

}
