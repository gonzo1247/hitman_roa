<?php
/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/01
 * Time: 19:33
 */

/**
 * Class auth_account
 */
class auth_account {
	private static $prefix;
	private static $tablename = "account";
	private static $connection = "auth_db";

	/**
	 * @param string $username
	 * @param string $sha_pass_hash
	 * @param string $email
	 * @param string $joinDate
	 * @param string $last_ip
	 * @param int $locked
	 * @param int $expansion
	 * @param int $locale
	 * @param int $recruiter
	 * @param int|null $activated
	 * @return int
	 */
	public static function add($username = "", $sha_pass_hash = "", $email = null, $joinDate = null, $last_ip = "127.0.0.1", $locked = 1, $expansion = 3, $locale = 3, $recruiter = 0, $activated = 0) {
		if ($recruiter == 0) {
			$rec_data = 0;
		}
		else
			#rec_data = time();

		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (
			username,
			sha_pass_hash,
			email,
			joindate,
			last_ip,
			locked,
			expansion,
			locale,
			recruiter,
			recruiter_date,
			activated
		) VALUES (
			:username,
			:pwd_hash,
			:email,
			:date,
			:ip,
			:locked,
			:expansion,
			:locale,
			:recruiter,
			:rec_data,
			:activated
		)';
		return SQL::execute(
			self::getConnection(),
			$sql,
			array(
				"username" => $username,
				"pwd_hash" => $sha_pass_hash,
				"email" => $email,
				"date" => $joinDate,
				"ip" => $last_ip,
				"locked" => $locked,
				"expansion" => $expansion,
				"locale" => $locale,
				"recruiter" => $recruiter,
				"rec_data" => $rec_data,
				"activated" => $activated
			)
		);

	}

	/**
	 * @param int $id
	 * @return bool|array
	 */
	public static function get($id) {
		$result = SQL::query(self::getConnection(), 'SELECT * FROM ' . self::getFullTableName() . ' WHERE id = :id LIMIT 1', array("id" => $id));

		if($result !== false)
			return $result[0];
		return false;
	}

	/**
	 * @param string|int $value
	 * @param bool $use_id
	 * @return bool
	 */
	public static function exists($value, $use_id = true) {
		if($use_id) {
			if(self::get($value) === false)
				return false;
			return true;
		}

		// Use Name
		if(self::getByName($value) === false)
			return false;
		return true;
	}

	/**
	 * @param string $username
	 * @return mixed|null
	 */
	public static function getByName($username) {
		$sql = 'SELECT * FROM ' . self::getFullTableName() . ' WHERE username = :username';

		$result = SQL::query(
			self::getConnection(),
			$sql,
			array(
				"username" => $username
			)
		);

		if($result !== false)
			return $result;
		return false;
	}

	/**
	 * @param string $username
	 * @return bool
	 */
	public static function get_id($username) {
		$sql = 'SELECT id FROM ' . self::getFullTableName() . ' WHERE username = :username LIMIT 1';

		$result = SQL::query(
			self::getConnection(),
			$sql,
			array(
				"username" => $username
			)
		);
		if($result)
			return $result[0]["id"];

		return false;
	}

	public static function delete() {
		//todo
	}

	/**
	 * @param int $userid
	 * @param string $ip
	 * @param int $locked
	 * @return int
	 */
	public static function update_activated($userid, $ip = "0.0.0.0", $locked = 0) {
		$sql = 'UPDATE ' . self::getFullTableName() . ' SET last_ip = :userip, locked = :locked WHERE id = :userid';

		return SQL::execute(
			self::getConnection(),
			$sql,
			array(
				"userip" => $ip,
				"locked" => (string) $locked,
				"userid" => (int) $userid
			)
		);
	}

	/**
	 * @param int $userid
	 * @param string $pwd_hash
	 * @return int
	 */
	public static function update_password($userid, $pwd_hash){
		$sql = 'UPDATE ' . self::getFullTableName() . ' SET sha_pass_hash = :pwd_hash, v = \'\', s = \'\' WHERE id = :userid';

		return SQL::execute(
			self::getConnection(),
			$sql,
			array(
				"pwd_hash" => $pwd_hash,
				"userid" => (int) $userid
			)
		);
	}

	/**
	 * @param int $userid
	 * @param string $email
	 * @return int
	 */
	public static function update_email($userid, $email) {
		$sql = 'UPDATE ' . self::getFullTableName() . ' SET email = :email WHERE id = :userid';

		return SQL::execute(
			self::getConnection(),
			$sql,
			array(
				"email" => $email,
				"userid" => $userid
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
