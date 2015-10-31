<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/10/31
 * Time: 20:22
 */
class code_functions {
	private static $prefix;
	private static $tablename = "characters";
	private static $connection = "char_db";


	public static function add() {
		// VOID

	}

	private static function delete() {
		// VOID
	}

	/**
	 * @param int $charguid - character guid
	 * @return int
	 */
	private static function updateRename($charguid) {
		$activeflag = self::getFlag($charguid);
		$flag = 1;
		if ($activeflag != 0)
			$newflag = $activeflag + $flag;
		else
			$newflag = $flag;

		$sql = 'UPDATE ' . self::getFullTableName() . ' SET at_login = :flag WHERE guid = :guid';

		return SQL::execute(self::getConnection(), $sql, array("guid" => $charguid, "flag" => $newflag));
	}

	/**
	 * @param int $charguid - character guid
	 * @return int
	 */
	private static function updateRace($charguid) {
		$activeflag = self::getFlag($charguid);
		$flag = 128;
		if ($activeflag != 0)
			$newflag = $activeflag + $flag;
		else
			$newflag = $flag;

		$sql = 'UPDATE ' . self::getFullTableName() . ' SET at_login = :flag WHERE guid = :guid';

		return SQL::execute(self::getConnection(), $sql, array("guid" => $charguid, "flag" => $newflag));
	}

	/**
	 * @param int $charguid - character guid
	 * @return int
	 */
	private static function updateFaction($charguid) {
		$activeflag = self::getFlag($charguid);
		$flag = 64;
		if ($activeflag != 0)
			$newflag = $activeflag + $flag;
		else
			$newflag = $flag;

		$sql = 'UPDATE ' . self::getFullTableName() . ' SET at_login = :flag WHERE guid = :guid';

		return SQL::execute(self::getConnection(), $sql, array("guid" => $charguid, "flag" => $newflag));
	}

	/**
	 * @param int $charguid - character guid
	 * @return int
	 */
	private static function updateCustomize($charguid) {
		$activeflag = self::getFlag($charguid);
		$flag = 8;
		if ($activeflag != 0)
			$newflag = $activeflag + $flag;
		else
			$newflag = $flag;

		$sql = 'UPDATE ' . self::getFullTableName() . ' SET at_login = :flag WHERE guid = :guid';

		return SQL::execute(self::getConnection(), $sql, array("guid" => $charguid, "flag" => $newflag));
	}

	/**
	 * @param int $charguid - character guid
	 * @param int $newaccountid - new account id
	 * @param int $oldaccountid - old account id
	 * @return bool|int
	 */
	private static function setCharTransf($charguid, $newaccountid, $oldaccountid) {
		if ($newaccountid == $oldaccountid)
			return false;
		if ($newaccountid == 0)
			return false;

		$sql = "UPDATE " . self::getFullTableName() . ' SET account = new WHERE guid = guid';
		user_transfer_log::add($charguid, $oldaccountid, $newaccountid);

		return SQL::execute(self::getConnection(), $sql, array("new" => $newaccountid, "guid" => $charguid ));
	}

	/**
	 * @param int $charguid - character guid
	 * @return int
	 */
	private static function getFlag($charguid) {
		$sql = 'SELECT at_login FROM ' . self::getFullTableName() . ' WHERE guid = :guid';

		return SQL::query(self::getConnection(), $sql, array("guid" => $charguid));
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