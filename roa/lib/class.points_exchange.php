<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 01.11.2015
 * Time: 14:19
 * Notes: -
 */

/**
 * Class points_exchange
 */
class points_exchange {
	private static $prefix;
	private static $tablename = "points_exchanged";
	private static $connection = "phpbb_db";

	/**
	 * @param int $user_id
	 * @param int $cost_id
	 * @return bool
	 */
	public static function add($user_id, $cost_id) {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (
			user_id,
			cost_id,
			`date`
		) VALUES (
			:u_id,
			:cost_id,
			:date
		)';

		$result = SQL::execute(self::getConnection(), $sql, array("u_id" => $user_id, "cost_id" => $cost_id, "date" => time()));

		if($result !== false)
			return true;
		return false;
	}

	public static function delete() {
		//todo
	}

	/**
	 *
	 */
	public static function update() {
		// VOID
	}

	/**
	 * @param int $id
	 * @return bool|mixed|null
	 */
	public static function get($id) {
		$result = SQL::query(self::getConnection(), 'SELECT * FROM ' . self::getFullTableName() . ' WHERE id = :id', array("id"=> $id));

		if($result !== false)
			return $result;
		return false;
	}

	/**
	 * @param int $user_id
	 * @param bool|int $cost_id
	 * @return int
	 */
	public static function getNumByUserId($user_id, $cost_id = false) {
		$params["id"] = $user_id;
		if($cost_id)
			$params["cost_id"] = $cost_id;

		$result = SQL::query(
			self::getConnection(),
			'SELECT COUNT(id) FROM ' . self::getFullTableName() . ' WHERE user_id = :id' . (($cost_id) ? ' AND cost_id = :cost_id' : ''),
			$params
		);
		
		if($result !== false)
			return $result[0]["COUNT(id)"];
		return 0;
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
