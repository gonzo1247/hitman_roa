<?php
/**
 * Created by Severin Weitz [gonzo1247@yahoo.de]
 * Date: 2015/08/02
 * Time: 13:29
 */

// Set encoding
mb_internal_encoding("UTF-8");

// Declare constances
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
require_once(LIB_DIR . DS . 'class.phpbb_profile_fields_data.php');
require_once(LIB_DIR . DS . 'class.phpbb_account.php');

// Get global config vars
global $db_auth_type;
global $db_auth_host;
global $db_auth_port;
global $db_auth_dbname;
global $db_auth_username;
global $db_auth_pwd;
global $dbms;
global $dbhost;
global $dbport;
global $dbname;
global $dbuser;
global $phpbb_db_pw;

// Create db connections
$auth_db = new db(
	"{$db_auth_type}:host={$db_auth_host};port={$db_auth_port};dbname={$db_auth_dbname};charset=utf8",
	$db_auth_username,
	$db_auth_pwd,
	array()
);
$phpbb_db = new db(
	"{$dbms}:host={$dbhost};port={$dbport};dbname={$dbname};charset=utf8",
	$dbuser,
	$phpbb_db_pw,
	array()
);

// Assisgn connections
db_con::setDbCon($auth_db, "auth_db");
db_con::setDbCon($phpbb_db, "phpbb_db");
