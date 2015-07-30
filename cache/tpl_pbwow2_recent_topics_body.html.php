<?php if (!defined('IN_PHPBB')) exit; ?><a id="recent_topics"></a>

<div class="wow-recent" id="recent">
	<h2 class="open"><?php echo ((isset($this->_rootref['L_RECENT_TOPICS'])) ? $this->_rootref['L_RECENT_TOPICS'] : ((isset($user->lang['RECENT_TOPICS'])) ? $user->lang['RECENT_TOPICS'] : '{ RECENT_TOPICS }')); ?></h2>

<?php $_recent_topics_count = (isset($this->_tpldata['recent_topics'])) ? sizeof($this->_tpldata['recent_topics']) : 0;if ($_recent_topics_count) {for ($_recent_topics_i = 0; $_recent_topics_i < $_recent_topics_count; ++$_recent_topics_i){$_recent_topics_val = &$this->_tpldata['recent_topics'][$_recent_topics_i]; if (! $_recent_topics_val['S_TOPIC_TYPE_SWITCH'] && ! $_recent_topics_val['S_FIRST_ROW']) {  ?>

	</ul>
	<?php } if ($_recent_topics_val['S_FIRST_ROW'] || ! $_recent_topics_val['S_TOPIC_TYPE_SWITCH']) {  ?>

	<ul>
	<?php } ?>

		<li>
			<dl class="icon" style="background-image: url(<?php echo $_recent_topics_val['TOPIC_FOLDER_IMG_SRC']; ?>); background-repeat: no-repeat;">
				<dt style="<?php if ($_recent_topics_val['TOPIC_ICON_IMG']) {  ?>background-image: url(<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_recent_topics_val['TOPIC_ICON_IMG']; ?>); background-repeat: no-repeat;<?php } ?>" <?php if ($_recent_topics_val['TOPIC_PREVIEW_TEXT']) {  ?>title="<?php echo $_recent_topics_val['TOPIC_PREVIEW_TEXT']; ?>" id="t<?php echo $_recent_topics_val['TOPIC_ID']; ?>"<?php } else { ?>title="<?php echo $_recent_topics_val['TOPIC_FOLDER_IMG_ALT']; ?>"<?php } ?>><?php if ($_recent_topics_val['S_UNREAD_TOPIC']) {  ?><a href="<?php echo $_recent_topics_val['U_NEWEST_POST']; ?>"><?php echo (isset($this->_rootref['NEWEST_POST_IMG'])) ? $this->_rootref['NEWEST_POST_IMG'] : ''; ?></a> <?php } ?><a href="<?php echo $_recent_topics_val['U_VIEW_TOPIC']; ?>" class="topictitle"<?php if ($_recent_topics_val['TOPIC_AUTHOR_COLOUR']) {  ?> style="color: <?php echo $_recent_topics_val['TOPIC_AUTHOR_COLOUR']; ?>"<?php } ?>><?php echo $_recent_topics_val['TOPIC_TITLE']; ?></a><?php if ($this->_rootref['U_VIEW_UNREAD_POST'] && ! $this->_rootref['S_IS_BOT']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_VIEW_UNREAD_POST'])) ? $this->_rootref['U_VIEW_UNREAD_POST'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_UNREAD_POST'])) ? $this->_rootref['L_VIEW_UNREAD_POST'] : ((isset($user->lang['VIEW_UNREAD_POST'])) ? $user->lang['VIEW_UNREAD_POST'] : '{ VIEW_UNREAD_POST }')); ?></a> &bull; <?php } if ($_recent_topics_val['S_TOPIC_UNAPPROVED'] || $_recent_topics_val['S_POSTS_UNAPPROVED'] || $_recent_topics_val['S_TOPIC_REPORTED']) {  ?>

				<div class="extra-icons">
					<?php if ($_recent_topics_val['S_TOPIC_UNAPPROVED'] || $_recent_topics_val['S_POSTS_UNAPPROVED']) {  ?><a href="<?php echo $_recent_topics_val['U_MCP_QUEUE']; ?>"><?php echo $_recent_topics_val['UNAPPROVED_IMG']; ?></a> <?php } if ($_recent_topics_val['S_TOPIC_REPORTED']) {  ?><a href="<?php echo $_recent_topics_val['U_MCP_REPORT']; ?>"><?php echo $_recent_topics_val['REPORTED_IMG']; ?></a><?php } ?>

				</div>
				<?php } if ($_recent_topics_val['U_VIEW_FORUM'] && $_recent_topics_val['FORUM_NAME']) {  ?><br /><?php if ($_recent_topics_val['ATTACH_ICON_IMG']) {  echo $_recent_topics_val['ATTACH_ICON_IMG']; ?> <?php } $_parent_forums_count = (isset($_recent_topics_val['parent_forums'])) ? sizeof($_recent_topics_val['parent_forums']) : 0;if ($_parent_forums_count) {for ($_parent_forums_i = 0; $_parent_forums_i < $_parent_forums_count; ++$_parent_forums_i){$_parent_forums_val = &$_recent_topics_val['parent_forums'][$_parent_forums_i]; ?><a class="forum" href="<?php echo $_parent_forums_val['U_VIEW_FORUM']; ?>"><?php echo $_parent_forums_val['FORUM_NAME']; ?></a> &raquo; <?php }} ?><a class="forum" href="<?php echo $_recent_topics_val['U_VIEW_FORUM']; ?>"><?php echo $_recent_topics_val['FORUM_NAME']; ?></a><?php } ?>


				</dt>

				<dd class="topic-stats"><?php echo $_recent_topics_val['LAST_POST_TIME']; ?> <a href="<?php echo $_recent_topics_val['U_LAST_POST']; ?>" class="last-post-icon" title="<?php echo ((isset($this->_rootref['L_VIEW_LATEST_POST'])) ? $this->_rootref['L_VIEW_LATEST_POST'] : ((isset($user->lang['VIEW_LATEST_POST'])) ? $user->lang['VIEW_LATEST_POST'] : '{ VIEW_LATEST_POST }')); ?>"><?php echo ((isset($this->_rootref['L_VIEW_LATEST_POST'])) ? $this->_rootref['L_VIEW_LATEST_POST'] : ((isset($user->lang['VIEW_LATEST_POST'])) ? $user->lang['VIEW_LATEST_POST'] : '{ VIEW_LATEST_POST }')); ?></a></dd>
			</dl>
			<?php if ($_recent_topics_val['TOPIC_PREVIEW_TEXT'] && $this->_rootref['S_JQUERY_TOPIC_PREVIEW']) {  ?>

			<div id="topic_preview_t<?php echo $_recent_topics_val['TOPIC_ID']; ?>" style="display:none;">
				<?php if ($_recent_topics_val['TOPIC_PREVIEW_TEXT2']) {  ?><strong><?php echo ((isset($this->_rootref['L_FIRST_POST'])) ? $this->_rootref['L_FIRST_POST'] : ((isset($user->lang['FIRST_POST'])) ? $user->lang['FIRST_POST'] : '{ FIRST_POST }')); ?></strong><hr /><?php } if ($_recent_topics_val['TOPIC_PREVIEW_AVATAR']) {  ?><div class="topic_preview_avatar"><?php echo $_recent_topics_val['TOPIC_PREVIEW_AVATAR']; ?></div><?php } else if ($_recent_topics_val['TOPIC_PREVIEW_PBAVATAR']) {  ?><div class="topic_preview_avatar"><img src="<?php if ($_recent_topics_val['S_TOPIC_PREVIEW_PBBNET']) {  echo $_recent_topics_val['TOPIC_PREVIEW_PBAVATAR']; } else { echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/portraits/<?php echo $_recent_topics_val['TOPIC_PREVIEW_PBAVATAR']; } ?>" width="64" height="64" alt="<?php echo $_topicrow_val['TOPIC_AUTHOR']; ?>" /></div><?php } ?>

				<div class="topic_preview_text_first"<?php if ($_recent_topics_val['TOPIC_PREVIEW_COLOUR']) {  ?> style="color:<?php echo $_recent_topics_val['TOPIC_PREVIEW_COLOUR']; ?>"<?php } ?>></div>
				<?php if ($_recent_topics_val['TOPIC_PREVIEW_TEXT2']) {  ?>

					<div class="topic_preview_break"></div>
					<strong><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></strong><hr />
					<?php if ($_recent_topics_val['TOPIC_PREVIEW_AVATAR2']) {  ?><div class="topic_preview_avatar"><?php echo $_recent_topics_val['TOPIC_PREVIEW_AVATAR2']; ?></div><?php } else if ($_recent_topics_val['TOPIC_PREVIEW_PBAVATAR2']) {  ?><div class="topic_preview_avatar"><img src="<?php if ($_recent_topics_val['S_TOPIC_PREVIEW_PBBNET2']) {  echo $_recent_topics_val['TOPIC_PREVIEW_PBAVATAR2']; } else { echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/portraits/<?php echo $_recent_topics_val['TOPIC_PREVIEW_PBAVATAR2']; } ?>" width="64" height="64" alt="<?php echo $_topicrow_val['TOPIC_AUTHOR']; ?>" /></div><?php } ?>

					<div class="topic_preview_text_last"<?php if ($_recent_topics_val['TOPIC_PREVIEW_COLOUR2']) {  ?> style="color:<?php echo $_recent_topics_val['TOPIC_PREVIEW_COLOUR2']; ?>"<?php } ?>><?php echo $_recent_topics_val['TOPIC_PREVIEW_TEXT2']; ?></div>
				<?php } ?>

			</div>
			<?php } ?>

		</li>
	<?php if ($_recent_topics_val['S_LAST_ROW']) {  ?>

	</ul>
	<?php } }} else { ?>

	<ul>
		<li><?php echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); ?></li>
	</ul>
