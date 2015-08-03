<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 03.08.2015
 * Time: 22:10
 * Notes: -
 */

/**
 * Class phpbb_profile_fields_data
 */
class phpbb_profile_fields_data {
	private static $prefix;
	private static $tablename = "profile_fields_data";
	private static $connection = "phpbb_db";

	public static function add() {
		//todo
	}

	public static function update() {
		//todo
	}

	public static function get() {
		//todo
	}

	/**
	 * @param $id
	 * @return mixed|null
	 */
	public static function get_by_id($id) {
		$sql = 'SELECT * FROM ' . self::getPrefix() . self::getTablename() . ' WHERE user_id = :id LIMIT 1;';

		return SQL::query(
			self::getConnection(),
			$sql,
			array(
				"id" => $id
			)
		);
	}

	/**
	 * @return mixed
	 */
	public static function getPrefix() {
		global $table_prefix;
		if(! isset(self::$prefix))
			self::setPrefix($table_prefix);

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
	 * @return string
	 */
	private static function getConnection() {
		return self::$connection;
	}

	/**
	 * @param string $connection
	 */
	public static function setConnection($connection) {
		self::$connection = $connection;
	}


}
