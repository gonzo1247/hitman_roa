<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2016/08/20
 * Time: 11:58
 */
class mantis_account {
	private static $prefix;
	private static $tablename = "mantis_user_table";
	private static $connection = "mantis_db";


	public static function add($username = "", $md5_pw_hash = "", $email = null, $enabled = 1,  $acces_level = 25) {
		$date_created = time();
		$md5_pw = md5($md5_pw_hash, false);

		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (
			username,
			email,
			password,
			enabled,
			access_level,
			data_created
		) VALUES (
			:username,
			:email,
			:password,
			:enabled,
			:access_level,
			:data_created

		)';
		return SQL::execute(
			self::getConnection(),
			$sql,
			array(
				"username" => $username,
				"email" => $email,
				"password" => $md5_pw,
				"enabled" => $enabled,
				"access_level" => $acces_level,
				"data_created" => $date_created
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

	/**
	 * @return string
	 */
	public static function getFullTableName() {
		return self::getPrefix() . self::getTablename();
	}

}