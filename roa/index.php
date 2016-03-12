<?php
/**
 * Created by Peter Dragicevic [peter-91@hotmail.de]
 * Date: 30.07.2015
 * Time: 22:39
 * Notice: Global switch file
 */

// Remove Error-Reporting
error_reporting(0);

// Set encoding
mb_internal_encoding("UTF-8");

// Declare constances
define('ROA_DIR', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('ROA_MAINCLASSDIR', ROA_DIR . DS . 'classes');
define('LIB_DIR', ROA_DIR . DS . 'lib');
define('SYSTEM_USER', $system_user_id);
define('ROA_VIP_GROUP', $vip_group);
define('ROA_VIP_POINTS', $vip_points);
define('ROA_AVATAR_GROUP', $avatar_group);
define('SEND_PM_GROUPCHANGE', $send_pm_on_groupchange);
if(! isset($_GET["mod"]))
	define('MOD', false);
else
	define('MOD', preg_replace("/[^a-zA-Z0-9_]/u", "", $_GET["mod"]));

// Include mainclasses
require_once(ROA_MAINCLASSDIR . DS . 'class.db_con.php');
require_once(ROA_MAINCLASSDIR . DS . 'class.db.php');
require_once(ROA_MAINCLASSDIR . DS . 'class.sql.php');
require_once(ROA_MAINCLASSDIR . DS . 'class.phpbb_id.php');
require_once(ROA_MAINCLASSDIR . DS . 'class.output.php');
require_once(ROA_DIR . DS . 'getfunctions.php');

//require_once(ROA_MAINCLASSDIR . DS . 'class.account.php');
//require_once(LIB_DIR . DS . 'class.auth_account.php');
//require_once(LIB_DIR . DS . 'class.phpbb_profile_fields_data.php');
//require_once(LIB_DIR . DS . 'class.phpbb_account.php');

// Create db connections
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
$phpbb_db = new db(
	"{$dbms}:host={$dbhost};port={$dbport};dbname={$dbname};charset=utf8",
	$dbuser,
	$phpbb_db_pw,
	array()
);
/*
$lol_db = new db(
	"{$db_lol_type}:host={$db_lol_host};port={$db_lol_port};dbname={$db_lol_username};charset=utf8",
	$db_lol_username,
	$db_lol_pwd,
	array()
); */

// Assign connections
db_con::setDbCon($auth_db, "auth_db");
db_con::setDbCon($char_db, "char_db");
db_con::setDbCon($world_db, "world_db");
db_con::setDbCon($phpbb_db, "phpbb_db");
// db_con::setDbCon($lol_db, "lolforum");

// Get PHPBB Infos
new get_phpbb_info();

$roa_output_html = getfunctionOutput();
