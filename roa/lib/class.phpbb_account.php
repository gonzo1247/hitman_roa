<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 03.08.2015
 * Time: 21:41
 * Notes: -
 */

/**
 * Class phpbb_account
 */
class phpbb_account {
	private static $prefix;
	private static $tablename = "users";
	private static $connection = "phpbb_db";

	public static function add() {
		//todo
	}

	public static function update() {
		//todo
	}

	/**
	 * @param int $id
	 * @return mixed
	 */
	public static function get($id) {
		$sql = 'SELECT * FROM ' . self::getFullTableName() . ' WHERE user_id = :id';

		return SQL::query(
			self::getConnection(),
			$sql,
			array(
				"id" => $id
			)
		);
	}

	/**
	 * @param string $username
	 * @return mixed|null
	 */
	public static function getByName($username) {
		$sql = 'SELECT * FROM ' . self::getFullTableName() . ' WHERE username = :username';

		return SQL::query(
			self::getConnection(),
			$sql,
			array(
				"username" => $username
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

	/**
	 * @return string
	 */
	public static function getFullTableName() {
		return self::getPrefix() . self::getTablename();
	}

	/**
	 * @param $user_id
	 * @return bool
	 */
	public static function clearUserPerms($user_id) {
		$result = SQL::execute(self::getConnection(), 'UPDATE ' . self::getFullTableName() . ' SET user_permissions = \'\' WHERE user_id = :id', array("id" => $user_id));

		if($result !== false)
			return true;
		return false;
	}

	/**
	 * @param int $user_id
	 * @param int $groupId
	 * @param string $groupColor
	 * @return bool
	 */
	public static function updateMainGroup($user_id, $groupId, $groupColor) {
		$result = SQL::execute(
			self::getConnection(),
			'UPDATE ' . self::getFullTableName() . ' SET group_id = :group_id AND user_colour = :color WHERE user_id = :u_id',
			array("group_id" => $groupId, "color" => $groupColor, "u_id" => $user_id)
		);

		if($result !== false)
			return true;
		return false;
	}
}
