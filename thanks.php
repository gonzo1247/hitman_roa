<?php
/**
*
* @author idiotnesia info@forumkomputer.web.id - http://www.forumkomputer.web.id
**
* @package phpBB3
* @version $Id: thanks.php  0.0.1 - 2008-06-07  idiotnesia $
* @copyright (c) 2008 forumkomputer.web.id
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);


// specify styles and/or localisation
// in this example, we specify that we will be using the file: my_language_file.php
$user->setup('mods/thanks');

$post_id	= request_var('p', 0);
$mode		= request_var('mode', '');

//redirect guest to login box
if (!$user->data['is_registered'])
{
	login_box();
}

$sql = 'SELECT p.poster_id, t.topic_id
	FROM ' . POSTS_TABLE . ' p, ' . TOPICS_TABLE . ' t
	WHERE p.post_id = ' . $post_id;
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);
$db->sql_freeresult($result);	

if (!$row)
{
	trigger_error('THANKS_DISALLOW');
}

$sql = 'SELECT post_thanked
	FROM ' . POSTS_TABLE . '
	WHERE post_id = ' . $post_id;
$result = $db->sql_query($sql);
$post_thanked = $db->sql_fetchfield('post_thanked');
$db->sql_freeresult($result);

$sql = 'SELECT thanks_from
	FROM ' . THANKS_TABLE . '
	WHERE post_id = ' . $post_id . '
		AND thanks_from = ' . $user->data['user_id'];
$result = $db->sql_query($sql);
$thanked_post = $db->sql_fetchfield('thanks_from');
$db->sql_freeresult($result);
		
switch ($mode)
{
	case 'thanks':
		if($thanked_post)
		{
			trigger_error('THANKS_CANT_ADD');
		}
		
		$sql_ary = array(
			'thanks_from'	=> $user->data['user_id'],
			'thanks_to'		=> $row['poster_id'],
			'post_id'		=> $post_id,
		);

		$db->sql_query('INSERT INTO ' . THANKS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
	
		$sql = 'UPDATE ' . USERS_TABLE . '
			SET user_thanked = user_thanked + 1,
				user_thanks_post = user_thanks_post + ' . (($post_thanked == 0) ? 1 : 0) . '
			WHERE user_id = ' . $row['poster_id'];
		$db->sql_query($sql);
		
		$sql = 'UPDATE ' . USERS_TABLE . '
			SET user_thanks = user_thanks + 1
			WHERE user_id = ' . $user->data['user_id'];
		$db->sql_query($sql);
	
		$sql = 'UPDATE ' . POSTS_TABLE . '
			SET post_thanked = post_thanked + 1
			WHERE post_id = ' . $post_id;
		$db->sql_query($sql);
	
		$redirect = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'p=' . $post_id)  . '#p' . $post_id;
		redirect($redirect);

	break;

	case 'remove':
		if(!$thanked_post)
		{
			trigger_error('THANKS_CANT_REMOVE');
		}
		$sql = 'DELETE FROM ' . THANKS_TABLE . '
         WHERE thanks_from = ' . $user->data['user_id'] . ' AND post_id = ' . $post_id;
        $db->sql_query($sql);
		
		$sql = 'UPDATE ' . USERS_TABLE . '
			SET user_thanked = user_thanked - 1,
				user_thanks_post = user_thanks_post - ' . (($post_thanked == 1) ? 1 : 0) . '
			WHERE user_id = ' . $row['poster_id'];
		$db->sql_query($sql);
		
		$sql = 'UPDATE ' . USERS_TABLE . '
			SET user_thanks = user_thanks - 1
			WHERE user_id = ' . $user->data['user_id'];
		$db->sql_query($sql);
	
		if ($post_thanked > 0)
		{
			$sql = 'UPDATE ' . POSTS_TABLE . '
				SET post_thanked = post_thanked - 1
				WHERE post_id = ' . $post_id;
			$db->sql_query($sql);
		}
	$redirect = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'p=' . $post_id)  . '#p' . $post_id;
	redirect($redirect);
	break;

	default:
		trigger_error('NO_MODE');
	break;
}

?>