<?php
/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/01
 * Time: 19:33
 */

class auth_account {
	private static $prefix;
	private static $tablename = "account";
	private static $connection = "auth_db";

	public static function add($username = "", $sha_pass_hash = "", $email = "", $joinDate = "", $last_ip = "127.0.0.1", $locked = 1, $expansion = 3, $locale = 3, $recruiter = "", $activated = "" ) {
		$sql = 'INSERT INTO ' . self::getPrefix() . self::getTablename() . ' (
			username,
			sha_pass_hash,
			email,
			joindate,
			last_ip,
			locked,
			expansion,
			locale,
			recruiter,
			activated
		) VALUES (
			:username,
			:pwd_hash,
			:email,
			:date,
			:ip,
			:locked,
			:expansion,
			:locale,
			:recruiter,
			:activated
		)';
		return SQL::execute(
			self::getConnection(),
			$sql,
			array(
				"username" => $username,
				"pwd_hash" => $sha_pass_hash,
				"email" => $email,
				"date" => $joinDate,
				"ip" => $last_ip,
				"locked" => $locked,
				"expansion" => $expansion,
				"locale" => $locale,
				"recruiter" => $recruiter,
				"activated" => $activated
			)
		);

	}

	public static function get($username = "") {
		$sql = 'SELECT username FROM account WHERE username = :username';

		return SQL::query(
			self::getConnection(),
			$sql,
			array(
				"username" => $username
			)
		);

	}

	public static function get_id($username = "") {
		$sql = 'SELECT id FROM ' . self::getPrefix() . self::getTablename() . ' WHERE username = :username LIMIT 1';

		$result = SQL::query(
			self::getConnection(),
			$sql,
			array(
				"username" => $username
			)
		);
		if($result)
			return $result[0]["id"];

		return false;
	}

	public static function delete() {

	}

	public static function update_activated($userid, $ip = "0.0.0.0", $locked = 0) {
		$sql = 'UPDATE ' . self::getPrefix() . self::getTablename() . ' SET last_ip = :userip, locked = :locked WHERE id = :userid';

		return SQL::execute(
			self::getConnection(),
			$sql,
			array(
				"userip" => $ip,
				"locked" => (string) $locked,
				"userid" => (int) $userid
			)
		);
	}

	public static function update_password($userid, $pwd_hash = ""){
		$sql = 'UPDATE ' . self::getPrefix() . self::getTablename() . ' SET sha_pass_hash = :pwd_hash WHERE id = :userid';

		return SQL::execute(
			self::getConnection(),
			$sql,
			array(
				"pwd_hash" => $pwd_hash,
				"userid" => (int) $userid
			)
		);
	}

	public static function update_email($userid, $emai = "") {
		$sql = 'UPDATE ' . self::getPrefix() . self::getTablename() . ' SET email = :email WHERE id = :userid';

		return SQL::execute(
			self::getConnection(),
			$sql,
			array(
				"email" => $emai,
				"userid" => (int) $userid
			)
		);
	}

	public static function update_locked($userid, $locked = 1, $ip = "127.0.0.1") {
		$sql = 'UPDATE ' . self::getPrefix() . self::getTablename() . ' SET locked = :locked, last_ip = :ip WHERE id = :userid';

		return SQL::execute(
			self::getConnection(),
			$sql,
			array(
				"locked" => $locked,
				"ip" => $ip,
				"userid" => (int) $userid
			)
		);
	}

	/**
	 * @return string
	 */
	public static function getTablename() {
		return self::$tablename;
	}

	/**
	 * @param string $tablename
	 */
	public static function setTablename($tablename) {
		self::$tablename = $tablename;
	}

	/**
	 * @return mixed
	 */
	public static function getPrefix() {
		global $db_auth_prefix;
		if(! isset(self::$prefix))
			self::setPrefix($db_auth_prefix);

		return self::$prefix;
	}

	/**
	 * @param mixed $prefix
	 */
	private static function setPrefix($prefix) {
		self::$prefix = $prefix;
	}

	/**
	 * @return string
	 */
	private static function getConnection() {
		return self::$connection;
	}


}