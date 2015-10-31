<?php
/**
* //Thank Post MOD
* thanks [Deutsch — Du]
*
* @package language
* @version $Id: thanks.php
* @copyright (c) 2008 Mahony
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Deutsche Übersetzung durch Mahony
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
$lang = array_merge($lang, array(
	'THANKS'				=> 'Danke gegeben',
	'THANKS1'				=> 'Bedanken',
	'THANKED'				=> 'Danke bekommen',
	'THANKED_IN'			=> 'mal in %s Beiträgen',
	'THANKS_FROM'			=> 'folgende User möchten sich bei %s bedanken:',
	'THANKS_REMOVE'			=> 'Lösche Danke',
	'THANKS_CANT_ADD'		=> 'Du hast dich bereits für diesen Beitrag bedankt.',
	'THANKS_CANT_REMOVE'	=> 'Du hast dich nicht bedankt in diesem Beitrag, daher kann auch keine Bedankung gelöscht werden.',
	'THANKS_DISALLOW'		=> 'Es ist nicht erlaubt dich in diesem Beitrag zu zu bedanken.',	
	'THANKS_POST'			=> ' Post',
	'THANKS_POSTS'			=> ' Posts',
	'THANKS_TIME'			=> ' mal',
	'THANKS_TIMES'			=> ' mal',

));
//Thank Post MOD

?>