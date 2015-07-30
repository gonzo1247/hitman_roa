<?php if (!defined('IN_PHPBB')) exit; ?><!DOCTYPE html>
<html lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>">
<head>

<meta charset="<?php echo (isset($this->_rootref['S_CONTENT_ENCODING'])) ? $this->_rootref['S_CONTENT_ENCODING'] : ''; ?>" />
<meta name="description" content="<?php echo (isset($this->_rootref['SITE_DESCRIPTION'])) ? $this->_rootref['SITE_DESCRIPTION'] : ''; ?>" />
<meta name="viewport" content="width=device-width, maximum-scale=1.5">
<?php echo (isset($this->_rootref['META'])) ? $this->_rootref['META'] : ''; ?>

<title><?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?> &bull; <?php if ($this->_rootref['S_IN_MCP']) {  echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?> &bull; <?php } else if ($this->_rootref['S_IN_UCP']) {  echo ((isset($this->_rootref['L_UCP'])) ? $this->_rootref['L_UCP'] : ((isset($user->lang['UCP'])) ? $user->lang['UCP'] : '{ UCP }')); ?> &bull; <?php } echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></title>

<?php if ($this->_rootref['S_ENABLE_FEEDS']) {  if ($this->_rootref['S_ENABLE_FEEDS_OVERALL']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_NEWS']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_FEED_NEWS'])) ? $this->_rootref['L_FEED_NEWS'] : ((isset($user->lang['FEED_NEWS'])) ? $user->lang['FEED_NEWS'] : '{ FEED_NEWS }')); ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?mode=news" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_FORUMS']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_ALL_FORUMS'])) ? $this->_rootref['L_ALL_FORUMS'] : ((isset($user->lang['ALL_FORUMS'])) ? $user->lang['ALL_FORUMS'] : '{ ALL_FORUMS }')); ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?mode=forums" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_TOPICS']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_FEED_TOPICS_NEW'])) ? $this->_rootref['L_FEED_TOPICS_NEW'] : ((isset($user->lang['FEED_TOPICS_NEW'])) ? $user->lang['FEED_TOPICS_NEW'] : '{ FEED_TOPICS_NEW }')); ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?mode=topics" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_TOPICS_ACTIVE']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_FEED_TOPICS_ACTIVE'])) ? $this->_rootref['L_FEED_TOPICS_ACTIVE'] : ((isset($user->lang['FEED_TOPICS_ACTIVE'])) ? $user->lang['FEED_TOPICS_ACTIVE'] : '{ FEED_TOPICS_ACTIVE }')); ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?mode=topics_active" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_FORUM'] && $this->_rootref['S_FORUM_ID']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?> - <?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?f=<?php echo (isset($this->_rootref['S_FORUM_ID'])) ? $this->_rootref['S_FORUM_ID'] : ''; ?>" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_TOPIC'] && $this->_rootref['S_TOPIC_ID']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_TOPIC'])) ? $this->_rootref['L_TOPIC'] : ((isset($user->lang['TOPIC'])) ? $user->lang['TOPIC'] : '{ TOPIC }')); ?> - <?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?f=<?php echo (isset($this->_rootref['S_FORUM_ID'])) ? $this->_rootref['S_FORUM_ID'] : ''; ?>&amp;t=<?php echo (isset($this->_rootref['S_TOPIC_ID'])) ? $this->_rootref['S_TOPIC_ID'] : ''; ?>" /><?php } } ?>


