<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.eona.in/
 * Date: 01.08.2015
 * Time: 18:35
 * Notes: -
 */

/**
 * Class server
 */
class server {
	/**
	 * @param string $adress
	 * @param int $port
	 * @return bool
	 * @throws Exception
	 */
	public static function serverstatus($adress = "localhost", $port = 80) {
		if($adress) {
			if(function_exists("fsockopen")) {
				$status = @fsockopen($adress, $port);

				if($status)
					return true;
				else
					return false;
			} else
				throw new Exception("Please enable function \"fsockopen\"...");
		}
		return false;
	}
}
