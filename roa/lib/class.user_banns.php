<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/10/30
 * Time: 23:07
 */
class user_banns {
	private static $prefix;
	private static $tablename = "user_banns";
	private static $connection = "phpbb_db";

	/**
	 * @param int $fid - forum user id
	 * @param int $gid - game user id
	 * @param int $from - bann beginns
	 * @param int $till - bann ends
	 * @param string $level - Bann is active for: Forum, Game or both
	 * @param string $bannedby - Banned By
	 * @param int $contact - will the GM that the user him Contact -> 1 when not -> 0
	 * @param string $reason - Reason why the player is banned
	 * @return int
	 */
	public static function add($fid, $gid, $from, $till, $level, $bannedby, $contact = 0, $reason = NULL) {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (fid, gid, from, till, level, bannedby, contact, reason) VALUES (:fid, :gid, :from, :till, :level, :bannedby, :contact, :reason)';

		return SQL::execute(self::getConnection(), $sql,
			array(
				"fid" => $fid,
				"gid" => $gid,
				"from" => $from,
				"till" => $till,
				"level" => $level,
				"bannedby" => $bannedby,
				"contact" => $contact,
				"reason" => $reason,
			)
		);
	}

	/**
	 * @param int $fid - forum user id
	 * @param int $till - bann beginn
	 * @return int
	 */

	public static function delete($fid, $till) {
		$sql = 'DELETE FROM ' . self::getFullTableName() . ' WHERE fid = :fid AND till = :till)';

		return SQL::execute(self::getConnection(), $sql, array("fid" => $fid, "till" => $till));

	}

	public static function update() {
		// not needet

	}

	public static function get($fid, $from, $till) {
		 return SQL::query(self::getConnection(), "SELECT * FROM " . self::getFullTableName() . " WHERE id = :id AND from = :from AND till = :till", array("id" => $fid, "from" => $from, "till" => $till));
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
