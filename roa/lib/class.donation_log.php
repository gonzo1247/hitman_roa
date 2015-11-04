<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/10/31
 * Time: 1:18
 */

/**
 * Class donation_log
 */
class donation_log {
	private static $prefix;
	private static $tablename = "donation_log";
	private static $connection = "phpbb_db";

	/**
	 * @param  int $user_id - forum user id
	 * @param int $money - spend money
	 * @param string $by - donater
	 * @param string $paypal - data from paypal
	 * @return int
	 */
	public static function add($user_id, $money, $by, $paypal = NULL) {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (user_id, date, money, by, paypal) VALUES (:id, :date, :money, :by, :paypal)';

		return SQL::execute(self::getConnection(),
			$sql,
			array(
				"id" => $user_id,
				"date" => time(),
				"money" => $money,
				"by" => $by,
				"paypal" => $paypal
			)
		);
	}

	/**
	 * @param int $id - log id
	 * @return int
	 */
	public static function delete($id) {
		$sql = 'DELETE FROM ' . self::getFullTableName() . ' WHERE id = :id';

		return SQL::execute(self::getConnection(), $sql, array("id" => $id));

	}

	public static function update() {
		// VOID

	}

	/**
	 * @param int $user_id - forum user id
	 * @param int $date - donate date
	 * @param  int $money - donate money
	 * @return int
	 */
	public static function get($user_id, $date, $money) {
		$sql = "SELECT * FROM " . self::getFullTableName() . ' WHERE user_id = :user AND date = :date AND money = :money';

		return SQL::execute(self::getConnection(),
			$sql,
			array(
				"user" => $user_id,
				"date" => $date,
				"money" => $money
			)
		);
	}

	/**
	 * @param bool|int $limit
	 * @return mixed|null
	 */
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
