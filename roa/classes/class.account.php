<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/01
 * Time: 19:11
 */

class account {
	public function game_account_create($username = "", $paswd = "", $email = "", $date = "", $ip = "" ) {
		// wow account table needs: id, username, pass hash, email, joindata, last_ip, expansion, locale
		// with RAF functions: recruiter (account guid)

	//	require_once(/roa/classes/class.auth.account.php);

		if (!empty ($username) && !empty ($paswd) && !empty ($email) && !empty ($date) && !empty ($ip)) {
			$username = mb_strtolower(($username));

			// Check is Username Already exist in wow account Database?

			auth.account::get($username);






		}
	}

}