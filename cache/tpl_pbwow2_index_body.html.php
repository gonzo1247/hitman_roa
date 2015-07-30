<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); if ($this->_rootref['RECENT_TOPICS_DISPLAY']) {  ?>

<div class="index-right"><?php $this->_tpl_include('recent_topics_body.html'); ?></div>
<div class="index-left">
<?php } else { ?>

<div class="index">
<?php } if ($this->_rootref['S_MCHAT_ENABLE'] && $this->_rootref['S_MCHAT_ON_INDEX'] && $this->_rootref['S_MCHAT_LOCATION']) {  $this->_tpl_include('mchat_body.html'); } $this->_tpl_include('forumlist_body.html'); if ($this->_rootref['S_MCHAT_ENABLE'] && $this->_rootref['S_MCHAT_ON_INDEX'] && ! $this->_rootref['S_MCHAT_LOCATION']) {  $this->_tpl_include('mchat_body.html'); } if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>

<div class="index-extra" id="online">
	<h2 class="open"><?php if ($this->_rootref['U_VIEWONLINE']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></a><?php } else { echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); } ?></h2>
	<div class="block">
		<p><?php echo (isset($this->_rootref['TOTAL_USERS_ONLINE'])) ? $this->_rootref['TOTAL_USERS_ONLINE'] : ''; ?> (<?php echo ((isset($this->_rootref['L_ONLINE_EXPLAIN'])) ? $this->_rootref['L_ONLINE_EXPLAIN'] : ((isset($user->lang['ONLINE_EXPLAIN'])) ? $user->lang['ONLINE_EXPLAIN'] : '{ ONLINE_EXPLAIN }')); ?>)<br /><?php echo (isset($this->_rootref['RECORD_USERS'])) ? $this->_rootref['RECORD_USERS'] : ''; ?><br /> <br /><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?>

		<?php if ($this->_rootref['LEGEND']) {  ?><br /><em><?php echo ((isset($this->_rootref['L_LEGEND'])) ? $this->_rootref['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ LEGEND }')); ?>: <?php echo (isset($this->_rootref['LEGEND'])) ? $this->_rootref['LEGEND'] : ''; ?></em><?php } ?></p>
		<?php if ($this->_rootref['U_VIEWONLINE']) {  ?><a class="online-pagelink" href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/icons/icon_pagelink.gif" alt="<?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?>" title="<?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?>" /></a><?php } if ($this->_rootref['S_MCHAT_ENABLE'] && $this->_rootref['S_MCHAT_ON_INDEX'] && $this->_rootref['S_MCHAT_LOCATION']) {  $this->_tpl_include('mchat_stats.html'); } ?>

	</div>
</div>
<?php } if ($this->_rootref['S_DISPLAY_BIRTHDAY_LIST'] && $this->_rootref['BIRTHDAY_LIST']) {  ?>

<div class="index-extra" id="bdays">
	<h2 class="open"><?php echo ((isset($this->_rootref['L_BIRTHDAYS'])) ? $this->_rootref['L_BIRTHDAYS'] : ((isset($user->lang['BIRTHDAYS'])) ? $user->lang['BIRTHDAYS'] : '{ BIRTHDAYS }')); ?></h2>
	<div class="block">
		<p><?php if ($this->_rootref['BIRTHDAY_LIST']) {  echo ((isset($this->_rootref['L_CONGRATULATIONS'])) ? $this->_rootref['L_CONGRATULATIONS'] : ((isset($user->lang['CONGRATULATIONS'])) ? $user->lang['CONGRATULATIONS'] : '{ CONGRATULATIONS }')); ?>: <strong><?php echo (isset($this->_rootref['BIRTHDAY_LIST'])) ? $this->_rootref['BIRTHDAY_LIST'] : ''; ?></strong><?php } else { echo ((isset($this->_rootref['L_NO_BIRTHDAYS'])) ? $this->_rootref['L_NO_BIRTHDAYS'] : ((isset($user->lang['NO_BIRTHDAYS'])) ? $user->lang['NO_BIRTHDAYS'] : '{ NO_BIRTHDAYS }')); } ?></p>
	</div>
</div>
<?php } if ($this->_rootref['NEWEST_USER'] || $this->_rootref['S_DISPLAY_SEARCH']) {  ?>

<div class="index-extra" id="stats">
	<h2 class="open"><?php echo ((isset($this->_rootref['L_STATISTICS'])) ? $this->_rootref['L_STATISTICS'] : ((isset($user->lang['STATISTICS'])) ? $user->lang['STATISTICS'] : '{ STATISTICS }')); ?></h2>
	<div class="block">
		<?php if ($this->_rootref['NEWEST_USER']) {  ?><p><?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['NEWEST_USER'])) ? $this->_rootref['NEWEST_USER'] : ''; ?></p><?php } if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IS_BOT'] && ! $this->_rootref['RECENT_TOPICS_DISPLAY']) {  ?>

		<ul class="linklist">
			<li>
				<a href="<?php echo (isset($this->_rootref['U_SEARCH_UNANSWERED'])) ? $this->_rootref['U_SEARCH_UNANSWERED'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_UNANSWERED'])) ? $this->_rootref['L_SEARCH_UNANSWERED'] : ((isset($user->lang['SEARCH_UNANSWERED'])) ? $user->lang['SEARCH_UNANSWERED'] : '{ SEARCH_UNANSWERED }')); ?></a>
				<?php if ($this->_rootref['S_LOAD_UNREADS']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_UNREAD'])) ? $this->_rootref['U_SEARCH_UNREAD'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_UNREAD'])) ? $this->_rootref['L_SEARCH_UNREAD'] : ((isset($user->lang['SEARCH_UNREAD'])) ? $user->lang['SEARCH_UNREAD'] : '{ SEARCH_UNREAD }')); ?></a><?php } if ($this->_rootref['S_USER_LOGGED_IN']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_NEW'])) ? $this->_rootref['U_SEARCH_NEW'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_NEW'])) ? $this->_rootref['L_SEARCH_NEW'] : ((isset($user->lang['SEARCH_NEW'])) ? $user->lang['SEARCH_NEW'] : '{ SEARCH_NEW }')); ?></a><?php } ?> 
				&bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['U_SEARCH_ACTIVE_TOPICS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['L_SEARCH_ACTIVE_TOPICS'] : ((isset($user->lang['SEARCH_ACTIVE_TOPICS'])) ? $user->lang['SEARCH_ACTIVE_TOPICS'] : '{ SEARCH_ACTIVE_TOPICS }')); ?></a>
			</li>
		</ul>
		<?php } ?>

	</div>
</div>
<?php } ?>


</div>
<div class="clear"></div>

<?php $this->_tpl_include('overall_footer.html'); ?>