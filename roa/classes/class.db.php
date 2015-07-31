<?php
/**
 * Author: Ronny Grunner & Peter Dragicevic [peter-91@hotmail.de]
 * Licence: -
 */

/**
 * Class db
 */
class db extends PDO {
	private static $instance;

	/**
	 * @param string $dsn
	 * @param string $username
	 * @param string $password
	 * @param array|null $options
	 */
	public function __construct($dsn, $username, $password, $options = NULL) {
		parent::__construct($dsn, $username, $password, $options);
		parent::setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		parent::setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
		parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	/**
	 * @param string $dsn
	 * @param string $username
	 * @param string $password
	 * @param string $options
	 * @return db
	 */
	public static function &db_instance($dsn, $username, $password, $options) {
		if (! isset(self::$instance))
			self::$instance = new db($dsn, $username, $password, $options);
		return self::$instance;
	}

	/**
	 * @return mixed
	 * @throws Exception
	 */
	public static function &getInstance() {
		if (isset(self::$instance))
			return self::$instance;
		else
			throw new Exception("There are no DB-Connections available...");
	}

	/**
	 * @param string $statement
	 * @param int $type
	 * @param array|null $args
	 * @param array|null $actor
	 * @return PDOStatement
	 * @throws Exception
	 */
	public function query($statement, $type = 0, $args = NULL, $actor = NULL) {
		$result = parent::query($statement, $type);
		if ($result === false)
			$this->SQLError();
		return $result;
	}

	/**
	 * @param string $statement
	 * @return PDOStatement
	 * @throws Exception
	 */
	public function exec($statement) {
		$result = parent::query($statement);
		if ($result === false)
			$this->SQLError();
		return $result;
	}

	/**
	 * @throws Exception
	 */
	private function SQLError() {
		$error = $this->errorInfo();
		throw new Exception($error[2]);
	}
}
