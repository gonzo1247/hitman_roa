<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 30.10.2015
 * Time: 20:32
 * Notes: -
 */

/**
 * Class point_costs
 */
class point_costs {
	private static $prefix;
	private static $tablename = "point_costs";
	private static $connection = "phpbb_db";

	public static function add($name, $costs, $desc = null, $enabled = 0) {
		//return SQL::execute(self::getConnection(), $sql, array()); todo
	}

	/**
	 * @param int $id
	 * @return int
	 */
	public static function delete($id) {
		$sql = 'DELETE FROM ' . self::getFullTableName() . ' WHERE id = :id';

		return SQL::execute(self::getConnection(), $sql, array("id" => $id));
	}

	public static function update($id, $name = null, $costs = null, $descr = null, $enabled = null) {
		//todo
	}

	/**
	 * @param int $id
	 * @return mixed|null
	 */
	public static function get($id) {
		return SQL::query(self::getConnection(), 'SELECT * FROM ' . self::getFullTableName() . ' WHERE id = :id', array("id" => $id));
	}

	/**
	 * @param int|bool $limit
	 * @return mixed|null
	 */
	public static function getAll($limit = false) {
		$parms = array();
		if($limit)
			$parms = array("limit" => (int) $limit);

		$sql = 'SELECT * FROM ' . self::getFullTableName() . ($limit) ? ' LIMIT :limit' : '';

		return SQL::query(self::getConnection(), $sql, $parms);
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
