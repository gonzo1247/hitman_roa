<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/11/01
 * Time: 15:45
 */
class auth_rbac_account_groups {
	private static $prefix;
	private static $tablename = "rbac_account_groups";
	private static $connection = "auth_db";


	public static function add($accid, $group = 0, $realm = -1) {
		// Group IDs: 1 - 4 | 1 Player 2 Moderator 3 GameMaster 4 Admin. But this is not equal to the old GM Levels.
		// so when account access Support rights, so he needs group 2. Trial GameMaster 3 and GameMaster 4.
		if ($group == 1)
			return "Spieler Gruppe. Ungültig";

		for ($i = 0; $i <= $group; $i++) {
			$sql = 'INSERT INTO ' . self::getFullTableName() . ' (accountId, groupId, realmId) VALUES (:acc, :group, :realm)';

			return SQL::execute(self::getConnection(), $sql,
				array(
					"acc" => $accid,
					"group" => $i,
					"realm" => $realm
				)
			);
		}
	}

	public static function delete($accid, $realm = -1) {
		$sql = 'DELETE FROM ' . self::getFullTableName() . ' WHERE accountId = :id AND realmId = :realm';

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