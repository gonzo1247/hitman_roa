<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/10/31
 * Time: 21:05
 */
class user_transfer_log {
	private static $prefix;
	private static $tablename = "user_transfer_log";
	private static $connection = "phpbb_db";

	/**
	 * @param int $charguid - character guid
	 * @param int $oldacc - old account id
	 * @param int $newacc - new account id
	 * @return int
	 */
	public static function add($charguid, $oldacc, $newacc) {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (charguid, oldaccountid, newaccountid, date) VALUES (:char, :old, :new, :date)';

		return SQL::execute(self::getConnection(), $sql,
			array(
				"char" => $charguid,
				"old" => $oldacc,
				"new" => $newacc,
				"date" => time()
				)
		);
	}

	private static function delete() {
		// VOID
	}

	private static function update() {
		// VOID
	}

	public static function get() {
		// VOID

	}

	/**
	 * @param bool|int $limit
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