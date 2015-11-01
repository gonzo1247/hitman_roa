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
	private $unreadPM;
	private $newPM;


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
		unset($this->user_id);
		unset($this->username);
		unset($this->group_id);
		unset($this->color);
		unset($this->email);
		unset($this->unreadPM);
		unset($this->newPM);
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
			$this->unreadPM = $result[0]['user_unread_privmsg'];
			$this->newPM = $result[0]['user_new_privmsg'];
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
	 * @param string $msg
	 * @param int $from
	 * @param string $subject
	 * @param bool|int $to
	 * @return bool
	 */
	public function sendPM($msg, $from, $subject = "New PM", $to = false) {
		if($to === false)
			$to = $this->user_id;

		// Add Message
		$sql = 'INSERT INTO ' . self::getPrefix() . 'privmsgs (
			author_id,
			author_ip,
			message_time,
			message_subject,
			message_text,
			to_address
		) VALUES (
			:from,
			:ip,
			:date,
			:subject,
			:message,
			:to
		)';

		$message_id = SQL::execute(
			self::getConnection(),
			$sql,
			array(
				"from" => $from,
				"ip" => "127.0.0.1",
				"date" => time(),
				"subject" => $subject,
				"message" => $msg,
				"to" => "u_" . $to
			)
		);
		unset($sql);

		if($message_id === false)
			return false;

		// Assign Message to folder
		$sql = 'INSERT INTO ' . self::getPrefix() . 'privmsgs_to (
			msg_id,
			user_id,
			author_id
		) VALUES (
			:msg_id,
			:user_to,
			:user_from
		)';

		$result = SQL::execute(self::getConnection(), $sql, array(
				"msg_id" => $message_id,
				"user_to" => $to,
				"user_from" => $from
		));

		if($result === false) {
			// Remove unused Message From Database
			SQL::execute(self::getConnection(), 'DELETE FROM ' . self::getPrefix() . 'privmsgs WHERE msg_id = :id', array("id" => $message_id));

			return false;
		}
		unset($sql);
		unset($message_id);

		// Update unread Messages
		$sql = 'UPDATE ' . self::getPrefix() . 'users SET user_new_privmsg = :new_pms, user_unread_privmsg = :new_unread_pms WHERE user_id = :to';

		SQL::execute(self::getConnection(), $sql, array(
			"to" => $to,
			"new_pms" => $this->newPM + 1,
			"new_unread_pms" => $this->unreadPM + 1
		));

		return true;
	}

	public function sendPMtoGroup($groupId, $message, $user_id, $subject) {
		//sendPMtoGroup(5, "msg", SYSTEM_USER, "Charakter wiederherstellungs Anfrage - " . get_phpbb_info::$instance->username . " -> Char: " . $charname)

	}

	/**
	 * @param bool|int $user_id
	 * @return string
	 */
	public function usernameLink($user_id = false) {
		if(! $user_id) {
			$user_id = $this->user_id;
			$color = $this->color;
			$username = $this->username;
		} else {
			// Get PHPBB Data
			$user_data = phpbb_account::get($user_id);
			$color = $user_data[0]["user_colour"];
			$username = $user_data[0]["username"];
			unset($user_data);
		}

		return "<a href=\"memberlist.php?mode=viewprofile&u=" . $user_id . "\" target=\"_blank\" style=\"color: #" . $color . "\">" . $username . "</a>";
	}
}
