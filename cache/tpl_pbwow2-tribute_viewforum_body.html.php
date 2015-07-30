<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); if ($this->_rootref['S_HAS_SUBFORUM']) {  $this->_tpl_include('forumlist_body.html'); } if ($this->_rootref['S_NO_READ_ACCESS']) {  ?>

	<div class="panel" id="message" <?php if ($this->_rootref['S_HAS_SUBFORUM']) {  ?>style="clear: both;"<?php } ?>>
		<div class="inner"><span class="corners-top"><span></span></span>
		<h2><?php echo ((isset($this->_rootref['L_FORUM_PERMISSIONS'])) ? $this->_rootref['L_FORUM_PERMISSIONS'] : ((isset($user->lang['FORUM_PERMISSIONS'])) ? $user->lang['FORUM_PERMISSIONS'] : '{ FORUM_PERMISSIONS }')); ?></h2>
		<p class="error"><?php echo ((isset($this->_rootref['L_NO_READ_ACCESS'])) ? $this->_rootref['L_NO_READ_ACCESS'] : ((isset($user->lang['NO_READ_ACCESS'])) ? $user->lang['NO_READ_ACCESS'] : '{ NO_READ_ACCESS }')); ?></p>
		<span class="corners-bottom"><span></span></span></div>
	</div>

	<?php if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>


		<form action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" method="post">

		<div class="panel">
			<div class="inner"><span class="corners-top"><span></span></span>

			<div class="content">
				<h3><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a><?php if ($this->_rootref['S_REGISTER_ENABLED']) {  ?>&nbsp; &bull; &nbsp;<a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a><?php } ?></h3>

				<fieldset class="fields1">
				<dl>
					<dt><label for="username"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</label></dt>
					<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" class="inputbox autowidth" /></dd>
				</dl>
				<dl>
					<dt><label for="password"><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>:</label></dt>
					<dd><input type="password" tabindex="2" id="password" name="password" size="25" class="inputbox autowidth" /></dd>
					<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?><dd><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="3" /> <?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?></label></dd><?php } ?>

					<dd><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="4" /> <?php echo ((isset($this->_rootref['L_HIDE_ME'])) ? $this->_rootref['L_HIDE_ME'] : ((isset($user->lang['HIDE_ME'])) ? $user->lang['HIDE_ME'] : '{ HIDE_ME }')); ?></label></dd>
				</dl>
				<dl>
					<dt>&nbsp;</dt>
					<dd><input type="submit" name="login" tabindex="5" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" class="button1" /></dd>
				</dl>
				<?php echo (isset($this->_rootref['S_LOGIN_REDIRECT'])) ? $this->_rootref['S_LOGIN_REDIRECT'] : ''; ?>

				</fieldset>
			</div>

			<span class="corners-bottom"><span></span></span></div>
		</div>

		</form>

	<?php } } if ($this->_rootref['S_FORUM_RULES']) {  ?>

<div class="wow-topics rule-block">
	<div class="innerborder1">
		<div class="innerborder2">
			<div class="innerbg1">
				<div class="innerbg2">
					<div class="rules">
						<?php if ($this->_rootref['U_FORUM_RULES']) {  ?>

						<a class="ui-button3" href="<?php echo (isset($this->_rootref['U_FORUM_RULES'])) ? $this->_rootref['U_FORUM_RULES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></a>
						<?php } else { ?>

						<dl>
							<dt><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></dt>
							<dd><?php echo (isset($this->_rootref['FORUM_RULES'])) ? $this->_rootref['FORUM_RULES'] : ''; ?></dd>
						</dl>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } if (sizeof($this->_tpldata['topicrow'])) {  ?>

<div class="wow-topics">
	<div class="innerborder1">
		<div class="innerborder2">
			<div class="innerbg1">
				<div class="innerbg2">
<?php } $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; if (! $_topicrow_val['S_TOPIC_TYPE_SWITCH'] && ! $_topicrow_val['S_FIRST_ROW']) {  ?>

			</ul>
		</div>
	</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wow-topics">
	<div class="innerborder1">
		<div class="innerborder2">
			<div class="innerbg1">
				<div class="innerbg2">
	<?php } if ($_topicrow_val['S_FIRST_ROW'] || ! $_topicrow_val['S_TOPIC_TYPE_SWITCH']) {  ?>

		<div class="forumbg<?php if ($_topicrow_val['S_TOPIC_TYPE_SWITCH'] && ( $_topicrow_val['S_POST_ANNOUNCE'] || $_topicrow_val['S_POST_GLOBAL'] )) {  ?> announcement<?php } ?>">
		<div class="inner">
		<ul class="topiclist">
			<li class="header">
				<dl class="icon">
					<dt><?php if ($this->_rootref['S_DISPLAY_ACTIVE']) {  echo ((isset($this->_rootref['L_ACTIVE_TOPICS'])) ? $this->_rootref['L_ACTIVE_TOPICS'] : ((isset($user->lang['ACTIVE_TOPICS'])) ? $user->lang['ACTIVE_TOPICS'] : '{ ACTIVE_TOPICS }')); } else if ($_topicrow_val['S_TOPIC_TYPE_SWITCH'] && ( $_topicrow_val['S_POST_ANNOUNCE'] || $_topicrow_val['S_POST_GLOBAL'] )) {  echo ((isset($this->_rootref['L_ANNOUNCEMENTS'])) ? $this->_rootref['L_ANNOUNCEMENTS'] : ((isset($user->lang['ANNOUNCEMENTS'])) ? $user->lang['ANNOUNCEMENTS'] : '{ ANNOUNCEMENTS }')); } else { echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); } ?></dt>
					<dd class="posts"><?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?></dd>
					<dd class="views"><?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?></dd>
					<dd class="lastpost"><span><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></span></dd>
				</dl>
			</li>
		</ul>
		<ul class="topiclist topics">
	<?php } ?>


		<li class="row<?php if (!($_topicrow_val['S_ROW_COUNT'] & 1)  ) {  ?> bg1<?php } else { ?> bg2<?php } if ($_topicrow_val['S_POST_GLOBAL']) {  ?> global-announce<?php } if ($_topicrow_val['S_POST_ANNOUNCE']) {  ?> announce<?php } if ($_topicrow_val['S_POST_STICKY']) {  ?> sticky<?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?> reported<?php } ?>">
			<dl class="icon" style="background-image: url(<?php echo $_topicrow_val['TOPIC_FOLDER_IMG_SRC']; ?>); background-repeat: no-repeat;">
				<dt<?php if ($_topicrow_val['TOPIC_ICON_IMG'] && $this->_rootref['S_TOPIC_ICONS']) {  ?> style="background-image: url(<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_topicrow_val['TOPIC_ICON_IMG']; ?>); background-repeat: no-repeat;"<?php } ?> id="t<?php echo $_topicrow_val['TOPIC_ID']; ?>" title="<?php if ($_topicrow_val['TOPIC_PREVIEW_TEXT']) {  echo $_topicrow_val['TOPIC_PREVIEW_TEXT']; } else { echo $_topicrow_val['TOPIC_FOLDER_IMG_ALT']; } ?>">
					<?php if ($_topicrow_val['S_HAS_POLL']) {  ?><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/icons/poll.gif" style="margin-right:5px; vertical-align: bottom;" /><?php } if ($_topicrow_val['S_UNREAD_TOPIC']) {  ?><a href="<?php echo $_topicrow_val['U_NEWEST_POST']; ?>"><?php echo (isset($this->_rootref['NEWEST_POST_IMG'])) ? $this->_rootref['NEWEST_POST_IMG'] : ''; ?></a> <?php } ?><a href="<?php echo $_topicrow_val['U_VIEW_TOPIC']; ?>" class="topictitle"><?php echo $_topicrow_val['TOPIC_TITLE']; ?></a>
					<?php if ($_topicrow_val['S_TOPIC_UNAPPROVED'] || $_topicrow_val['S_POSTS_UNAPPROVED']) {  ?><a href="<?php echo $_topicrow_val['U_MCP_QUEUE']; ?>"><?php echo $_topicrow_val['UNAPPROVED_IMG']; ?></a> <?php } if ($_topicrow_val['S_TOPIC_REPORTED']) {  ?><a href="<?php echo $_topicrow_val['U_MCP_REPORT']; ?>"><?php echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?></a><?php } ?><br />
					<?php if ($_topicrow_val['PAGINATION']) {  ?><strong class="pagination"><span><?php echo $_topicrow_val['PAGINATION']; ?></span></strong><?php } if ($_topicrow_val['ATTACH_ICON_IMG']) {  echo $_topicrow_val['ATTACH_ICON_IMG']; ?> <?php } echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_topicrow_val['TOPIC_AUTHOR_FULL']; ?> &raquo; <?php echo $_topicrow_val['FIRST_POST_TIME']; ?>

				</dt>
				<dd class="posts"><?php echo $_topicrow_val['REPLIES']; ?> <dfn><?php echo ((isset($this->_rootref['L_REPLIES'])) ? $this->_rootref['L_REPLIES'] : ((isset($user->lang['REPLIES'])) ? $user->lang['REPLIES'] : '{ REPLIES }')); ?></dfn></dd>
				<dd class="views"><?php echo $_topicrow_val['VIEWS']; ?> <dfn><?php echo ((isset($this->_rootref['L_VIEWS'])) ? $this->_rootref['L_VIEWS'] : ((isset($user->lang['VIEWS'])) ? $user->lang['VIEWS'] : '{ VIEWS }')); ?></dfn></dd>
				<dd class="lastpost"><span><dfn><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?> </dfn><?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_topicrow_val['LAST_POST_AUTHOR_FULL']; ?>

					<?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_topicrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a> <?php } ?><br /><?php echo $_topicrow_val['LAST_POST_TIME']; ?></span>
				</dd>
			</dl>
			<?php if ($_topicrow_val['TOPIC_PREVIEW_TEXT'] && $this->_rootref['S_JQUERY_TOPIC_PREVIEW']) {  ?>

			<div id="topic_preview_t<?php echo $_topicrow_val['TOPIC_ID']; ?>" style="display:none;">
				<?php if ($_topicrow_val['TOPIC_PREVIEW_TEXT2']) {  ?><strong><?php echo ((isset($this->_rootref['L_FIRST_POST'])) ? $this->_rootref['L_FIRST_POST'] : ((isset($user->lang['FIRST_POST'])) ? $user->lang['FIRST_POST'] : '{ FIRST_POST }')); ?></strong><hr /><?php } if ($_topicrow_val['TOPIC_PREVIEW_AVATAR']) {  ?><div class="topic_preview_avatar"><?php echo $_topicrow_val['TOPIC_PREVIEW_AVATAR']; ?></div><?php } else if ($_topicrow_val['TOPIC_PREVIEW_PBAVATAR']) {  ?><div class="topic_preview_avatar"><img src="<?php if ($_topicrow_val['S_TOPIC_PREVIEW_PBBNET']) {  echo $_topicrow_val['TOPIC_PREVIEW_PBAVATAR']; } else { echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/portraits/<?php echo $_topicrow_val['TOPIC_PREVIEW_PBAVATAR']; } ?>" width="64" height="64" alt="<?php echo $_topicrow_val['TOPIC_AUTHOR']; ?>" /></div><?php } ?>

				<div class="topic_preview_text_first"<?php if ($_topicrow_val['TOPIC_PREVIEW_COLOUR']) {  ?> style="color:<?php echo $_topicrow_val['TOPIC_PREVIEW_COLOUR']; ?>"<?php } ?>></div>
				<?php if ($_topicrow_val['TOPIC_PREVIEW_TEXT2']) {  ?>

					<div class="topic_preview_break"></div>
					<strong><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></strong><hr />
					<?php if ($_topicrow_val['TOPIC_PREVIEW_AVATAR2']) {  ?><div class="topic_preview_avatar"><?php echo $_topicrow_val['TOPIC_PREVIEW_AVATAR2']; ?></div><?php } else if ($_topicrow_val['TOPIC_PREVIEW_PBAVATAR2']) {  ?><div class="topic_preview_avatar"><img src="<?php if ($_topicrow_val['S_TOPIC_PREVIEW_PBBNET2']) {  echo $_topicrow_val['TOPIC_PREVIEW_PBAVATAR2']; } else { echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/portraits/<?php echo $_topicrow_val['TOPIC_PREVIEW_PBAVATAR2']; } ?>" width="64" height="64" alt="<?php echo $_topicrow_val['LAST_POST_AUTHOR']; ?>" /></div><?php } ?>

					<div class="topic_preview_text_last"<?php if ($_topicrow_val['TOPIC_PREVIEW_COLOUR2']) {  ?> style="color:<?php echo $_topicrow_val['TOPIC_PREVIEW_COLOUR2']; ?>"<?php } ?>><?php echo $_topicrow_val['TOPIC_PREVIEW_TEXT2']; ?></div>
				<?php } ?>

			</div>
			<?php } ?>

		</li>

	<?php if ($_topicrow_val['S_LAST_ROW']) {  ?>

			</ul>
		</div>
	</div>
	<?php } }} else { if ($this->_rootref['S_IS_POSTABLE']) {  ?>

	<div class="wow-topics">
		<div class="innerborder1">
			<div class="innerborder2">
				<div class="innerbg1">
					<div class="innerbg2">
						<div class="panel">
							<div class="inner">
								<p class="rules"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/icons/error-tiny.gif" /><?php echo ((isset($this->_rootref['L_NO_TOPICS'])) ? $this->_rootref['L_NO_TOPICS'] : ((isset($user->lang['NO_TOPICS'])) ? $user->lang['NO_TOPICS'] : '{ NO_TOPICS }')); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } } if (sizeof($this->_tpldata['topicrow'])) {  ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php } if (( sizeof($this->_tpldata['topicrow']) && ! $this->_rootref['S_DISPLAY_ACTIVE'] ) || ( ! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_POST_INFO'] )) {  ?>

<div class="topic-actions">
	<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_POST_INFO']) {  ?>

	<a class="ui-button1 <?php if ($this->_rootref['S_IS_LOCKED']) {  ?>locked-icon<?php } else { ?>post-icon<?php } ?>" href="<?php echo (isset($this->_rootref['U_POST_NEW_TOPIC'])) ? $this->_rootref['U_POST_NEW_TOPIC'] : ''; ?>"><?php if ($this->_rootref['S_IS_LOCKED']) {  echo ((isset($this->_rootref['L_FORUM_LOCKED'])) ? $this->_rootref['L_FORUM_LOCKED'] : ((isset($user->lang['FORUM_LOCKED'])) ? $user->lang['FORUM_LOCKED'] : '{ FORUM_LOCKED }')); } else { echo ((isset($this->_rootref['L_POST_NEW_TOPIC'])) ? $this->_rootref['L_POST_NEW_TOPIC'] : ((isset($user->lang['POST_NEW_TOPIC'])) ? $user->lang['POST_NEW_TOPIC'] : '{ POST_NEW_TOPIC }')); } ?></a>
	<?php } if (sizeof($this->_tpldata['topicrow']) && ( $this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS'] || $this->_rootref['TOTAL_TOPICS'] )) {  ?>

	<div class="pagination">
		<?php if ($this->_rootref['PREVIOUS_PAGE']) {  ?><a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>" class="left-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a>  &bull;  <?php } if ($this->_rootref['PAGINATION']) {  ?><a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a>
		 &bull;  <span><?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; ?></span><?php } else { echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; } if ($this->_rootref['NEXT_PAGE']) {  ?><a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>" class="right-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a><?php } ?>

	</div>
	<?php } ?>

</div>
<?php } ?>


<div class="clear"></div>

<div class="inner-footer" id="viewforum-tools">
	<h2 class="open"></h2>
	<div>
	<div class="left"><div><div class="inner">
		<?php if ($this->_rootref['MODERATORS']) {  ?><h3><?php if ($this->_rootref['S_SINGLE_MODERATOR']) {  echo ((isset($this->_rootref['L_MODERATOR'])) ? $this->_rootref['L_MODERATOR'] : ((isset($user->lang['MODERATOR'])) ? $user->lang['MODERATOR'] : '{ MODERATOR }')); } else { echo ((isset($this->_rootref['L_MODERATORS'])) ? $this->_rootref['L_MODERATORS'] : ((isset($user->lang['MODERATORS'])) ? $user->lang['MODERATORS'] : '{ MODERATORS }')); } if ($this->_rootref['U_MCP']) {  ?>  &raquo;  [&nbsp;<a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></a>&nbsp;]<?php } ?></h3>
		<p><?php echo (isset($this->_rootref['MODERATORS'])) ? $this->_rootref['MODERATORS'] : ''; ?></p><?php } if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>

		<h3><?php if ($this->_rootref['U_VIEWONLINE']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></a><?php } else { echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); } ?></h3>
		<p><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?></p>
		<?php } if ($this->_rootref['S_DISPLAY_POST_INFO']) {  ?>

		<h3><?php echo ((isset($this->_rootref['L_FORUM_PERMISSIONS'])) ? $this->_rootref['L_FORUM_PERMISSIONS'] : ((isset($user->lang['FORUM_PERMISSIONS'])) ? $user->lang['FORUM_PERMISSIONS'] : '{ FORUM_PERMISSIONS }')); ?></h3>
		<p><?php $_rules_count = (isset($this->_tpldata['rules'])) ? sizeof($this->_tpldata['rules']) : 0;if ($_rules_count) {for ($_rules_i = 0; $_rules_i < $_rules_count; ++$_rules_i){$_rules_val = &$this->_tpldata['rules'][$_rules_i]; echo $_rules_val['RULE']; ?><br /><?php }} ?></p>
		<?php } if (! $this->_rootref['S_DISPLAY_POST_INFO'] && ! $this->_rootref['MODERATORS']) {  ?>

		<hr />
		<?php $this->_tpl_include('jumpbox2.html'); if ($this->_rootref['S_DISPLAY_JUMPBOX']) {  ?><p><a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>" class="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" accesskey="r"><?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?> <?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a></p><?php } } ?>

	</div></div></div>
	<div class="right"><div><div class="inner">
		<p>
		<?php if ($this->_rootref['TOTAL_TOPICS'] && ! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_TOPICS']) {  ?><a href="<?php echo (isset($this->_rootref['U_MARK_TOPICS'])) ? $this->_rootref['U_MARK_TOPICS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MARK_TOPICS_READ'])) ? $this->_rootref['L_MARK_TOPICS_READ'] : ((isset($user->lang['MARK_TOPICS_READ'])) ? $user->lang['MARK_TOPICS_READ'] : '{ MARK_TOPICS_READ }')); ?></a> &bull;  <?php } if ($this->_rootref['TOTAL_POSTS'] && ! $this->_rootref['NEWEST_USER']) {  ?> <?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; } else if ($this->_rootref['TOTAL_TOPICS'] && ! $this->_rootref['NEWEST_USER']) {  ?> <?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; } if ($this->_rootref['TOTAL_USERS']) {  echo (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : ''; } ?></p>
		
		<?php if ($this->_rootref['S_SELECT_SORT_DAYS'] && ! $this->_rootref['S_DISPLAY_ACTIVE']) {  ?>

		<hr />
		<form method="post" action="<?php echo (isset($this->_rootref['S_FORUM_ACTION'])) ? $this->_rootref['S_FORUM_ACTION'] : ''; ?>">
			<fieldset class="display-options">
			<?php if (! $this->_rootref['S_IS_BOT']) {  ?>

				<label><?php echo ((isset($this->_rootref['L_DISPLAY_TOPICS'])) ? $this->_rootref['L_DISPLAY_TOPICS'] : ((isset($user->lang['DISPLAY_TOPICS'])) ? $user->lang['DISPLAY_TOPICS'] : '{ DISPLAY_TOPICS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?></label><br />
				<label><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?></label>
				<label><?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?> <input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="button2" /></label>
			<?php } ?>

			</fieldset>
		</form>
		<?php } if ($this->_rootref['S_DISPLAY_POST_INFO'] || $this->_rootref['MODERATORS']) {  if ($this->_rootref['S_DISPLAY_JUMPBOX']) {  ?><hr />
			<?php $this->_tpl_include('jumpbox2.html'); ?>

			<p><a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>" class="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" accesskey="r"><?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?> <?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a></p>
		<?php } } ?>

	</div></div></div>
	</div>
</div>

<div class="clear"></div>

<?php $this->_tpl_include('overall_footer.html'); ?>