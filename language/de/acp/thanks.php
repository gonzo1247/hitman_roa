<?php
/**
* //Thank Post MOD
* thanks [Deutsch — Du]
*
* @package language
* @version $Id: thanks.php
* @copyright (c) 2008 Mahony 1 2008-08-01 14:31:04Z
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
//Begin Thank Post MOD
$lang = array_merge($lang, array(
	'RESYNC_THANKSCOUNTS'				=> 'Bedankungen resynchronisieren',
	'RESYNC_THANKSCOUNTS_EXPLAIN'		=> 'Neuberechnung der Anzahl der Bedankungen. Sie müssen diesen Vorgang nur nach dem Löschen von Beiträgen oder Themen ausführen.',
	'RESYNC_THANKSCOUNTS_CONFIRM'		=> 'Bist du sicher, dass die Bedankungen resynchronisiert werden sollen?',
	'LOG_RESYNC_THANKSCOUNTS'			=> '<strong>Benutzer Bedankungen resynchronisier</strong>',
	'IMG_ICON_POST_THANKS'	            => 'Danke',
//End Thank Post MOD
));

?>