<!--
	phpBB style name: PBWoW 2
	Based on style:   prosilver (this is the default phpBB3 style)
	Original author:  Tom Beddard ( http://www.subBlue.com/ )
	Modified by: PayBas
-->

<script type="text/javascript">
// <![CDATA[
	var jump_page = '<?php echo ((isset($this->_rootref['LA_JUMP_PAGE'])) ? $this->_rootref['LA_JUMP_PAGE'] : ((isset($this->_rootref['L_JUMP_PAGE'])) ? addslashes($this->_rootref['L_JUMP_PAGE']) : ((isset($user->lang['JUMP_PAGE'])) ? addslashes($user->lang['JUMP_PAGE']) : '{ JUMP_PAGE }'))); ?>:';
	var on_page = '<?php echo (isset($this->_rootref['ON_PAGE'])) ? $this->_rootref['ON_PAGE'] : ''; ?>';
	var per_page = '<?php echo (isset($this->_rootref['PER_PAGE'])) ? $this->_rootref['PER_PAGE'] : ''; ?>';
	var base_url = '<?php echo (isset($this->_rootref['A_BASE_URL'])) ? $this->_rootref['A_BASE_URL'] : ''; ?>';
	var style_cookie = 'phpBBstyle';
	var style_cookie_settings = '<?php echo (isset($this->_rootref['A_COOKIE_SETTINGS'])) ? $this->_rootref['A_COOKIE_SETTINGS'] : ''; ?>';
	var onload_functions = new Array();
	var onunload_functions = new Array();

	<?php if ($this->_rootref['S_USER_PM_POPUP'] && $this->_rootref['S_NEW_PM']) {  ?>

		var url = '<?php echo (isset($this->_rootref['UA_POPUP_PM'])) ? $this->_rootref['UA_POPUP_PM'] : ''; ?>';
		window.open(url.replace(/&amp;/g, '&'), '_phpbbprivmsg', 'height=225,resizable=yes,scrollbars=yes, width=400');
	<?php } ?>


	/**
	* Find a member
	*/
	function find_username(url)
	{
		popup(url, 760, 570, '_usersearch');
		return false;
	}

	/**
	* New function for handling multiple calls to window.onload and window.unload by pentapenguin
	*/
	window.onload = function()
	{
		for (var i = 0; i < onload_functions.length; i++)
		{
			eval(onload_functions[i]);
		}
	};

	window.onunload = function()
	{
		for (var i = 0; i < onunload_functions.length; i++)
		{
			eval(onunload_functions[i]);
		}
	};

// ]]>
</script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/styleswitcher.js"></script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/forum_fn.js"></script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/js/jquery.collapse.js"></script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/js/jquery.collapse_storage.js"></script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/js/jquery-detectmobilebrowser.js"></script>
<?php if ($this->_rootref['S_JQUERY_TOPIC_PREVIEW']) {  ?><script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/js/topic_preview.js"></script><?php } if ($this->_rootref['S_MCHAT_ENABLE'] && ( $this->_rootref['S_MCHAT_ON_INDEX'] || $this->_rootref['U_MCHAT'] )) {  ?><script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/js/jquery_cookie_mini.js"></script><?php } ?>


<!--[if lt IE 8]>
	<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/js/jquery.collapse_cookie_storage.js"></script>
	<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/js/json2.js"></script>
<![endif]-->

<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/../../pbwow2/theme/print.css" rel="stylesheet" type="text/css" media="print" title="printonly" />
<link href="<?php echo (isset($this->_rootref['T_STYLESHEET_LINK'])) ? $this->_rootref['T_STYLESHEET_LINK'] : ''; ?>" rel="stylesheet" type="text/css" media="screen, projection" />

<?php if ($this->_rootref['S_CONTENT_DIRECTION'] == ('rtl')) {  ?>

	<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/../../pbwow2/theme/bidi.css" rel="stylesheet" type="text/css" media="screen, projection" />
<?php } if (! $this->_rootref['S_TOOLTIPS_FOOTER'] && ! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['WOWTIPS_SCRIPT']) {  echo (isset($this->_rootref['WOWTIPS_SCRIPT'])) ? $this->_rootref['WOWTIPS_SCRIPT'] : ''; } if ($this->_rootref['D3TIPS_SCRIPT']) {  echo (isset($this->_rootref['D3TIPS_SCRIPT'])) ? $this->_rootref['D3TIPS_SCRIPT'] : ''; } if ($this->_rootref['ZAMTIPS_SCRIPT']) {  echo (isset($this->_rootref['ZAMTIPS_SCRIPT'])) ? $this->_rootref['ZAMTIPS_SCRIPT'] : ''; } } $this->_tpl_include('scripts_header.html'); if ($this->_rootref['S_PBLOGO']) {  ?>

<style>
#logo {
	background: url("<?php echo (isset($this->_rootref['PBLOGO_SRC'])) ? $this->_rootref['PBLOGO_SRC'] : ''; ?>") no-repeat 50% 50%;
	width: <?php echo (isset($this->_rootref['PBLOGO_WIDTH'])) ? $this->_rootref['PBLOGO_WIDTH'] : ''; ?>px;
	height: <?php echo (isset($this->_rootref['PBLOGO_HEIGHT'])) ? $this->_rootref['PBLOGO_HEIGHT'] : ''; ?>px;
	<?php if ($this->_rootref['PBLOGO_MARGINS']) {  ?>margin: <?php echo (isset($this->_rootref['PBLOGO_MARGINS'])) ? $this->_rootref['PBLOGO_MARGINS'] : ''; } ?>

}
@media screen and (max-width: 859px) {
	#logo {
		background-size: 100% 100%;
		width: <?php echo (isset($this->_rootref['PBLOGO_WIDTH_MOB'])) ? $this->_rootref['PBLOGO_WIDTH_MOB'] : ''; ?>px;
		height: <?php echo (isset($this->_rootref['PBLOGO_HEIGHT_MOB'])) ? $this->_rootref['PBLOGO_HEIGHT_MOB'] : ''; ?>px;
	}
}
</style>
<?php } ?>

</head>

