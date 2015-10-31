<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 31.10.2015
 * Time: 02:19
 * Notes: -
 */

/**
 * Class get_phpbb_info
 */
class get_phpbb_info {
	private static $prefix;
	private static $connection = "phpbb_db";
	public static $instance = false;
	public $user_id = false;
	public $username = 'Guest';
	public $group_id = false;
	public $color;
	public $email;


	/**
	 *
	 */
	public function __construct() {
		if(self::getInstance() === false) {
			$ip = $this->escape_userdata($_SERVER['REMOTE_ADDR']);

			// Get Cookiename
			$cookiename = $this->getPHPBBConfig('cookie_name');

			// Get Cookie
			$session = $this->getPHPBBCookie($cookiename);

			// Get infos about session
			$sessiondata = $this->getPHPBBSessionData($session);

			// Check if IP is the same like the ip in DB
			if($sessiondata[0]['session_ip'] == $ip) {
				$this->user_id = $sessiondata[0]['session_user_id'];
				$this->getPHPBBUserInfo(); // Set Data
			}

			// Assign object
			self::setInstance($this);
		}
	}

	/**
	 *
	 */
	public function __destruct() {
		unset(self::$prefix);
		unset(self::$connection);
		unset(self::$instance);
		unset($this->user_id);
		unset($this->username);
		unset($this->group_id);
		unset($this->color);
		unset($this->email);
	}

	/**
	 * @return boolean|object
	 */
	private static function getInstance() {
		return self::$instance;
	}

	/**
	 * @param object $instance
	 */
	private static function setInstance($instance) {
		self::$instance = $instance;
	}

	/**
	 * @return string
	 */
	private static function getPrefix() {
		global $table_prefix;
		if(! isset(self::$prefix))
			self::setPrefix($table_prefix);
		return self::$prefix;
	}

	/**
	 * @param string $prefix
	 */
	private static function setPrefix($prefix) {
		self::$prefix = $prefix;
	}

	/**
	 * @param string $name
	 * @return string
	 */
	private function getPHPBBCookie($name) {
		if(! isset($_COOKIE[$name . '_sid']))
			return "";

		return $this->escape_userdata($_COOKIE[$name . '_sid']);
	}

	/**
	 * @param string $configName
	 * @return mixed
	 */
	private function getPHPBBConfig($configName) {
		$result = SQL::query(self::getConnection(), 'SELECT * FROM ' . self::getPrefix() . 'config WHERE config_name = :name LIMIT 1', array("name" => $configName));

		if($result !== false)
			return $result[0]['config_value'];
		return null;
	}

	/**
	 * @param mixed $value
	 * @return mixed
	 */
	private function escape_userdata($value) {
		return preg_replace("/[^a-zA-Z0-9._]/u", "", htmlspecialchars($value, ENT_QUOTES, 'UTF-8'));
	}

	/**
	 * @param string $session
	 * @return mixed|null
	 */
	private function getPHPBBSessionData($session) {
		return SQL::query(self::getConnection(), 'SELECT * FROM ' . self::getPrefix() . 'sessions WHERE session_id = :session', array("session" => $session));
	}

	/**
	 *
	 */
	private function getPHPBBUserInfo() {
		$result = SQL::query(self::getConnection(), 'SELECT * FROM ' . self::getPrefix() . 'users WHERE user_id = :id', array("id" => $this->user_id));

		if($result !== false) {
			$this->color = $result[0]['user_colour'];
			$this->username = $result[0]['username'];
			$this->group_id = $result[0]['group_id'];
			$this->email = $result[0]['user_email'];
		}
		unset($result);
	}

	/**
	 * @return string
	 */
	private static function getConnection() {
		return self::$connection;
	}

	/**
	 * @param $msg
	 * @param $u_id
	 * @param string $subject
	 * @return bool
	 */
	public function sendPM($msg, $u_id, $subject = "New PM") {
		return true;
	}
}
