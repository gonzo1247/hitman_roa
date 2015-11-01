<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/11/01
 * Time: 15:11
 */
class auth_account_banned {
	private static $prefix;
	private static $tablename = "account_banned";
	private static $connection = "auth_db";


	/**
	 * @param int $accid = account id
	 * @param int $bantime - duration of ban
	 * @param string $bannedby - name of banner
	 * @param string $banreason - reason of ban
	 * @param int $active - is ban active = 1 when inactive = 0
	 * @return int
	 */
	public static function add($accid, $bantime, $bannedby, $banreason = NULL, $active = 1) {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (id, bandate, unbandate, bannedby, banreason, active) VALUES (:id, :bandate, :unban, :by, :reason, :activ';
		// un ban date is ban duration in hour. so that is saved as unix time, so we must the hour convert to seconds.
		$banseconds = $bantime * 60 * 60;
		$unbandate = time() + $banseconds;

		return SQL::execute(self::getConnection(), $sql,
			array(
				"id" => $accid,
				"bandate" => time(),
				"unban" => $unbandate,
				"by" => $bannedby,
				"reason" => $banreason,
				"active" => $active
			)
		);
	}

	/**
	 * @param int $accid - account id
	 * @param int $unbandate - when is ban ends
	 * @return int
	 */
	public static function delete($accid, $unbandate) {
		$sql = 'DELETE FROM ' . self::getFullTableName() . ' WHERE id = :id AND unbandate = :unban';

		return SQL::execute(self::getConnection(), $sql,
			array(
				"id" => $accid,
				"unban" => $unbandate
			)
		);
	}

	/**
	 * @param int $accid - account id
	 * @param int $bandate - from when is ban active
	 * @return mixed|null
	 */
	public static function getunbandate($accid, $bandate) {
		$sql = 'SELECT unbandate FROM ' . self::getFullTableName() . ' WHERE id = :id AND bandate = :date';

		return SQL::query(self::getConnection(), $sql,
			array(
				"id" => $accid,
				"bandate" => $bandate
			)
		);
	}

	/**
	 * @param int $accid - account id
	 * @param int $limit
	 * @return mixed|null
	 */
	public static function getbandate($accid, $limit = 1) {
		$sql = 'SELECT * FROM ' . self::getFullTableName() . ' WHERE id = :id LIMIT :lim';

		return SQL::query(self::getConnection(), $sql,
			array(
				"id" => $accid,
				"lim" => $limit
			)
		);
	}

	/**
	 * @param int $accid - account id
	 * @param int $unban - date of unban
	 * @return mixed|null
	 */
	public static function getactive($accid, $unban) {
		$sql = 'SELECT active FROM ' . self::getFullTableName() . ' WHERE id = :id AND unbandate = :unban';

		return SQL::query(self::getConnection(), $sql,
			array(
				"id" => $accid,
				"unban" => $unban
			)
		);
	}

	/**
	 * @return string
	 */
	public static function getTablename() {
		return self::$tablename;
	}

	/**
	 * @param string $tablename
	 */
	public static function setTablename($tablename) {
		self::$tablename = $tablename;
	}

	/**
	 * @return mixed
	 */
	public static function getPrefix() {
		global $db_auth_prefix;
		if(! isset(self::$prefix))
			self::setPrefix($db_auth_prefix);

		return self::$prefix;
	}

	/**
	 * @param mixed $prefix
	 */
	private static function setPrefix($prefix) {
		self::$prefix = $prefix;
	}

	/**
	 * @return string
	 */
	private static function getConnection() {
		return self::$connection;
	}

	/**
	 * @return string
	 */
	public static function getFullTableName() {
		return self::getPrefix() . self::getTablename();
	}
}