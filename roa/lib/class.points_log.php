<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 30.10.2015
 * Time: 20:33
 * Notes: -
 */

/**
 * Class points_log
 */
class points_log {
	private static $prefix;
	private static $tablename = "points_log";
	private static $connection = "phpbb_db";

	/**
	 * @param int $user_id - forum user id
	 * @param int $points - points it changed
	 * @param string|null $reason - reason to change the points
	 * @param string $from - from where is changed the points
	 * @return int
	 */
	public static function add($user_id, $points, $reason = null, $from = "System")  {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (
			user_id,
			date,
			points,
			reason,
			from
		) VALUES (
			:user_id,
			:date,
			:points,
			:reason,
			:from
		)';

		return SQL::execute(self::getConnection(), $sql,
			array(
				"user_id" => $user_id,
				"date" => time(),
				"points" => $points,
				"reason" => $reason,
				"from" => $from,
			)
		);
	}

	/**
	 * @param int $id - forum user id
	 * @return int
	 */
	public static function delete($id) {
		return SQL::execute(self::getConnection(), 'DELETE FROM '. self::getFullTableName() . ' WHERE id = :id', array("id" => $id));
	}

	/**
	 * @param int $id - forum user id
	 * @return mixed|null
	 */
	public static function get($id) {
		return SQL::query(self::getConnection(). 'SELECT * FROM ' . self::getFullTableName() . ' WHERE id = :id', array("id" => $id));
	}

	/**
	 * @param int $user_id - forum user id
	 * @param bool $limit
	 * @return mixed|null
	 */
	public static function getByUserId($user_id, $limit = false) {
		$params["user_id"] = $user_id;
		if($limit)
			$params["limit"] = $limit;
		return SQL::query(self::getConnection(). 'SELECT * FROM ' . self::getFullTableName() . ' WHERE user_id = :user_id' . ($limit) ? ' LIMIT :limit' : '', $params);
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
