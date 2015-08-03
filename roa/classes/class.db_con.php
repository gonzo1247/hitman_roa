<?php
/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/02
 * Time: 13:44
 */

/**
 * Class db_con
 */
class db_con {
	private static $db_con = array();

	/**
	 * @return array
	 */
	public static function getDbCon($name) {
		return self::$db_con[$name];
	}

	/**
	 * @param db $db_con
	 * @param string $name
	 */
	public static function setDbCon($db_con, $name) {
		self::$db_con[$name] = $db_con;
	}
}
