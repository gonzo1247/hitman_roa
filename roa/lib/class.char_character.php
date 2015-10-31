<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/15
 * Time: 12:28
 */

/**
 * Class char_character
 */
class char_character {
	private static $prefix;
	private static $tablename = "characters";
	private static $connection = "char_db";

	public static function get_guid($char_name = "") {
		$sql = 'SELECT guid FROM ' . self::getFullTableName() . ' WHERE name = :char_name LIMIT 1';

		$result = SQL::query(
			self::getConnection(),
			$sql,
			array(
				"username" => $char_name
			)
		);
		if($result)
			return $result[0]["id"];

		return false;
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
		global $db_char_prefix;
		if(! isset(self::$prefix))
			self::setPrefix($db_char_prefix);

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
