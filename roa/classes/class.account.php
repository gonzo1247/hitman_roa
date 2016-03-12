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
	 * @param bool $allow_get_existing
	 * @return bool
	 */
	public static function game_account_create($username, $paswd, $email = "none@domain.com", $ip = "127.0.0.1", $allow_get_existing = true) {

		if (! empty($username) && ! empty($paswd) && ! empty($email) && ! empty($ip)) {
			// Make little
			$username = mb_strtolower($username);
			$email = mb_strtolower($email);

			// Generate WoW-Password
			$pass_sha = self::sha_password($username, $paswd);

			// Check is Username Already exist in wow account Database?
			if(auth_account::exists($username, false) && $allow_get_existing) {
				// Check if the use typed the same data like the existing account
				$wow_acc_info = auth_account::getByName($username);

				if($wow_acc_info[0]["sha_pass_hash"] == $pass_sha && mb_strtolower($wow_acc_info[0]["email"]) == $email) {
					// Disable WoW-Account until Forums-Account is activated
					auth_account::update_activated($wow_acc_info[0]["id"], $ip, 1);

					// return true for successfully "creation"
					return true;
				}

				// Failed verification
				return "Die von dir eingegebenen Daten (Passwort & E-Mailadresse) stimmen nicht mit dem bereits existierenden WoW-User " . $username . " überein!<br />" .
					"WICHTIGE INFO: WoW-Accounts ignorieren die Groß/Kleinschreibung!<br />" .
					"Bitte gebe die korrekten Daten an, um deinen alten WoW-Account zu erhalten oder nutze einen nicht vergebenen Usernamen, wenn du einen neuen erstellen möchtest!<hr />" .
					"(WoW-Account exists, if its yours, type in the correct E-Mail and Password of your old Acc! If its not yours please choose another Name.)";
			} elseif(auth_account::exists($username, false))
				return "Der Account existiert bereits!";

			// Get recruiter-field
			$recruiter = self::check_refferer($username);

			auth_account::add($username, $pass_sha, $email, gmdate("Y-m-d H:i:s", time()), $ip, 1, 3, 3, $recruiter);

			if(auth_account::exists($username, false) !== false)
				return true; // Success!

			return "Account konnte nicht erstellt werden... Unbekannter Fehler! (Can't create WoW-Account - Unknown Error...)";
		}

		return "Angaben fehlen, bitte fülle alles erforderliche aus! (Please fill all out whats needed!)";
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
		require_once(LIB_DIR . DS . 'class.phpbb_account.php');
		require_once(LIB_DIR . DS . 'class.phpbb_profile_fields_data.php');

		$phpbb_account = phpbb_account::getByName($username);
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
