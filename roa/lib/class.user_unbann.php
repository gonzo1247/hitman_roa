<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/10/30
 * Time: 23:33
 */
class user_unbann {
	private static $prefix;
	private static $tablename = "user_banns";
	private static $connection = "phpbb_db";

	/**
	 * @param int $fid - forums user id
	 * @param int $gid - game user id
	 * @param int $from - bann beginn
	 * @param int $till - bann ends
	 * @param string $level - Bann is active for: Forum, Game or both
	 * @param string $unbannedby - User is Unbanned by
	 * @param string $unbannip - IP from Unbanner
	 * @param int $date - today time and date
	 * @return int
	 */
	public static function add($fid, $gid, $from, $till, $level, $unbannedby, $unbannip, $date) {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (banned_fid, banned_gid, banned_from, banned_till, level, unbannedby, unbannip, date) VALUES
		{:fid, :gid, :from, :till, :level, :unbannedby, :unbannip, :date)';

		return SQL::execute(self::getConnection(), $sql,
			array(
				"fid" => $fid,
				"gid" => $gid,
				"from" => $from,
				"till" => $till,
				"unbannedby" => $unbannedby,
				"unbannip" => $unbannip,
				"date" => time(),
			)
		);
	}

	public static function delete() {
		// never delete entrys from this database

	}

	public static function update() {
		// not needet

	}

	public static function get($fid, $from, $till) {
		return SQL::query(self::getConnection(), "SELECT * FROM " . self::getFullTableName() . " WHERE banned_fid = :id AND banned_from = :from AND banned_till = :till", array("id" => $fid, "from" => $from, "till" => $till));
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