<?php
/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/01
 * Time: 19:33
 */

class auth_account {
	private static $tablename = "account";

	public static function add($id = "" , $username = "", $sha_pass_hash = "", $email = "", $joindata = "", $last_ip = "", $expansion = "3", $locale = "3", $recruiter = "", $activated = "" ) {
		$sql = 'INSERT INTO account (
			id,
			username,
			sha_pass_hash,
			email,
			joindata,
			last_ip,
			expansion,
			locale,
			recruiter,
			activated
		) VALUES (
			:id,
			:username,
			:pwd_hash,
			:email,
			:data,
			:ip,
			:expansion,
			:locale,
			:recruiter,
			:activated
		)';
		return SQL::execute(
			$sql,
			array(
				"id" => $id,
				"pwd_hash" => $sha_pass_hash,
				"email" => $email,
				"data" => $joindata,
				"ip" => $last_ip,
				"expansion" => $expansion,
				"locale" => $locale,
				"recruiter" => $recruiter,
				"activated" => $activated
			)
		);

	}

	public static function get($username = "") {
		$sql = 'SELECT username FROM account WHERE username = :username';

		return SQL::execute(
			$sql,
			array(
				"username" => $username
			)
		);

		return array();

	}


	public static function delete() {

	}

	public static function update() {

	}
}