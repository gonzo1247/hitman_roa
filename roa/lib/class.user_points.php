<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 30.10.2015
 * Time: 20:34
 * Notes: -
 */

// Include req files
require_once(LIB_DIR . DS . 'class.points_log.php');

/**
 * Class user_points
 */
class user_points {
	private static $prefix;
	private static $tablename = "user_points";
	private static $connection = "phpbb_db";

	/**
	 * @param int $id
	 * @param int $points
	 * @return int
	 */
	private static function add($id, $points = 0) {
		$params = array("id" => $id, "start_points" => $points, "life_points" => $points);
		$sql = 'INSERT INTO ' . self::getFullTableName() . ' (
		user_id,
		points_curr,
		points_life
		) VALUES (
			:id,
			:start_points,
			:life_points
		)';

		$result = SQL::execute(self::getConnection(), $sql, $params);

		if($result !== false) {
			if(self::exists($id))
				return self::update($id, "Jeder erhält einmalig 50 Punkte, wenn er einen Account erstellt!", 50);
		}
		return false;
	}

	/**
	 * @param int $id
	 * @return bool|int
	 */
	public static function delete($id) {
		if(self::exists($id))
			return SQL::execute(self::getConnection(), 'DELETE FROM ' . self::getFullTableName() . ' WHERE user_id = :id', array("id" => $id));

		return false;
	}

	/**
	 * @param int $id
	 * @param string $reason
	 * @param int $change_points
	 * @return int
	 */
	public static function update($id, $reason = "Point change", $change_points = 0) {
		// Include LIB
		require_once(LIB_DIR . DS . 'class.phpbb_groups.php');
		require_once(LIB_DIR . DS . 'class.phpbb_group_members.php');
		require_once(LIB_DIR . DS . 'class.phpbb_account.php');

		// Create entry if not exists
		if(! self::exists($id))
			self::add($id, $change_points);

		// Get userdata
		$tmp_userdata = self::get($id);

		// Set new Data
		$params["new_points"] = $tmp_userdata["points_curr"] + $change_points;
		$params["id"] = $id;
		if($change_points > 0)
			$params["new_life_points"] = $tmp_userdata["points_life"] + $change_points;

		$sql = 'UPDATE ' . self::getFullTableName() . ' SET points_curr = :new_points' . (($change_points > 0) ? ', points_life = :new_life_points' : '') . ' WHERE user_id = :id';

		// Add to VIP-Group if reaches a specific amount of points
		if(! phpbb_group_members::isUserInGroup($id, phpbb_groups::getId(ROA_VIP_GROUP))) {
			if($params["new_points"] >= ROA_VIP_POINTS) {
				// Add to group
				phpbb_group_members::add(phpbb_groups::getId(ROA_VIP_GROUP), $id);

				// Set Main Group
				phpbb_account::updateMainGroup($id, phpbb_groups::getId(ROA_VIP_GROUP), phpbb_groups::getColor(phpbb_groups::getId(ROA_VIP_GROUP)));

				// Add to Log
				points_log::add($id, 0, "Du hast " . ROA_VIP_POINTS . " Punkte erreicht und wurdest daher in die " . ROA_VIP_GROUP . "-Gruppe aufgenommen! Glückwunsch!");
			}
		}

		// Execute
		if(SQL::execute(self::getConnection(), $sql, $params) !== false)
			return points_log::add($id, $change_points, $reason);
		return false;
	}

	/**
	 * @param int $id
	 * @return bool
	 */
	private static function exists($id) {
		$num = SQL::queryColumnInt(self::getConnection(), 'SELECT * FROM ' . self::getFullTableName() . ' WHERE user_id = :id', array("id" => $id));

		if($num > 0)
			return true;
		return false;
	}

	/**
	 * @param int $id
	 * @return mixed|null
	 */
	public static function get($id) {
		if(! self::exists($id))
			self::add($id);

		$result = SQL::query(self::getConnection(), 'SELECT * FROM ' . self::getFullTableName() . ' WHERE user_id = :id', array("id" => $id));

		if($result !== false)
			return $result[0];
		return false;
	}

	/**
	 * @return string
	 */
	public static function getPrefix() {
		global $own_prefix;
		if(! isset(self::$prefix))
			self::setPrefix($own_prefix);

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
