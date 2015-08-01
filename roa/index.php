<?php
/**
 * Created by Peter Dragicevic [peter-91@hotmail.de]
 * Date: 30.07.2015
 * Time: 22:39
 * Notice: Global switch file
 */

define('ROA_DIR', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('ROA_MAINCLASSDIR', ROA_DIR . DS . 'classes');

//echo phpinfo();
$roa_output_html = "testtretetext"; // todo make better

// Include mainclasses
require_once(ROA_MAINCLASSDIR . DS . 'class.db.php');
require_once(ROA_MAINCLASSDIR . DS . 'class.sql.php');

$auth_db = new db(
	"{$db_auth_type}:host={$db_auth_host};port={$db_auth_port};dbname={$db_auth_dbname};charset=utf8",
	$db_auth_username,
	$db_auth_pwd,
	array()
);
$world_db = new db(
	"{$db_world_type}:host={$db_world_host};port={$db_world_port};dbname={$db_world_dbname};charset=utf8",
	$db_world_username,
	$db_world_pwd,
	array()
);
$char_db = new db(
	"{$db_character_type}:host={$db_character_host};port={$db_character_port};dbname={$db_character_dbname};charset=utf8",
	$db_character_username,
	$db_character_pwd,
	array()
);

// test

