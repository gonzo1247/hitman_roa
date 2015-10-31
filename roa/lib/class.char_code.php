<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/15
 * Time: 11:20
 */

/**
 * Class char_code
 */
class char_code {
	private static $prefix;
	private static $tablename = "codes";
	private static $connection = "char_db";

	/**
	 * @param string $code
	 * @param int $account_id
	 * @param int $char_guid
	 * @param int $item_id
	 * @param int $new_level
	 * @param int $title_id
	 * @param int $achievement_id
	 * @param int $quantity
	 * @return int
	 */
	public static function add($code, $account_id, $char_guid = 0, $item_id = 0, $new_level = 0, $title_id = 0, $achievement_id = 0, $quantity = 1) {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (
			code,
			item_id,
			account_id,
			quantity,
			char_guid,
			new_level,
			title_id,
			achievement_id
		) VALUES (
			:code,
			:item_id,
			:account_id,
			:quantity,
			:char_guid,
			:new_level,
			:title_id,
			:achiev_id
		)';

		return SQL::execute(
			self::getConnection(),
			$sql,
			array(
				"code" => $code,
				"item_id" => $item_id,
				"account_id" => $account_id,
				"quantity" => $quantity,
				"char_guid" => $char_guid,
				"new_level" => $new_level,
				"title_id" => $title_id,
				"achiev_id" => $achievement_id
			)
		);

	}

	/**
	 * @param string $code
	 * @return int
	 */
	public static function delete($code) {
		return SQL::execute(self::getConnection(), 'DELETE FROM ' . self::getFullTableName() . ' WHERE code = :code', array("code" => $code));
	}

	public static function update() {
		// VOID
	}

	/**
	 * @param string $code
	 * @return mixed|null
	 */
	public static function get($code) {
		$sql = 'SELECT * FROM ' . self::getFullTableName() . ' WHERE code = :code';

		return SQL::query(self::getConnection(), $sql, array("code" => $code));
	}

	/**
	 * @param string $code
	 * @return mixed|null
	 */
	public static function getchar($code) {
		$sql = 'SELECT char_guid FROM ' . self::getFullTableName() . ' WHERE code = :code';

		return SQL::query(self::getConnection(), $sql, array("code" => $code));
	}

	/**
	 * @param string $code
	 * @return mixed|null
	 */
	public static function gettitle($code) {
		$sql = 'SELECT title_id FROM ' . self::getFullTableName() . ' WHERE code = :code';

		return SQL::query(self::getConnection(), $sql, array("code" => $code));
	}

	/**
	 * @param string $code
	 * @return mixed|null
	 */
	public static function getarchiev($code) {
		$sql = 'SELECT archievement_id FROM ' . self::getFullTableName() . ' WHERE code = :code';

		return SQL::query(self::getConnection(), $sql, array("code" => $code));
	}

	/**
	 * @param string $code
	 * @return mixed|null
	 */
	public static function getlevel($code) {
		$sql = 'SELECT new_level FROM ' . self::getFullTableName() . ' WHERE code = :code';

		return SQL::query(self::getConnection(), $sql, array("code" => $code));
	}

	/**
	 * @param string $code
	 * @return mixed|null
	 */
	public static function getaccount($code) {
		$sql = 'SELECT account_id FROM ' . self::getFullTableName() . ' WHERE code = :code';

		return SQL::query(self::getConnection(), $sql, array("code" => $code));
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
