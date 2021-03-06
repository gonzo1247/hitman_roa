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
	if(get_phpbb_info::$instance->user_id && mb_strtolower(get_phpbb_info::$instance->username) != 'anonymous') { //todo check server before doing this implement
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
			case 'wow_account_info':
				// Include Mainfunctions
				require_once(ROA_MAINCLASSDIR . DS . 'class.account.php');
				// Include Lib
				require_once(LIB_DIR . DS . 'class.auth_account.php');

				return output::HTMLTemplate("World of Warcraft-Account Status", output::accountInfo());
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
		}
	}

	// No-Login req
	switch(MOD) {
		case 'impressum':
			return output::HTMLTemplate("Impressum", output::implementImpressum());
		default:
			// Default Value
			return output::HTMLTemplate("Info", "Unbekannter Modus oder logge dich ein!");
	}
}
