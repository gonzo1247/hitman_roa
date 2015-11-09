<?php
// phpBB 3.0.x auto-generated configuration file
// Do not change anything in this file!
$dbms = 'mysql';
$dbhost = 'localhost';
$dbport = '3306';
$dbname = 'phpbb';
$dbuser = 'dbuser';
$dbpasswd = 'pass';
$table_prefix = 'phpbb_';
$acm_type = 'file';
$load_extensions = '';

// WoW-Server-Config-Area | ROA-Mod Start --->
// DB-Auth Server
$auth_server_adress = "localhost";
$auth_server_port = 3860;
$db_auth_type = "mysql";
$db_auth_host = "localhost";
$db_auth_dbname = "auth_db_name";
$db_auth_port = 3306;
$db_auth_username = "auth_user";
$db_auth_pwd = "auth_pass";
$db_auth_prefix = "";

// DB-World Server
$db_world_type = "mysql";
$db_world_host = "localhost";
$db_world_dbname = "world_db_name";
$db_world_port = 3306;
$db_world_username = "world_user";
$db_world_pwd = "world_pass";
$db_world_prefix = "";

// DB-Character Server
$db_character_type = "mysql";
$db_character_host = "localhost";
$db_character_dbname = "chars_db_name";
$db_character_port = 3306;
$db_character_username = "chars_user";
$db_character_pwd = "chars_pass";
$db_character_prefix = "";

// Misc
$own_prefix = "prefix_"; // Prefix of custom Tables located in the phpBB-Database
$phpbb_db_pw = $dbpasswd;
$system_user_id = 1; // User of the system user (send pms etc) Default: 1
$avatar_group = "Bild";
$vip_group = "Spender";
$vip_points = 3000;
$send_pm_on_groupchange = true;

// ROA-Mod End --->

@define('PHPBB_INSTALLED', true);
// @define('DEBUG', true);
// @define('DEBUG_EXTRA', true);
