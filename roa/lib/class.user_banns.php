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
	 * @param int $fid -
	 * @param $gid
	 * @param $from
	 * @param $till
	 * @param $level
	 * @param $bannedby
	 * @param int $contact
	 * @param null $reason
	 * @return int
	 */
	public static function add($fid, $gid, $from, $till, $level, $bannedby, $contact = 0, $reason = NULL) {
		// fid = forums user id , gid = game user id, from = ban is begin, till = ban is ending, level = Forum, Game or both, bannedby = where is banned the user, contact = will the gm that the user him contact?
		// reason = reason for this ban
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

	public static function delete($fid, $till, $bannedby) {
		$sql = 'DELETE FROM ' . self::getFullTableName() . ' WHERE fid = :fid AND till = :till AND bannedby = :bannedby)';

		return SQL::execute(self::getConnection(), $sql, array("fid" => $fid, "till" => $till, "bannedby" => $bannedby));

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
