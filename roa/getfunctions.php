<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 27.09.2015
 * Time: 16:01
 * Notes: -
 */

function getfunctionOutput() {
	if(get_phpbb_info::$instance->user_id && mb_strtolower(get_phpbb_info::$instance->username) != 'anonymous') {
		switch(MOD) {
			case 'control':
				//todo
			case 'codebot':
				return output::point_management();
			default:
				return "Unbekannter Modus";
		}
	}
	// Default Value
	return "Bitte logge dich ein!";
}
