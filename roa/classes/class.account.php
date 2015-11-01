<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/01
 * Time: 19:11
 */

/**
 * Class account
 */
class account {
	/**
	 * @param string $username
	 * @param string $paswd
	 * @param string $email
	 * @param string $ip
	 * @return bool
	 */
	public static function game_account_create($username, $paswd, $email = "none@domain.com", $ip = "127.0.0.1") {
		// wow account table needs: id, username, pass hash, email, joindata, last_ip, expansion, locale
		// with RAF functions: recruiter (account guid)

		if (! empty($username) && ! empty($paswd) && ! empty($email) && ! empty($ip)) {
			$username = mb_strtolower($username);

			// Check is Username Already exist in wow account Database?
			$usnam = auth_account::get($username);
			if($usnam === false)
				return false;

			// Get recruiter-field
			$recruiter = self::check_refferer($username);
			$pass_sha = self::sha_password($username, $paswd);
			auth_account::add($username, $pass_sha, $email, gmdate("Y-m-d H:i:s", time()), "127.0.0.1", 1, 3, 3, $recruiter);

			if(auth_account::get($username) !== false)
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

	/**
	 * @param int $userid
	 * @return bool
	 */
	public static function game_account_activate($userid) {
		if (empty($userid))
			return false;

		if (auth_account::update_activated($userid))
			return true;

		return false;
	}

	/**
	 * @param string $pwd
	 * @param string $username
	 * @return bool
	 */
	public static function game_account_password($pwd, $username) {
		if(! empty($pwd) && ! empty($username)) {
			$username = mb_strtolower($username);

			$pwd_sha = self::sha_password($username, $pwd);
			if(auth_account::update_password(auth_account::get_id($username), $pwd_sha))
				return true;
		}
		return false;
	}

	/**
	 * @param string $username
	 * @param string $email
	 * @return bool
	 */
	public static function game_account_email($username, $email) {
		if (! empty($username) && ! empty($email)) {
			$username = mb_strtolower($username);

			if(auth_account::update_email(auth_account::get_id($username), $email)) {
				// Lock user on change E-Mail
				if(auth_account::update_activated(auth_account::get_id($username), "127.0.0.1", 1))
					return true;
			}
		}
		return false;
	}

	/**
	 * @param string $username
	 * @return bool|int
	 */
	private static function check_refferer($username) {
		$phpbb_account = phpbb_account::get($username);
		if($phpbb_account) {
			$phpbb_special_fields = phpbb_profile_fields_data::get_by_id($phpbb_account[0]["user_id"]);
			if($phpbb_special_fields[0]["pf_werb_einen_freund"]) {
				$rec_id = auth_account::get_id(mb_strtolower($phpbb_special_fields[0]["pf_werb_einen_freund"]));
				if($rec_id)
					return $rec_id;
			}
		}

		// Default Value
		return 0;
	}

}
