<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 03.08.2015
 * Time: 21:41
 * Notes: -
 */

/**
 * Class phpbb_account
 */
class phpbb_account {
	private static $prefix;
	private static $tablename = "users";
	private static $connection = "phpbb_db";

	public static function add() {
		//todo
	}

	public static function update() {
		//todo
	}

	/**
	 * @param int $id
	 * @return mixed
	 */
	public static function get($id) {
		$sql = 'SELECT * FROM ' . self::getFullTableName() . ' WHERE user_id = :id';

		return SQL::query(
			self::getConnection(),
			$sql,
			array(
				"id" => $id
			)
		);
	}

	/**
	 * @param string $username
	 * @return mixed|null
	 */
	public static function getByName($username) {
		$sql = 'SELECT * FROM ' . self::getFullTableName() . ' WHERE username = :username';

		return SQL::query(
			self::getConnection(),
			$sql,
			array(
				"username" => $username
			)
		);
	}

	/**
	 * @return mixed
	 */
	public static function getPrefix() {
		global $table_prefix;
		if(! isset(self::$prefix))
			self::setPrefix($table_prefix);

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
	 * @return string
	 */
	private static function getConnection() {
		return self::$connection;
	}

	/**
	 * @param string $connection
	 */
	public static function setConnection($connection) {
		self::$connection = $connection;
	}

	/**
	 * @return string
	 */
	public static function getFullTableName() {
		return self::getPrefix() . self::getTablename();
	}

	/**
	 * @param $user_id
	 * @return bool
	 */
	public static function clearUserPerms($user_id) {
		$result = SQL::execute(self::getConnection(), 'UPDATE ' . self::getFullTableName() . ' SET user_permissions = \'\' WHERE user_id = :id', array("id" => $user_id));

		if($result !== false)
			return true;
		return false;
	}

	/**
	 * @param int $user_id
	 * @param int $groupId
	 * @param string $groupColor
	 * @return bool
	 */
	public static function updateMainGroup($user_id, $groupId, $groupColor) {
		$result = SQL::execute(
			self::getConnection(),
			'UPDATE ' . self::getFullTableName() . ' SET group_id = :group_id AND user_colour = :color WHERE user_id = :u_id',
			array("group_id" => $groupId, "color" => $groupColor, "u_id" => $user_id)
		);

		if($result !== false)
			return true;
		return false;
	}

	/**
	 * @param int $id
	 * @return string|false
	 */
	protected static function getUserPassword($id) {
		$sql = 'SELECT user_password FROM ' . self::getFullTableName() . ' WHERE user_id = :id';

		$result = SQL::query(self::getConnection(), $sql, array("id" => $id));

		if($result !== false)
			return $result[0]["user_password"];
		return false;
	}

	/**
	 * Check for correct password ->Copied from phpbb (functions.php)<-
	 *
	 * @param string $password The password in plain text
	 * @param string $hash The stored password hash
	 *
	 * @return bool Returns true if the password is correct, false if not.
	 */
	protected static function phpbb_check_hash($password, $hash) {
		if (strlen($password) > 4096) {
			// If the password is too huge, we will simply reject it
			// and not let the server try to hash it.
			return false;
		}

		$itoa64 = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		if (strlen($hash) == 34)
			return (self::_hash_crypt_private($password, $hash, $itoa64) === $hash) ? true : false;

		return (md5($password) === $hash) ? true : false;
	}

	/**
	 * The crypt function/replacement ->Copied from phpbb (functions.php)<-
	 *
	 * @param string $password
	 * @param string $setting
	 * @param string $itoa64
	 * @return string
	 */
	private static function _hash_crypt_private($password, $setting, &$itoa64) {
		$output = '*';

		// Check for correct hash
		if (substr($setting, 0, 3) != '$H$' && substr($setting, 0, 3) != '$P$')
			return $output;

		$count_log2 = strpos($itoa64, $setting[3]);

		if ($count_log2 < 7 || $count_log2 > 30)
			return $output;

		$count = 1 << $count_log2;
		$salt = substr($setting, 4, 8);

		if (strlen($salt) != 8)
			return $output;

		/**
		 * We're kind of forced to use MD5 here since it's the only
		 * cryptographic primitive available in all versions of PHP
		 * currently in use.  To implement our own low-level crypto
		 * in PHP would result in much worse performance and
		 * consequently in lower iteration counts and hashes that are
		 * quicker to crack (by non-PHP code).
		 */
		if (PHP_VERSION >= 5) {
			$hash = md5($salt . $password, true);
			do {
				$hash = md5($hash . $password, true);
			} while (--$count);
		} else {
			$hash = pack('H*', md5($salt . $password));
			do {
				$hash = pack('H*', md5($hash . $password));
			} while (--$count);
		}

		$output = substr($setting, 0, 12);
		$output .= self::_hash_encode64($hash, 16, $itoa64);

		return $output;
	}

	/**
	 * Encode hash ->Copied from phpbb (functions.php)<-
	 *
	 * @param string $input
	 * @param int $count
	 * @param string $itoa64
	 * @return string
	 */
	private static function _hash_encode64($input, $count, &$itoa64) {
		$output = '';
		$i = 0;

		do {
			$value = ord($input[$i++]);
			$output .= $itoa64[$value & 0x3f];

			if ($i < $count)
				$value |= ord($input[$i]) << 8;

			$output .= $itoa64[($value >> 6) & 0x3f];

			if ($i++ >= $count)
				break;

			if ($i < $count)
				$value |= ord($input[$i]) << 16;

			$output .= $itoa64[($value >> 12) & 0x3f];

			if ($i++ >= $count)
				break;

			$output .= $itoa64[($value >> 18) & 0x3f];
		} while ($i < $count);

		return $output;
	}
}
