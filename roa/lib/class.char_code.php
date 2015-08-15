<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/15
 * Time: 11:20
 */
class char_code {
	private static $prefix;
	private static $tablename = "code";
	private static $connection = "char_db";

	public static function add($code = "", $item_id = 0, $account_id = 0, $quantity = 1, $char_guid, $new_level, $title_id, $achievement_id) {
		$sql = 'INSERT INTO ' . self::getPrefix() . self::getTablename() . ' (
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
		:account,
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

}