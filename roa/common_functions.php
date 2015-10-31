<?php

/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/10/31
 * Time: 0:02
 */

/**
 * Class common_functions
 */
class common_functions {
	/**
	 * @return bool|string
	 */
	public static function currentdate() {
		return date('Y-m-d H:i:s', time());
	}

}
