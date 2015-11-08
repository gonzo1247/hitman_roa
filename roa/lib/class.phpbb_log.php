<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 09.11.2015
 * Time: 00:04
 * Notes: -
 */

/**
 * Class phpbb_log
 */
class phpbb_log {
	private static $prefix;
	private static $tablename = "log";
	private static $connection = "phpbb_db";

	public static function add($type, $user_id, $ip, $date, $operation, $data, $report_id = 0, $forum_id = 0, $topic_id = 0) {
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (
			log_type,
			user_id,
			forum_id,
			topic_id,
			reportee_id,
			log_ip,
			log_time,
			log_operation,
			log_data
		) VALUES (
			:type,
			:id,
			:f_id,
			:t_id,
			:report_id,
			:ip,
			:time,
			:operation,
			:data
		)';

		SQL::execute(self::getConnection(), $sql,
			array(
				"type" => $type,
				"id" => $user_id,
				"f_id" => $forum_id,
				"t_id" => $topic_id,
				"report_id" => $report_id,
				"ip" => $ip,
				"time" => $date,
				"operation" => $operation,
				"data" => $data
			)
		);
	}

	public static function delete() {
		// VOID
	}

	public static function get() {
		// VOID
	}

	public static function update() {
		// VOID
	}

	/**
	 * @return string
	 */
	public static function getPrefix() {
		global $table_prefix;
		if(! isset(self::$prefix))
			self::setPrefix($table_prefix);

		return self::$prefix;
	}

	/**
	 * @return string
	 */
	public static function getTablename() {
		return self::$tablename;
	}

	/**
	 * @return string
	 */
	private static function getConnection() {
		return self::$connection;
	}

	/**
	 * @param string $prefix
	 */
	private static function setPrefix($prefix) {
		self::$prefix = $prefix;
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
	public static function getFullTableName() {
		return self::getPrefix() . self::getTablename();
	}
}
