<?php
/**
* //Thank Post MOD
* thanks
*
* @package language
* @version $Id: thanks.php 1 2008-08-01 14:31:04Z
* @copyright (c) 2008 Mahony
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*
* 
*
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » „ “ — …
//
//
//Begin Thank Post MOD
	$lang = array_merge($lang, array(
	'RESYNC_THANKSCOUNTS'				=> 'Resynchronise thanks counts',
	'RESYNC_THANKSCOUNTS_EXPLAIN'		=> 'Recalculate the number of thanks count. You need to perform this action after deleting posts or topics.',
	'RESYNC_THANKSCOUNTS_CONFIRM'		=> 'Are you sure you wish to resynchronise thanks counts?',
	'LOG_RESYNC_THANKSCOUNTS'			=> '<strong>User thanks counts resynchronised</strong>',
	'IMG_ICON_POST_THANKS'	            => 'Thanks',
//End Thank Post MOD
));

?>