<?php } ?>

</div>

<?php if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IS_BOT']) {  ?>

<div class="block">
	<?php if ($this->_rootref['S_LOAD_UNREADS'] || $this->_rootref['S_USER_LOGGED_IN']) {  ?>

	<p>
		<?php if ($this->_rootref['S_LOAD_UNREADS']) {  ?><a href="<?php echo (isset($this->_rootref['U_SEARCH_UNREAD'])) ? $this->_rootref['U_SEARCH_UNREAD'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_UNREAD'])) ? $this->_rootref['L_SEARCH_UNREAD'] : ((isset($user->lang['SEARCH_UNREAD'])) ? $user->lang['SEARCH_UNREAD'] : '{ SEARCH_UNREAD }')); ?></a><?php } if ($this->_rootref['S_USER_LOGGED_IN']) {  ?> &bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_NEW'])) ? $this->_rootref['U_SEARCH_NEW'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_NEW'])) ? $this->_rootref['L_SEARCH_NEW'] : ((isset($user->lang['SEARCH_NEW'])) ? $user->lang['SEARCH_NEW'] : '{ SEARCH_NEW }')); ?></a><?php } ?> 
	</p>
	<?php } ?> 
	<p>
		<a href="<?php echo (isset($this->_rootref['U_SEARCH_UNANSWERED'])) ? $this->_rootref['U_SEARCH_UNANSWERED'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_UNANSWERED'])) ? $this->_rootref['L_SEARCH_UNANSWERED'] : ((isset($user->lang['SEARCH_UNANSWERED'])) ? $user->lang['SEARCH_UNANSWERED'] : '{ SEARCH_UNANSWERED }')); ?></a>
		&bull; <a href="<?php echo (isset($this->_rootref['U_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['U_SEARCH_ACTIVE_TOPICS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['L_SEARCH_ACTIVE_TOPICS'] : ((isset($user->lang['SEARCH_ACTIVE_TOPICS'])) ? $user->lang['SEARCH_ACTIVE_TOPICS'] : '{ SEARCH_ACTIVE_TOPICS }')); ?></a>
	</p>
</div>
<?php } if ($this->_rootref['ADS_INDEX_CODE'] && ! $this->_rootref['S_IS_BOT']) {  ?>

<!-- <div class="block advertisement index"><?php echo (isset($this->_rootref['ADS_INDEX_CODE'])) ? $this->_rootref['ADS_INDEX_CODE'] : ''; ?></div> -->
<?php } ?>