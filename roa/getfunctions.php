<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 27.09.2015
 * Time: 16:01
 * Notes: -
 */

/**
 * @return string
 */
function getfunctionOutput() {
	if(get_phpbb_info::$instance->user_id && mb_strtolower(get_phpbb_info::$instance->username) != 'anonymous') {
		// Escape Userdata
		$_GET = output::escapeALL($_GET);
		$_POST = output::escapeALL($_POST);
		$_COOKIE = output::escapeALL($_COOKIE);
		$_SERVER = output::escapeALL($_SERVER);

		//Set URL
		$roa_url = "?mod=" . MOD;

		switch(MOD) {
			case 'control':
				//todo
			case 'points_history':
				// Include LIB
				require_once(LIB_DIR . DS . 'class.user_points.php');
				require_once(LIB_DIR . DS . 'class.point_costs.php');

				return output::HTMLTemplate("Punkte Log", output::point_management());
			case 'points_management':
				// Include LIB
				require_once(LIB_DIR . DS . 'class.auth_account.php');
				require_once(LIB_DIR . DS . 'class.user_points.php');
				require_once(LIB_DIR . DS . 'class.point_costs.php');
				require_once(LIB_DIR . DS . 'class.code_functions.php');
				require_once(LIB_DIR . DS . 'class.points_exchange.php');

				return output::HTMLTemplate("Punkte verwalten", output::exchange_points());
			default:
				return "Unbekannter Modus";
		}
	}
	// Default Value
	return "Bitte logge dich ein!";
}
