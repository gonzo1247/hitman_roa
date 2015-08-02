<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Licence: http://creativecommons.org/licenses/by-sa/4.0/
 */

/**
 * Class sql
 */
class sql {
	protected static $sqlCache = array();

	/**
	 * @param string|null $name
	 * @param string $statement
	 * @param null $fields
	 * @param int $type
	 * @return mixed|null
	 * @throws Exception
	 */
	public static function query($name = null, $statement, $fields = null, $type = PDO::FETCH_ASSOC) {
		$db = ($name) ? db_con::getDbCon($name) : DB::getInstance();
		if (! isset(self::$sqlCache[$statement]))
			self::$sqlCache[$statement] = $db->prepare($statement);

		$sth = self::$sqlCache[$statement];
		$sth->execute($fields);
		$result = $sth->fetchAll($type);
		$sth->closeCursor();
		unset($sth);
		unset($db);
		if (count($result) > 0)
			return $result;

		return null;
	}

	/**
	 * @param string|null $name
	 * @param string $statement
	 * @param array|null $fields
	 * @return int
	 * @throws Exception
	 */
	public static function queryColumnInt($name = null, $statement, $fields = null) {
		$db = ($name) ? db_con::getDbCon($name) : DB::getInstance();
		if (! isset(self::$sqlCache[$statement]))
			self::$sqlCache[$statement] = $db->prepare($statement);

		$sth = self::$sqlCache[$statement];
		$sth->execute($fields);
		$result = $sth->fetchColumn();
		$sth->closeCursor();
		unset($sth);
		unset($db);
		return (int) $result;
	}

	/**
	 * @param string|null $name
	 * @param string $statement
	 * @param null $fields
	 * @return int
	 * @throws Exception
	 */
	public static function execute($name = null, $statement, $fields = null) {
		$db = ($name) ? db_con::getDbCon($name) : DB::getInstance();
		if (!isset(self::$sqlCache[$statement]))
			self::$sqlCache[$statement] = $db->prepare($statement);

		$sth = self::$sqlCache[$statement];

		foreach($fields as $key => &$value) {
			$sth->bindParam($key, $value, self::get_type($value));
		}
		$sth->execute();

		$lastInsertId = (int) $db->lastInsertId();

		unset($sth);
		unset($db);

		return $lastInsertId;
	}

	/**
	 * @param mixed $value
	 * @return int
	 */
	private static function get_type($value) {
		switch(true) {
			case is_null($value):
				return PDO::PARAM_NULL;
			case is_int($value):
				return PDO::PARAM_INT;
			case is_bool($value):
				return PDO::PARAM_BOOL;
			default:
				return PDO::PARAM_STR;
		}
	}
}