<body id="phpbb" class="phpbb section-<?php echo (isset($this->_rootref['SCRIPT_NAME'])) ? $this->_rootref['SCRIPT_NAME'] : ''; ?> <?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; if ($this->_rootref['TOPBAR_CODE']) {  ?> body-top-bar<?php if ($this->_rootref['S_TOPBAR_FIXED']) {  ?> top-bar-fixed<?php } } if ($this->_rootref['S_BG_FIXED']) {  ?> bg-fixed<?php } ?>">
<?php if ($this->_rootref['TOPBAR_CODE']) {  ?>

<div id="top-bar">
	<div><?php if ($this->_rootref['S_QUICK_STYLE_OPTIONS']) {  $this->_tpl_include('prime_quick_style.html'); } echo (isset($this->_rootref['TOPBAR_CODE'])) ? $this->_rootref['TOPBAR_CODE'] : ''; ?></div>
</div>
<?php } ?>

<div id="wrapper"<?php if ($this->_rootref['FORUM_ID']) {  ?> class="f<?php echo (isset($this->_rootref['FORUM_ID'])) ? $this->_rootref['FORUM_ID'] : ''; ?>"<?php } ?>>
<?php if ($this->_rootref['S_VIDEOBG'] && ( $this->_rootref['S_INDEX_PAGE'] || $this->_rootref['S_VIDEOBG_ALL'] ) && ! $this->_rootref['S_IS_BOT']) {  $this->_tpl_include('videobg.html'); } ?>


