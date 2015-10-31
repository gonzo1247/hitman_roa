<?php

/***************************************************************************
 *                             phpbb3 Thanks Post v0.2.0 db_update.php
 *                             ----------------------------------
 *   Version              : 0.2.0
 *
 ***************************************************************************/
 
// Benötigte Dateien und Variablen von phpBB 
define('IN_PHPBB', true);
$phpbb_root_path = './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);


// Session auslesen und Benutzer-Informationen laden
$user->session_begin();  // Session auslesen
$auth->acl($user->data); // Benutzer-Informationen laden
$user->setup();          // Sprachvariablen laden
if ($user->data['user_id'] == ANONYMOUS)
{
	login_box();
}

if ($auth->acl_get('a_') || $auth->acl_getf_global('m_'))
{
}

else
    {
	trigger_error('NOT_AUTHORISED');
    }

define('SHOW_ONLINE', true);
$page_title = "phpbb3 Thanks Post v0.2.0";

echo "<br><br><br>";
$step = $_GET['step'];


	if(!$step)
		{
  	echo "<META HTTP-EQUIV=\"refresh\" content=\"5;URL=db_update.php?step=1\">";
	echo "Welcome, The Install Will Begin In 5 Seconds.";					
		}
	elseif($step == "1")
		{
echo '<table width="100%" cellspacing="1" cellpadding="2" border="0" class="forumline">';
echo '<tr><th>Updating the database</th></tr><tr><td><span class="genmed"><ul type="circle">';

$sql = array();
$sql[] = "CREATE TABLE `" . $table_prefix . "thanks` (
  `thanks_id` mediumint(8) unsigned NOT NULL auto_increment,
  `thanks_from` mediumint(8) unsigned NOT NULL,
  `thanks_to` mediumint(8) unsigned NOT NULL,
  `post_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY  (`thanks_id`)
)";
$sql[] = "ALTER TABLE `" . $table_prefix . "posts` ADD `post_thanked` INT(11) UNSIGNED NOT NULL DEFAULT '0'";
$sql[] = "ALTER TABLE " . $table_prefix . "forums ADD COLUMN enable_thanks TINYINT(1) DEFAULT '0' NOT NULL";
$sql[] = "ALTER TABLE `" . $table_prefix . "users` ADD `user_thanked` INT(11) UNSIGNED NOT NULL DEFAULT '0',
ADD `user_thanks` INT(11) UNSIGNED NOT NULL DEFAULT '0',
ADD `user_thanks_post` INT(11) UNSIGNED NOT NULL DEFAULT '0'";


for( $i = 0; $i < count($sql); $i++ )
{
	if( !$result = $db->sql_query ($sql[$i]) )
	{
		$error = $db->sql_error();

		echo '<li>' . $sql[$i] . '<br /> +++ <font color="#FF0000"><b>Error:</b></font> ' . $error['message'] . '</li><br />';
	}
	else
	{
		echo '<li>' . $sql[$i] . '<br /> +++ <font color="#00AA00"><b>Successfull</b></font></li><br />';
	}
}


echo '</ul></span></td></tr><tr><td class="catBottom" height="28">&nbsp;</td></tr>';

echo '<tr><th>End</th></tr><tr><td><span class="genmed">Installation is now finished. Please be sure to delete this file now.<br />If you have run into any errors, please visit the <a href="http://nationsofmetal.na.funpic.de/forum" target="_phpbb3support">Mahonys phpBB3 Olympus support forum</a> and ask someone for help.</span></td></tr>';
echo '<tr><td class="catBottom" height="28" align="center"><span class="genmed"><a href="' . append_sid("index.$phpEx") . '">Have a nice day</a></span></td></table>';
}
?>