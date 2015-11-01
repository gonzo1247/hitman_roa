<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 01.11.2015
 * Time: 18:14
 * Notes: -
 */

/**
 * Class phpbb_groups
 */
class phpbb_groups {
	private static $prefix;
	private static $tablename = "groups";
	private static $connection = "phpbb_db";

	public static function add() {
		// VOID
	}

	public static function delete() {
		// VOID
	}

	public static function get() {
		//todo
	}

	public static function update() {
		// VOID
	}

	/**
	 * @param string $name
	 * @return bool|int
	 */
	public static function getId($name) {
		$sql = 'SELECT group_id FROM ' . self::getFullTableName() . ' WHERE group_name = :name LIMIT 1';
		$result = SQL::query(self::getConnection(), $sql, array("name" => $name));

		if($result !== false)
			return $result[0]["group_id"];
		return false;
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

	/**
	 * @return string
	 */
	public static function getFullTableName() {
		return self::getPrefix() . self::getTablename();
	}

	/**
	 * @param int $groupId
	 * @return string
	 */
	public static function getColor($groupId) {
		$result = SQL::query(self::getConnection(), 'SELECT group_colour FROM ' . self::getFullTableName() . ' WHERE group_id = :id', array("id" => $groupId));

		if($result)
			return $result[0]["group_colour"];
		return "";
	}

	/**
	 * @param int $group_id
	 * @return string
	 */
	public static function getGroupName($group_id) {
		$result = SQL::query(self::getConnection(), 'SELECT group_name FROM ' . self::getFullTableName() . ' WHERE group_id = :id', array("id" => $group_id));

		if($result)
			return $result[0]["group_name"];
		return "Gruppen-ID: " . $group_id;
	}
}
