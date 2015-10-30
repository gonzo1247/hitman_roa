<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 30.10.2015
 * Time: 20:33
 * Notes: -
 */

class points_log {
	private static $prefix;
	private static $tablename = "points_log";
	private static $connection = "phpbb_db";

	public static function add($user_id, $date, $points, $reason = NULL, $from)  {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (user_id, date, points, reason, from ) VALUES (:user_id, :date, :points, :reason, :from)';

		return SQL::execute(self::getConnection(), $sql,
			array(
				"user_id" => $user_id,
				"date" => $date,
				"points" => $points,
				"reason" => $reason,
				"from" => $from,
			)
		);
	}

	public static function delete($id, $user_id) {
		$sql = 'DELETE FROM '. self::getFullTableName() . ' WHERE id = :id AND user_id = :user_id';

		return SQL::execute(self::getConnection(), $sql, array("id" => $id, "user_id" => $user_id));

	}

	public static function get($user_id) {
		return SQL::query(self::getConnection(). 'SELECT * FROM ' . self::getFullTableName() . ' WHERE user_id = :user_id', array("user_id" => $user_id);

	}

	/**
	 * @return string
	 */
	public static function getPrefix() {
		global $own_prefix;
		if(! isset(self::$prefix))
			self::setPrefix($own_prefix);

		return self::$prefix;
	}

	/**
	 * @return string
	 */
	public static function getTablename() {
		return self::$tablename;
	}

	/**
	 * @return string
	 */
	private static function getConnection() {
		return self::$connection;
	}

	/**
	 * @param string $prefix
	 */
	private static function setPrefix($prefix) {
		self::$prefix = $prefix;
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
	public static function getFullTableName() {
		return self::getPrefix() . self::getTablename();
	}
}
