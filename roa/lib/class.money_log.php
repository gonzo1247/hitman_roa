<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/10/31
 * Time: 0:21
 */
class money_log {
	private static $prefix;
	private static $tablename = "money_log";
	private static $connection = "phpbb_db";

	/**
	 * @param int $id - log id
	 * @param int $money - amount of maney
	 * @param string $description - description of change the money
	 * @return int
	 */
	public static function add($id, $money, $description) {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (id, date, money, description) VALUES (:id, :date, :money, :description)';

		return SQL::execute(self::getConnection(),
			$sql,
			array(
				"id" => $id,
				"date" => time(),
				"money" => $money,
				"description" => $description
			)
		);
	}

	public static function delete() {
		// VOID

	}

	public static function update() {
		// VOID

	}

	/**
	 * @param int $id - log id
	 * @return int
	 */
	public static function getById($id) {
		return SQL::execute(self::getConnection(), 'SELECT FROM ' . self::getFullTableName() . ' WHERE id = :id', array("id" => $id));
	}

	/**
	 * @param int $date - log date (unix)
	 * @return int
	 */
	public static function getByDate($date) {
		return SQL::execute(self::getConnection(), 'SELECT FROM ' . self::getFullTableName() . ' WHERE date = :date', array("date" => $date));
	}

	public static function getAll($limit = false) {
		$parms = array();
		if($limit)
			$parms = array("limit" => (int) $limit);

		$sql = "SELECT * FROM " . self::getFullTableName() . ($limit) ? " LIMIT :limit" : "";

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