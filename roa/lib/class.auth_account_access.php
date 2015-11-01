<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/11/01
 * Time: 14:58
 */
class auth_account_access {
	private static $prefix;
	private static $tablename = "account_access";
	private static $connection = "auth_db";

	/**
	 * @param int $accid - account id to update
	 * @param int $gmlevel - new gm level
	 * @param int $realm - realm id
	 * @return int
	 */
	public static function add($accid, $gmlevel = 0, $realm = -1) {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (id, gmlevel, RealmID) VALUES (:id, :level, :realm)';

		return SQL::execute(self::getConnection(), $sql,
			array(
				"id" => $accid,
				"level" => $gmlevel,
				"realm" => $realm
			)
		);
	}

	/**
	 * @param int $accid - account id to update
	 * @param int $gmlevel - new gm level
	 * @param int $realm - realm id
	 * @return int
	 */
	public static function updatelevel($accid, $gmlevel = 0, $realm = -1) {
		$sql = 'UPDATE ' . self::getFullTableName() . ' SET gmlevel = :level WHERE id = :id AND RealmID = :realm';

		return SQL::execute(self::getConnection(), $sql,
			array(
				"gmlevel" => $gmlevel,
				"id" => $accid,
				"realm" => $realm
			)
		);
	}

	/**
	 * @param int $accid - account id to update
	 * @param int $realm - realm id
	 * @return int
	 */
	public static function updaterealm($accid, $realm = -1) {
		$sql = 'UPDATE ' . self::getFullTableName() . ' SET RealmID = :realm WHERE id = :id';

		return SQL::execute(self::getConnection(), $sql,
			array(
				"realm" => $realm,
				"id" => $accid
			)
		);
	}

	/**
	 * @param int $accid - account id to update
	 * @param int $realm - realm id
	 * @return int
	 */
	public static function delete($accid, $realm = -1) {
		$sql = 'DELETE FROM ' . self::getFullTableName() . ' WHERE id = : id AND RealmID = : realm';

		return SQL::execute(self::getConnection(), $sql,
			array(
				"id" => $accid,
				"realm" => $realm
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