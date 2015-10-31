<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/10/30
 * Time: 23:33
 */

/**
 * Class user_unbann
 */
class user_unbann {
	private static $prefix;
	private static $tablename = "user_unbanns";
	private static $connection = "phpbb_db";

	/**
	 * @param int $fid - forums user id
	 * @param int $gid - game user id
	 * @param int $from - bann beginn
	 * @param int $till - bann ends
	 * @param int $level - Bann is active for: Forum (1), Game (2) or both (0)
	 * @param string $unbannedby - User is Unbanned by
	 * @param string $unbannip - IP from Unbanner
	 * @return int
	 */
	public static function add($fid, $gid, $from, $till, $unbannedby, $unbannip, $level = 0) {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (
			banned_fid,
			banned_gid,
			banned_from,
			banned_till,
			level,
			unbannedby,
			unbannip,
			date
		) VALUES (
			:fid,
			:gid,
			:from,
			:till,
			:level,
			:unbannedby,
			:unbannip,
			:date
		)';

		return SQL::execute(self::getConnection(), $sql,
			array(
				"fid" => $fid,
				"gid" => $gid,
				"from" => $from,
				"level" => $level,
				"till" => $till,
				"unbannedby" => $unbannedby,
				"unbannip" => $unbannip,
				"date" => common_functions::currentdate(),
			)
		);
	}

	/**
	 *
	 */
	private static function delete() {
		// VOID
	}

	/**
	 *
	 */
	private static function update() {
		// VOID
	}

	/**
	 * @param int $fid - forum user id
	 * @param int $from - bann beginn
	 * @param int $till - bann ends
	 * @return mixed|null
	 */
	public static function get($fid, $from, $till) {
		$sql = 'SELECT * FROM ' . self::getFullTableName() . ' WHERE banned_fid = :id AND banned_from = :from AND banned_till = :till';
		return SQL::query(
			self::getConnection(),
			$sql,
			array(
				"id" => $fid,
				"from" => $from,
				"till" => $till
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