<div id="wrap">
	<a id="top" accesskey="t"></a>
	<div id="page-header">

		<div id="logo-wrap">
			<div class="headerbar">
				<div>
					<div>	
			<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?>

			<ul class="linklist rightside">
				<li class="icon-ucp">
					<a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?>" accesskey="e"><?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></a>
					<?php if ($this->_rootref['S_DISPLAY_PM']) {  ?> (<a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>"><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?></a>)<?php } if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?> &bull;	<a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?></a><?php } if ($this->_rootref['U_RESTORE_PERMISSIONS']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_RESTORE_PERMISSIONS'])) ? $this->_rootref['U_RESTORE_PERMISSIONS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RESTORE_PERMISSIONS'])) ? $this->_rootref['L_RESTORE_PERMISSIONS'] : ((isset($user->lang['RESTORE_PERMISSIONS'])) ? $user->lang['RESTORE_PERMISSIONS'] : '{ RESTORE_PERMISSIONS }')); ?></a><?php } ?>

				</li>
			</ul>
			<?php } ?>

			<ul class="linklist rightside" style="clear:right">
				<?php if ($this->_rootref['U_PORTAL']) {  ?><!-- <li class="icon-portal"><a href="<?php echo (isset($this->_rootref['U_PORTAL'])) ? $this->_rootref['U_PORTAL'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PORTAL'])) ? $this->_rootref['L_PORTAL'] : ((isset($user->lang['PORTAL'])) ? $user->lang['PORTAL'] : '{ PORTAL }')); ?></a></li> --><?php } if ($this->_rootref['U_DKP']) {  ?><li class="icon-dkp"><a href="<?php echo (isset($this->_rootref['U_DKP'])) ? $this->_rootref['U_DKP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_DKPPAGE'])) ? $this->_rootref['L_DKPPAGE'] : ((isset($user->lang['DKPPAGE'])) ? $user->lang['DKPPAGE'] : '{ DKPPAGE }')); ?></a></li><?php } if ($this->_rootref['HEADERLINKS_CODE']) {  ?> <!--<?php echo (isset($this->_rootref['HEADERLINKS_CODE'])) ? $this->_rootref['HEADERLINKS_CODE'] : ''; ?> --><?php } ?>

				<li class="icon-faq"><a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>"><?php echo ((isset($this->_rootref['L_FAQ'])) ? $this->_rootref['L_FAQ'] : ((isset($user->lang['FAQ'])) ? $user->lang['FAQ'] : '{ FAQ }')); ?></a></li>
				<?php if ($this->_rootref['S_MCHAT_ENABLE'] && $this->_rootref['U_MCHAT']) {  ?><li class="icon-bump"><a href="<?php echo (isset($this->_rootref['U_MCHAT'])) ? $this->_rootref['U_MCHAT'] : ''; ?>#mChat" title="<?php echo ((isset($this->_rootref['L_MCHAT_TITLE'])) ? $this->_rootref['L_MCHAT_TITLE'] : ((isset($user->lang['MCHAT_TITLE'])) ? $user->lang['MCHAT_TITLE'] : '{ MCHAT_TITLE }')); ?>"><?php echo ((isset($this->_rootref['L_MCHAT_TITLE'])) ? $this->_rootref['L_MCHAT_TITLE'] : ((isset($user->lang['MCHAT_TITLE'])) ? $user->lang['MCHAT_TITLE'] : '{ MCHAT_TITLE }')); ?></a></li><?php } if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_DISPLAY_MEMBERLIST']) {  ?><li class="icon-members"><a href="<?php echo (isset($this->_rootref['U_MEMBERLIST'])) ? $this->_rootref['U_MEMBERLIST'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_MEMBERLIST_EXPLAIN'])) ? $this->_rootref['L_MEMBERLIST_EXPLAIN'] : ((isset($user->lang['MEMBERLIST_EXPLAIN'])) ? $user->lang['MEMBERLIST_EXPLAIN'] : '{ MEMBERLIST_EXPLAIN }')); ?>"><?php echo ((isset($this->_rootref['L_MEMBERLIST'])) ? $this->_rootref['L_MEMBERLIST'] : ((isset($user->lang['MEMBERLIST'])) ? $user->lang['MEMBERLIST'] : '{ MEMBERLIST }')); ?></a></li><?php } if (! $this->_rootref['S_USER_LOGGED_IN'] && $this->_rootref['S_REGISTER_ENABLED'] && ! ( $this->_rootref['S_SHOW_COPPA'] || $this->_rootref['S_REGISTRATION'] )) {  ?><li class="icon-register"><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a></li><?php } if ($this->_rootref['S_USER_LOGGED_IN']) {  ?><li class="icon-logout"><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?>" accesskey="x"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a></li><?php } else { ?>

					<li class="icon-logout"><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?>" accesskey="x" id="quick-login"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a></li><?php } } ?>

			</ul>
			<?php if ($this->_rootref['S_USER_LOGGED_IN']) {  ?><span class="time"><?php echo (isset($this->_rootref['LAST_VISIT_DATE'])) ? $this->_rootref['LAST_VISIT_DATE'] : ''; ?></span><?php } ?>

					</div>
				</div>
			</div>
			<a id="logo" href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>" title="<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>"></a>
			<div class="clear"></div>
		</div>
	</div>
	
	<p class="skiplink"><a href="#start_here"><?php echo ((isset($this->_rootref['L_SKIP'])) ? $this->_rootref['L_SKIP'] : ((isset($user->lang['SKIP'])) ? $user->lang['SKIP'] : '{ SKIP }')); ?></a></p>

	<div id="page-body">
		<div class="body-top<?php if ($this->_rootref['PAGINATION'] || $this->_rootref['RECENT_TOPICS_PAGINATION']) {  ?> headpagi<?php } ?>">
			<?php if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IN_SEARCH']) {  ?>

			<div id="search-box">

			<?php if ($this->_rootref['S_VIEWFORUM'] && $this->_rootref['S_DISPLAY_SEARCHBOX']) {  ?>

				<form method="get" id="forum-search" action="<?php echo (isset($this->_rootref['S_SEARCHBOX_ACTION'])) ? $this->_rootref['S_SEARCHBOX_ACTION'] : ''; ?>">
				<fieldset>
					<input class="inputbox search tiny" type="text" name="keywords" id="search_keywords" size="20" value="<?php echo ((isset($this->_rootref['L_SEARCH_FORUM'])) ? $this->_rootref['L_SEARCH_FORUM'] : ((isset($user->lang['SEARCH_FORUM'])) ? $user->lang['SEARCH_FORUM'] : '{ SEARCH_FORUM }')); ?>" onclick="if (this.value == '<?php echo ((isset($this->_rootref['LA_SEARCH_FORUM'])) ? $this->_rootref['LA_SEARCH_FORUM'] : ((isset($this->_rootref['L_SEARCH_FORUM'])) ? addslashes($this->_rootref['L_SEARCH_FORUM']) : ((isset($user->lang['SEARCH_FORUM'])) ? addslashes($user->lang['SEARCH_FORUM']) : '{ SEARCH_FORUM }'))); ?>') this.value = '';" onblur="if (this.value == '') this.value = '<?php echo ((isset($this->_rootref['LA_SEARCH_FORUM'])) ? $this->_rootref['LA_SEARCH_FORUM'] : ((isset($this->_rootref['L_SEARCH_FORUM'])) ? addslashes($this->_rootref['L_SEARCH_FORUM']) : ((isset($user->lang['SEARCH_FORUM'])) ? addslashes($user->lang['SEARCH_FORUM']) : '{ SEARCH_FORUM }'))); ?>';" />
					<input class="qs-button" value="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" type="submit" title="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" />
					<div class="qs-title"></div>
					<a class="qs-advanced" href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV_EXPLAIN'])) ? $this->_rootref['L_SEARCH_ADV_EXPLAIN'] : ((isset($user->lang['SEARCH_ADV_EXPLAIN'])) ? $user->lang['SEARCH_ADV_EXPLAIN'] : '{ SEARCH_ADV_EXPLAIN }')); ?>"></a>
					<?php echo (isset($this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'] : ''; ?>

				</fieldset>
				</form>
			<?php } else if ($this->_rootref['S_VIEWTOPIC'] && $this->_rootref['S_DISPLAY_SEARCHBOX']) {  ?>

				<form method="get" id="topic-search" action="<?php echo (isset($this->_rootref['S_SEARCHBOX_ACTION'])) ? $this->_rootref['S_SEARCHBOX_ACTION'] : ''; ?>">
				<fieldset>
					<input class="inputbox search tiny"  type="text" name="keywords" id="search_keywords" size="20" value="<?php echo ((isset($this->_rootref['L_SEARCH_TOPIC'])) ? $this->_rootref['L_SEARCH_TOPIC'] : ((isset($user->lang['SEARCH_TOPIC'])) ? $user->lang['SEARCH_TOPIC'] : '{ SEARCH_TOPIC }')); ?>" onclick="if(this.value=='<?php echo ((isset($this->_rootref['LA_SEARCH_TOPIC'])) ? $this->_rootref['LA_SEARCH_TOPIC'] : ((isset($this->_rootref['L_SEARCH_TOPIC'])) ? addslashes($this->_rootref['L_SEARCH_TOPIC']) : ((isset($user->lang['SEARCH_TOPIC'])) ? addslashes($user->lang['SEARCH_TOPIC']) : '{ SEARCH_TOPIC }'))); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo ((isset($this->_rootref['LA_SEARCH_TOPIC'])) ? $this->_rootref['LA_SEARCH_TOPIC'] : ((isset($this->_rootref['L_SEARCH_TOPIC'])) ? addslashes($this->_rootref['L_SEARCH_TOPIC']) : ((isset($user->lang['SEARCH_TOPIC'])) ? addslashes($user->lang['SEARCH_TOPIC']) : '{ SEARCH_TOPIC }'))); ?>';" />
					<input class="qs-button" value="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" type="submit" title="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" />
					<div class="qs-title"></div>
					<a class="qs-advanced" href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV_EXPLAIN'])) ? $this->_rootref['L_SEARCH_ADV_EXPLAIN'] : ((isset($user->lang['SEARCH_ADV_EXPLAIN'])) ? $user->lang['SEARCH_ADV_EXPLAIN'] : '{ SEARCH_ADV_EXPLAIN }')); ?>"></a>
					<?php echo (isset($this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_LOCAL_HIDDEN_FIELDS'] : ''; ?>

				</fieldset>
				</form>
			<?php } else if ($this->_rootref['SEARCH_MATCHES'] && $this->_rootref['SEARCH_IN_RESULTS']) {  ?>

				<form method="post" action="<?php echo (isset($this->_rootref['S_SEARCH_ACTION'])) ? $this->_rootref['S_SEARCH_ACTION'] : ''; ?>">
				<fieldset>
					<input class="inputbox search tiny"  type="text" name="add_keywords" id="add_keywords" size="20" value="<?php echo ((isset($this->_rootref['L_SEARCH_IN_RESULTS'])) ? $this->_rootref['L_SEARCH_IN_RESULTS'] : ((isset($user->lang['SEARCH_IN_RESULTS'])) ? $user->lang['SEARCH_IN_RESULTS'] : '{ SEARCH_IN_RESULTS }')); ?>" onclick="if(this.value=='<?php echo ((isset($this->_rootref['LA_SEARCH_IN_RESULTS'])) ? $this->_rootref['LA_SEARCH_IN_RESULTS'] : ((isset($this->_rootref['L_SEARCH_IN_RESULTS'])) ? addslashes($this->_rootref['L_SEARCH_IN_RESULTS']) : ((isset($user->lang['SEARCH_IN_RESULTS'])) ? addslashes($user->lang['SEARCH_IN_RESULTS']) : '{ SEARCH_IN_RESULTS }'))); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo ((isset($this->_rootref['LA_SEARCH_IN_RESULTS'])) ? $this->_rootref['LA_SEARCH_IN_RESULTS'] : ((isset($this->_rootref['L_SEARCH_IN_RESULTS'])) ? addslashes($this->_rootref['L_SEARCH_IN_RESULTS']) : ((isset($user->lang['SEARCH_IN_RESULTS'])) ? addslashes($user->lang['SEARCH_IN_RESULTS']) : '{ SEARCH_IN_RESULTS }'))); ?>';" />
					<input class="qs-button" value="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" type="submit" title="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" />
					<div class="qs-title"></div>
					<a class="qs-advanced" href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV_EXPLAIN'])) ? $this->_rootref['L_SEARCH_ADV_EXPLAIN'] : ((isset($user->lang['SEARCH_ADV_EXPLAIN'])) ? $user->lang['SEARCH_ADV_EXPLAIN'] : '{ SEARCH_ADV_EXPLAIN }')); ?>"></a>
				</fieldset>
				</form>
			<?php } else { ?>

				<form action="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" method="get" id="search">
				<fieldset>
					<input name="keywords" id="keywords" type="text" maxlength="128" title="<?php echo ((isset($this->_rootref['L_SEARCH_KEYWORDS'])) ? $this->_rootref['L_SEARCH_KEYWORDS'] : ((isset($user->lang['SEARCH_KEYWORDS'])) ? $user->lang['SEARCH_KEYWORDS'] : '{ SEARCH_KEYWORDS }')); ?>" class="inputbox search" value="<?php if ($this->_rootref['SEARCH_WORDS']) {  echo (isset($this->_rootref['SEARCH_WORDS'])) ? $this->_rootref['SEARCH_WORDS'] : ''; } else { echo ((isset($this->_rootref['L_SEARCH_MINI'])) ? $this->_rootref['L_SEARCH_MINI'] : ((isset($user->lang['SEARCH_MINI'])) ? $user->lang['SEARCH_MINI'] : '{ SEARCH_MINI }')); } ?>" onclick="if(this.value=='<?php echo ((isset($this->_rootref['LA_SEARCH_MINI'])) ? $this->_rootref['LA_SEARCH_MINI'] : ((isset($this->_rootref['L_SEARCH_MINI'])) ? addslashes($this->_rootref['L_SEARCH_MINI']) : ((isset($user->lang['SEARCH_MINI'])) ? addslashes($user->lang['SEARCH_MINI']) : '{ SEARCH_MINI }'))); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo ((isset($this->_rootref['LA_SEARCH_MINI'])) ? $this->_rootref['LA_SEARCH_MINI'] : ((isset($this->_rootref['L_SEARCH_MINI'])) ? addslashes($this->_rootref['L_SEARCH_MINI']) : ((isset($user->lang['SEARCH_MINI'])) ? addslashes($user->lang['SEARCH_MINI']) : '{ SEARCH_MINI }'))); ?>';" />
					<input class="qs-button" value="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" type="submit" title="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" />
					<div class="qs-title"></div>
					<a class="qs-advanced" href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV_EXPLAIN'])) ? $this->_rootref['L_SEARCH_ADV_EXPLAIN'] : ((isset($user->lang['SEARCH_ADV_EXPLAIN'])) ? $user->lang['SEARCH_ADV_EXPLAIN'] : '{ SEARCH_ADV_EXPLAIN }')); ?>"></a>
					<?php echo (isset($this->_rootref['S_SEARCH_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_HIDDEN_FIELDS'] : ''; ?>

				</fieldset>
				</form>
			<?php } ?>

			</div>
			<?php } if ($this->_rootref['PAGINATION'] || $this->_rootref['RECENT_TOPICS_PAGINATION']) {  ?>

			<div id="pagination-box">
				<div>
					<div class="pagination">
						<?php if ($this->_rootref['PAGE_NUMBER']) {  ?><a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>" class="page-jump"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a><span><?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; ?></span>
						<?php } else if ($this->_rootref['RECENT_TOPICS_PAGE_NUMBER']) {  ?><a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>" class="page-jump"><?php echo (isset($this->_rootref['RECENT_TOPICS_PAGE_NUMBER'])) ? $this->_rootref['RECENT_TOPICS_PAGE_NUMBER'] : ''; ?></a><span><?php echo (isset($this->_rootref['RECENT_TOPICS_PAGINATION'])) ? $this->_rootref['RECENT_TOPICS_PAGINATION'] : ''; ?></span><?php } ?>

					</div>
				</div>
			</div>
			<?php } if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IN_SEARCH']) {  ?><div id="fix-left1"></div><?php } else { ?><div id="fix-left2"></div><?php } if ($this->_rootref['PAGINATION'] || $this->_rootref['RECENT_TOPICS_PAGINATION']) {  ?><div id="fix-right1"></div><?php } else { ?><div id="fix-right2"></div><?php } ?>

		</div>
	
		<div id="breadcrumb">
			<ul class="linklist navlinks">
				<li class="nav-link icon-home"><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>" accesskey="h"><span><?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></span></a>
				<?php if ($this->_rootref['S_NAVMENU']) {  ?>

				<div class="nav-popup"><ul>
					<?php if ($this->_rootref['U_PORTAL']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_PORTAL'])) ? $this->_rootref['U_PORTAL'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PORTAL'])) ? $this->_rootref['L_PORTAL'] : ((isset($user->lang['PORTAL'])) ? $user->lang['PORTAL'] : '{ PORTAL }')); ?></a></li><?php } if ($this->_rootref['U_DKP']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_DKP'])) ? $this->_rootref['U_DKP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_DKPPAGE'])) ? $this->_rootref['L_DKPPAGE'] : ((isset($user->lang['DKPPAGE'])) ? $user->lang['DKPPAGE'] : '{ DKPPAGE }')); ?></a></li><?php } if ($this->_rootref['U_MCP']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></a></li><?php } if ($this->_rootref['S_USER_LOGGED_IN']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></a></li><?php } if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_ADV'])) ? $this->_rootref['L_SEARCH_ADV'] : ((isset($user->lang['SEARCH_ADV'])) ? $user->lang['SEARCH_ADV'] : '{ SEARCH_ADV }')); ?></a></li><?php } ?>

					<li><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a></li>
				</ul></div>
				<?php } ?>

				</li>
				<?php $_navlinks_count = (isset($this->_tpldata['navlinks'])) ? sizeof($this->_tpldata['navlinks']) : 0;if ($_navlinks_count) {for ($_navlinks_i = 0; $_navlinks_i < $_navlinks_count; ++$_navlinks_i){$_navlinks_val = &$this->_tpldata['navlinks'][$_navlinks_i]; ?><li class="nav-link"><a href="<?php echo $_navlinks_val['U_VIEW_FORUM']; ?>"><span><?php echo $_navlinks_val['FORUM_NAME']; ?></span></a><?php if ($this->_rootref['S_NAVMENU'] && $_navlinks_val['POPUP']) {  echo $_navlinks_val['POPUP']; } ?>

				</li><?php }} if ($this->_rootref['S_VIEWTOPIC']) {  ?><li class="nav-link"><a href="<?php echo (isset($this->_rootref['U_VIEW_TOPIC'])) ? $this->_rootref['U_VIEW_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?></a></li><?php } if ($this->_rootref['S_IS_LOCKED']) {  ?><li class="nav-link lock" <?php if ($this->_rootref['S_VIEWTOPIC']) {  ?>title="<?php echo ((isset($this->_rootref['L_TOPIC_LOCKED'])) ? $this->_rootref['L_TOPIC_LOCKED'] : ((isset($user->lang['TOPIC_LOCKED'])) ? $user->lang['TOPIC_LOCKED'] : '{ TOPIC_LOCKED }')); ?>"<?php } else { ?>title="<?php echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); ?>"<?php } ?>></li><?php } if ($this->_rootref['U_MCP']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?>" class="mcp-icon"><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></a></li><?php } if ($this->_rootref['U_EMAIL_TOPIC']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_EMAIL_TOPIC'])) ? $this->_rootref['U_EMAIL_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_EMAIL_TOPIC'])) ? $this->_rootref['L_EMAIL_TOPIC'] : ((isset($user->lang['EMAIL_TOPIC'])) ? $user->lang['EMAIL_TOPIC'] : '{ EMAIL_TOPIC }')); ?>" class="sendemail"><?php echo ((isset($this->_rootref['L_EMAIL_TOPIC'])) ? $this->_rootref['L_EMAIL_TOPIC'] : ((isset($user->lang['EMAIL_TOPIC'])) ? $user->lang['EMAIL_TOPIC'] : '{ EMAIL_TOPIC }')); ?></a></li><?php } if ($this->_rootref['U_EMAIL_PM']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_EMAIL_PM'])) ? $this->_rootref['U_EMAIL_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_EMAIL_PM'])) ? $this->_rootref['L_EMAIL_PM'] : ((isset($user->lang['EMAIL_PM'])) ? $user->lang['EMAIL_PM'] : '{ EMAIL_PM }')); ?>" class="sendemail"><?php echo ((isset($this->_rootref['L_EMAIL_PM'])) ? $this->_rootref['L_EMAIL_PM'] : ((isset($user->lang['EMAIL_PM'])) ? $user->lang['EMAIL_PM'] : '{ EMAIL_PM }')); ?></a></li><?php } if ($this->_rootref['U_PRINT_TOPIC']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_PRINT_TOPIC'])) ? $this->_rootref['U_PRINT_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRINT_TOPIC'])) ? $this->_rootref['L_PRINT_TOPIC'] : ((isset($user->lang['PRINT_TOPIC'])) ? $user->lang['PRINT_TOPIC'] : '{ PRINT_TOPIC }')); ?>" accesskey="p" class="print"><?php echo ((isset($this->_rootref['L_PRINT_TOPIC'])) ? $this->_rootref['L_PRINT_TOPIC'] : ((isset($user->lang['PRINT_TOPIC'])) ? $user->lang['PRINT_TOPIC'] : '{ PRINT_TOPIC }')); ?></a></li><?php } if ($this->_rootref['U_PRINT_PM']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_PRINT_PM'])) ? $this->_rootref['U_PRINT_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRINT_PM'])) ? $this->_rootref['L_PRINT_PM'] : ((isset($user->lang['PRINT_PM'])) ? $user->lang['PRINT_PM'] : '{ PRINT_PM }')); ?>" accesskey="p" class="print"><?php echo ((isset($this->_rootref['L_PRINT_PM'])) ? $this->_rootref['L_PRINT_PM'] : ((isset($user->lang['PRINT_PM'])) ? $user->lang['PRINT_PM'] : '{ PRINT_PM }')); ?></a></li><?php } if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_INDEX_PAGE']) {  if ($this->_rootref['U_MARK_FORUMS']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>" accesskey="m"><?php echo ((isset($this->_rootref['L_MARK_FORUMS_READ'])) ? $this->_rootref['L_MARK_FORUMS_READ'] : ((isset($user->lang['MARK_FORUMS_READ'])) ? $user->lang['MARK_FORUMS_READ'] : '{ MARK_FORUMS_READ }')); ?></a></li><?php } } else if ($this->_rootref['S_VIEWTOPIC']) {  if ($this->_rootref['U_VIEW_UNREAD_POST']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_VIEW_UNREAD_POST'])) ? $this->_rootref['U_VIEW_UNREAD_POST'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_UNREAD_POST'])) ? $this->_rootref['L_VIEW_UNREAD_POST'] : ((isset($user->lang['VIEW_UNREAD_POST'])) ? $user->lang['VIEW_UNREAD_POST'] : '{ VIEW_UNREAD_POST }')); ?></a></li><?php } } else if ($this->_rootref['S_VIEWFORUM']) {  if ($this->_rootref['U_MARK_TOPICS'] || $this->_rootref['U_MARK_FORUMS']) {  ?><li class="rightside">
					<?php if ($this->_rootref['S_HAS_SUBFORUM'] && $this->_rootref['U_MARK_FORUMS']) {  ?><a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MARK_SUBFORUMS_READ'])) ? $this->_rootref['L_MARK_SUBFORUMS_READ'] : ((isset($user->lang['MARK_SUBFORUMS_READ'])) ? $user->lang['MARK_SUBFORUMS_READ'] : '{ MARK_SUBFORUMS_READ }')); ?></a><?php } if ($this->_rootref['U_MARK_TOPICS'] && $this->_rootref['U_MARK_FORUMS']) {  ?>  &bull;  <?php } if (sizeof($this->_tpldata['topicrow']) && $this->_rootref['TOTAL_TOPICS'] && $this->_rootref['U_MARK_TOPICS'] && ! $this->_rootref['S_DISPLAY_ACTIVE']) {  ?><a href="<?php echo (isset($this->_rootref['U_MARK_TOPICS'])) ? $this->_rootref['U_MARK_TOPICS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MARK_TOPICS_READ'])) ? $this->_rootref['L_MARK_TOPICS_READ'] : ((isset($user->lang['MARK_TOPICS_READ'])) ? $user->lang['MARK_TOPICS_READ'] : '{ MARK_TOPICS_READ }')); ?></a><?php } ?>

					</li><?php } } else if ($this->_rootref['SEARCH_MATCHES'] && ! $this->_rootref['S_IN_SEARCH']) {  if ($this->_rootref['SEARCH_TOPIC']) {  ?>

					<li class="rightside"><a class="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" href="<?php echo (isset($this->_rootref['U_SEARCH_TOPIC'])) ? $this->_rootref['U_SEARCH_TOPIC'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?>: <?php echo (isset($this->_rootref['SEARCH_TOPIC'])) ? $this->_rootref['SEARCH_TOPIC'] : ''; ?></a></li>
					<?php } else { ?>

					<li class="rightside"><a class="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV'])) ? $this->_rootref['L_SEARCH_ADV'] : ((isset($user->lang['SEARCH_ADV'])) ? $user->lang['SEARCH_ADV'] : '{ SEARCH_ADV }')); ?>"><?php echo ((isset($this->_rootref['L_RETURN_TO_SEARCH_ADV'])) ? $this->_rootref['L_RETURN_TO_SEARCH_ADV'] : ((isset($user->lang['RETURN_TO_SEARCH_ADV'])) ? $user->lang['RETURN_TO_SEARCH_ADV'] : '{ RETURN_TO_SEARCH_ADV }')); ?></a></li>
					<?php } } } ?>

			</ul>
			<div id="breadcrumb-extra"></div>
		</div>

		<a id="start_here" style="display:none"></a>
	
		<div class="wrap1">
			<div class="wrap2">
				<div class="wrap3">
					<div class="wrap4">
						<div class="wrap5">
							<div class="wrap6">
								<div class="wrap7">
									<div class="wrap8">
	<?php if ($this->_rootref['IE6MESSAGE_CODE']) {  echo (isset($this->_rootref['IE6MESSAGE_CODE'])) ? $this->_rootref['IE6MESSAGE_CODE'] : ''; } if ($this->_rootref['S_BOARD_DISABLED'] && $this->_rootref['S_USER_LOGGED_IN'] && ( $this->_rootref['U_MCP'] || $this->_rootref['U_ACP'] )) {  ?>

	<div id="information" class="rules" style="font-size: 1.3em; color: #FFF; padding: 5px 10px; margin: 10px 7px;">
		<div class="inner"><span class="corners-top"><span></span></span>
			<strong><?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?>:</strong> <?php echo ((isset($this->_rootref['L_BOARD_DISABLED'])) ? $this->_rootref['L_BOARD_DISABLED'] : ((isset($user->lang['BOARD_DISABLED'])) ? $user->lang['BOARD_DISABLED'] : '{ BOARD_DISABLED }')); ?>

		<span class="corners-bottom"><span></span></span></div>
	</div>
	<?php } if ($this->_rootref['ADS_TOP_CODE'] && ! $this->_rootref['S_INDEX_PAGE'] && ! $this->_rootref['S_IS_BOT']) {  ?>

	<div class="advertisement top"><?php echo (isset($this->_rootref['ADS_TOP_CODE'])) ? $this->_rootref['ADS_TOP_CODE'] : ''; ?></div>
	<?php } ?>