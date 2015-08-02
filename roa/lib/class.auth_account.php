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

	public static function add($username = "", $sha_pass_hash = "", $email = "", $joinDate = "", $last_ip = "", $expansion = "3", $locale = "3", $recruiter = "", $activated = "" ) {
		$sql = 'INSERT INTO ' . self::getPrefix() . self::getTablename() . ' (
			username,
			sha_pass_hash,
			email,
			joindate,
			last_ip,
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

	public static function delete() {

	}

	public static function update() {

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