<?php
/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/02
 * Time: 13:29
 */

define('ROA_DIR', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('ROA_MAINCLASSDIR', ROA_DIR . DS . 'classes');
define('LIB_DIR', ROA_DIR . DS . 'lib');


// Include mainclasses
require_once(ROA_MAINCLASSDIR . DS . 'class.db_con.php');
require_once(ROA_MAINCLASSDIR . DS . 'class.db.php');
require_once(ROA_MAINCLASSDIR . DS . 'class.sql.php');
require_once(ROA_MAINCLASSDIR . DS . 'class.account.php');
require_once(LIB_DIR . DS . 'class.auth_account.php');

// Get global config vars
global $db_auth_type;
global $db_auth_host;
global $db_auth_port;
global $db_auth_dbname;
global $db_auth_username;
global $db_auth_pwd;

$auth_db = new db(
	"{$db_auth_type}:host={$db_auth_host};port={$db_auth_port};dbname={$db_auth_dbname};charset=utf8",
	$db_auth_username,
	$db_auth_pwd,
	array()
);

// Assisgn connections
db_con::setDbCon($auth_db, "auth_db");
