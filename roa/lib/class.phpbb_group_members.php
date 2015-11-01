<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 01.11.2015
 * Time: 18:31
 * Notes: -
 */

/**
 * Class phpbb_group_members
 */
class phpbb_group_members {
	private static $prefix;
	private static $tablename = "user_group";
	private static $connection = "phpbb_db";

	/**
	 * @param int $group_id
	 * @param int $user_id
	 * @param int $leader
	 * @param int $pending
	 * @return bool
	 */
	public static function add($group_id, $user_id, $leader = 0, $pending = 0) {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (
			group_id,
			user_id,
			group_leader,
			user_pending
		) VALUES (
			:g_id,
			:u_id,
			:g_leader,
			:pending
		)';

		$result = SQL::execute(self::getConnection(), $sql, array("g_id" => $group_id, "u_id" => $user_id, "g_leader" => $leader, "pending" => $pending));

		if($result !== false)
			return true;
		return false;
	}

	public static function delete() {
		// todo
	}

	/**
	 * @param int $group_id
	 * @return bool|mixed|null
	 */
	public static function getUserList($group_id) {
		$sql = 'SELECT user_id FROM ' . self::getFullTableName() . ' WHERE group_id = :id';

		$result = SQL::query(self::getConnection(), $sql, array("id" => $group_id));

		if($result !== false)
			return $result;
		return false;
	}

	public static function update() {
		// VOID
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
}
