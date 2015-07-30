<?php if (!defined('IN_PHPBB')) exit; ?><div class="wow-index">
<?php $_forumrow_count = (isset($this->_tpldata['forumrow'])) ? sizeof($this->_tpldata['forumrow']) : 0;if ($_forumrow_count) {for ($_forumrow_i = 0; $_forumrow_i < $_forumrow_count; ++$_forumrow_i){$_forumrow_val = &$this->_tpldata['forumrow'][$_forumrow_i]; if (( $_forumrow_val['S_IS_CAT'] && ! $_forumrow_val['S_FIRST_ROW'] ) || $_forumrow_val['S_NO_CAT']) {  ?>

		</ul>
	</div>
	<?php } if ($_forumrow_val['S_IS_CAT'] || $_forumrow_val['S_FIRST_ROW'] || $_forumrow_val['S_NO_CAT']) {  ?>

	<div class="forabg" id="cat-<?php echo $_forumrow_val['FORUM_ID']; ?>">
		<h2 class="open"><?php if ($_forumrow_val['S_IS_CAT']) {  ?><a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a><?php } else { echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); } ?></h2>

		<ul class="topiclist forums">
	<?php } if (! $_forumrow_val['S_IS_CAT']) {  ?>

			<li class="wow-forum" id="forum-<?php echo $_forumrow_val['FORUM_ID']; ?>">
				<a class="forum-link" href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>" title="<?php echo $_forumrow_val['FORUM_FOLDER_IMG_ALT']; ?>">
					<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?><div class="forum-image" style="background-image: url(<?php echo $_forumrow_val['FORUM_IMAGE_SRC']; ?>)"></div><?php } ?>

					<div class="forum-info"><div class="forum-title"><?php echo $_forumrow_val['FORUM_NAME']; ?>

					<?php if ($_forumrow_val['S_UNREAD_FORUM']) {  ?><span class="new-icon" title="<?php echo ((isset($this->_rootref['L_UNREAD_POSTS'])) ? $this->_rootref['L_UNREAD_POSTS'] : ((isset($user->lang['UNREAD_POSTS'])) ? $user->lang['UNREAD_POSTS'] : '{ UNREAD_POSTS }')); ?>"></span><?php } ?>

					<div class="forum-description"><?php echo $_forumrow_val['FORUM_DESC']; ?></div></div></div>
				</a>
				<div class="forum-stats">
				<?php if ($_forumrow_val['CLICKS']) {  ?>

					<?php echo ((isset($this->_rootref['L_REDIRECTS'])) ? $this->_rootref['L_REDIRECTS'] : ((isset($user->lang['REDIRECTS'])) ? $user->lang['REDIRECTS'] : '{ REDIRECTS }')); ?>: <?php echo $_forumrow_val['CLICKS']; ?>

				<?php } else if (! $_forumrow_val['S_IS_LINK']) {  if ($this->_rootref['S_ENABLE_FEEDS'] && $_forumrow_val['S_FEED_ENABLED']) {  ?><!-- <a class="feed-icon-forum" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo $_forumrow_val['FORUM_NAME']; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?f=<?php echo $_forumrow_val['FORUM_ID']; ?>"><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/icons/feed.gif" alt="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo $_forumrow_val['FORUM_NAME']; ?>" /></a> --><?php } ?>

					(<?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?>: <?php echo $_forumrow_val['TOPICS']; ?> | <?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>: <?php echo $_forumrow_val['POSTS']; ?>)
					<?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_forumrow_val['U_LAST_POST']; ?>" class="last-post-icon" title="<?php echo ((isset($this->_rootref['L_VIEW_LATEST_POST'])) ? $this->_rootref['L_VIEW_LATEST_POST'] : ((isset($user->lang['VIEW_LATEST_POST'])) ? $user->lang['VIEW_LATEST_POST'] : '{ VIEW_LATEST_POST }')); ?>"><?php echo ((isset($this->_rootref['L_VIEW_LATEST_POST'])) ? $this->_rootref['L_VIEW_LATEST_POST'] : ((isset($user->lang['VIEW_LATEST_POST'])) ? $user->lang['VIEW_LATEST_POST'] : '{ VIEW_LATEST_POST }')); ?></a> <?php } if ($_forumrow_val['S_LOCKED_FORUM']) {  ?><span class="locked-icon" title="<?php echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); ?>"><?php echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); ?></span><?php } } ?>

				</div>
				<?php if ($_forumrow_val['U_UNAPPROVED_TOPICS']) {  ?><div class="extra-icons"><a href="<?php echo $_forumrow_val['U_UNAPPROVED_TOPICS']; ?>"><?php echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?></a></div><?php } ?>

				<!--<?php if ($_forumrow_val['MODERATORS']) {  ?><br /><strong><?php echo $_forumrow_val['L_MODERATOR_STR']; ?>:</strong> <?php echo $_forumrow_val['MODERATORS']; } ?>-->
				<?php if ($_forumrow_val['SUBFORUMS'] && $_forumrow_val['S_LIST_SUBFORUMS']) {  ?><a class="subforums-button" id="subforums-<?php echo $_forumrow_val['FORUM_ID']; ?>" href="#"></a><div class="subforums-menu" id="subforums-<?php echo $_forumrow_val['FORUM_ID']; ?>-menu"><strong><?php echo $_forumrow_val['L_SUBFORUM_STR']; ?></strong> <?php echo $_forumrow_val['SUBFORUMS']; ?></div><?php } ?>

			</li>
			<?php } if ($_forumrow_val['S_LAST_ROW']) {  ?>

		</ul>
	</div>
	<?php } }} else { ?>

	<div class="panel">
		<div class="inner">
			<p class="rules"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/icons/error-tiny.gif" /><?php echo ((isset($this->_rootref['L_NO_FORUMS'])) ? $this->_rootref['L_NO_FORUMS'] : ((isset($user->lang['NO_FORUMS'])) ? $user->lang['NO_FORUMS'] : '{ NO_FORUMS }')); ?></p>
		</div>
	</div>
<?php } ?>

</div>