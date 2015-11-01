<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/15
 * Time: 12:28
 */

/**
 * Class char_character
 */
class char_character {
	private static $prefix;
	private static $tablename = "characters";
	private static $connection = "char_db";

	/**
	 * @param string $char_name
	 * @return bool
	 */
	public static function get_guid($char_name) {
		$sql = 'SELECT guid FROM ' . self::getFullTableName() . ' WHERE name = :char_name LIMIT 1';

		$result = SQL::query(
			self::getConnection(),
			$sql,
			array(
				"username" => $char_name
			)
		);
		if($result)
			return $result[0]["id"];

		return false;
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
		global $db_char_prefix;
		if(! isset(self::$prefix))
			self::setPrefix($db_char_prefix);

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
	protected static function getConnection() {
		return self::$connection;
	}

	/**
	 * @param int $get_id
	 * @return mixed|null
	 */
	public static function getAllFromAccount($get_id) {
		$sql = 'SELECT guid, account, name, level FROM ' . self::getFullTableName() . ' WHERE account = :id';

		return SQL::query(self::getConnection(), $sql, array("id" => $get_id));
	}

	/**
	 * @param int $charguid - character guid
	 * @return int
	 */
	protected static function getFlag($charguid) {
		$sql = 'SELECT at_login FROM ' . self::getFullTableName() . ' WHERE guid = :guid';

		return SQL::query(self::getConnection(), $sql, array("guid" => $charguid));
	}

	/**
	 * @param int $code - code id
	 * @param int $newacc - new account id
	 * @param int $oldacc - old account id
	 * @return int|string
	 */
	protected static function tradecode($code, $newacc, $oldacc) {
		$char = char_code::getchar($code);

		if ($char != 0)
			return "Nur nicht Charakter gebundene Codes können getauscht werden.";
		if ($newacc == 0)
			return "Neue Account ID ist Ungültig";

		$sql = 'UPDATE ' . self::getFullTableName() . ' SET account_id = :new, trade_to_id = :new, trade_from_id = :old WHERE code = :code';

		return SQL::execute(self::getConnection(), $sql,
			array(
				"new" => $newacc,
				"old" => $oldacc,
				"code" => $code
			)
		);
	}

	/**
	 * @param int $charguid - character guid
	 * @return int
	 */
	protected static function updateCustomize($charguid) {
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
	 * @return string
	 */
	public static function getFullTableName() {
		return self::getPrefix() . self::getTablename();
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
	 * @param int $charguid - character guid
	 * @param int $newaccountid - new account id
	 * @param int $oldaccountid - old account id
	 * @return bool|int
	 */
	/*protected static function setCharTrans($charguid, $newaccountid, $oldaccountid) {
		if ($newaccountid == $oldaccountid)
			return false;
		if ($newaccountid == 0)
			return false;

		$sql = 'UPDATE ' . self::getFullTableName() . ' SET account = new WHERE guid = guid';
		user_transfer_log::add($charguid, $oldaccountid, $newaccountid);

		return SQL::execute(self::getConnection(), $sql, array("new" => $newaccountid, "guid" => $charguid ));
	}*/
}
