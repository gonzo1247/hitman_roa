<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<div class="clear"></div>

<?php if ($this->_rootref['S_FORUM_RULES']) {  ?>

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
<?php } if ($this->_rootref['S_HAS_POLL']) {  ?>

<form method="post" action="<?php echo (isset($this->_rootref['S_POLL_ACTION'])) ? $this->_rootref['S_POLL_ACTION'] : ''; ?>">
<div class="poll bg2">
	<div class="innerborder1">
		<div class="innerborder2">
			<div class="innerbg1">
				<div class="innerbg2">
					<div class="wow-poll-frame1">
						<div class="wow-poll-frame2">
							<div class="wow-poll-frame3">

	<div class="inner">
		<div class="content">
		
			<?php if ($this->_rootref['S_CAN_VOTE'] || $this->_rootref['L_POLL_LENGTH']) {  ?>

			<div class="wow-poll-author1">
				<div class="wow-poll-author2">
					<div class="wow-poll-author3">
						<p class="author"><?php if ($this->_rootref['L_POLL_LENGTH']) {  echo ((isset($this->_rootref['L_TIME'])) ? $this->_rootref['L_TIME'] : ((isset($user->lang['TIME'])) ? $user->lang['TIME'] : '{ TIME }')); ?>:<span> <?php echo ((isset($this->_rootref['L_POLL_LENGTH'])) ? $this->_rootref['L_POLL_LENGTH'] : ((isset($user->lang['POLL_LENGTH'])) ? $user->lang['POLL_LENGTH'] : '{ POLL_LENGTH }')); ?></span><?php } if ($this->_rootref['S_CAN_VOTE'] && $this->_rootref['L_POLL_LENGTH']) {  ?> | <?php } if ($this->_rootref['S_CAN_VOTE']) {  echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?>: <span><?php echo ((isset($this->_rootref['L_MAX_VOTES'])) ? $this->_rootref['L_MAX_VOTES'] : ((isset($user->lang['MAX_VOTES'])) ? $user->lang['MAX_VOTES'] : '{ MAX_VOTES }')); ?></span><?php } ?></p>
						
					</div>
				</div>
			</div>
			<?php } else { ?>

			<br />
			<?php } ?>

		
			<h2><img src="<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/icons/<?php if ($this->_rootref['S_CAN_VOTE'] && $this->_rootref['L_POLL_LENGTH']) {  ?>poll-end.gif<?php } else if ($this->_rootref['S_CAN_VOTE']) {  ?>poll-open.gif<?php } else { ?>poll-private.gif<?php } ?>" alt="" style="position: absolute;"/><span><?php echo ((isset($this->_rootref['L_VIEW_TOPIC_POLL'])) ? $this->_rootref['L_VIEW_TOPIC_POLL'] : ((isset($user->lang['VIEW_TOPIC_POLL'])) ? $user->lang['VIEW_TOPIC_POLL'] : '{ VIEW_TOPIC_POLL }')); ?></span>&quot;<?php echo (isset($this->_rootref['POLL_QUESTION'])) ? $this->_rootref['POLL_QUESTION'] : ''; ?>&quot;</h2>
			

			<div class="wow-poll-box1">
				<div class="wow-poll-box2">
					<div class="wow-poll-box3">

			<fieldset class="polls">
			<?php $_poll_option_count = (isset($this->_tpldata['poll_option'])) ? sizeof($this->_tpldata['poll_option']) : 0;if ($_poll_option_count) {for ($_poll_option_i = 0; $_poll_option_i < $_poll_option_count; ++$_poll_option_i){$_poll_option_val = &$this->_tpldata['poll_option'][$_poll_option_i]; ?>

				<dl class="<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?>voted<?php } ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> title="<?php echo ((isset($this->_rootref['L_POLL_VOTED_OPTION'])) ? $this->_rootref['L_POLL_VOTED_OPTION'] : ((isset($user->lang['POLL_VOTED_OPTION'])) ? $user->lang['POLL_VOTED_OPTION'] : '{ POLL_VOTED_OPTION }')); ?>"<?php } ?>>
					<dt><?php if ($this->_rootref['S_CAN_VOTE']) {  ?><label for="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"><?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?></label><?php } else { ?><span><?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?></span><?php } if ($this->_rootref['S_CAN_VOTE']) {  if ($this->_rootref['S_IS_MULTI_CHOICE']) {  ?><input type="checkbox" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> /><?php } else { ?><input type="radio" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> /><?php } ?></dt><?php } if ($this->_rootref['S_DISPLAY_RESULTS']) {  ?><dd class="resultbar"><div class="resultbar-restrict"><div class="pollbar" style="width:<?php echo $_poll_option_val['POLL_OPTION_PERCENT']; ?>;"><div><?php echo $_poll_option_val['POLL_OPTION_PERCENT']; ?></div></div></div><span><?php echo $_poll_option_val['POLL_OPTION_RESULT']; ?></span></dd><?php } ?>

				</dl>
			<?php }} if ($this->_rootref['S_DISPLAY_RESULTS']) {  ?><div class="wow-poll-totals"><?php echo ((isset($this->_rootref['L_TOTAL_VOTES'])) ? $this->_rootref['L_TOTAL_VOTES'] : ((isset($user->lang['TOTAL_VOTES'])) ? $user->lang['TOTAL_VOTES'] : '{ TOTAL_VOTES }')); ?> : <?php echo (isset($this->_rootref['TOTAL_VOTES'])) ? $this->_rootref['TOTAL_VOTES'] : ''; ?></div><?php } ?>


			<div class="wow-poll-footer">
				<?php if (! $this->_rootref['S_DISPLAY_RESULTS']) {  ?>

				<a href="<?php echo (isset($this->_rootref['U_VIEW_RESULTS'])) ? $this->_rootref['U_VIEW_RESULTS'] : ''; ?>" class="ui-button2 poll-results"><?php echo ((isset($this->_rootref['L_VIEW_RESULTS'])) ? $this->_rootref['L_VIEW_RESULTS'] : ((isset($user->lang['VIEW_RESULTS'])) ? $user->lang['VIEW_RESULTS'] : '{ VIEW_RESULTS }')); ?></a>
				<?php } else { ?>

				<a class="ui-button2 poll-results inactive"><?php echo ((isset($this->_rootref['L_VIEW_RESULTS'])) ? $this->_rootref['L_VIEW_RESULTS'] : ((isset($user->lang['VIEW_RESULTS'])) ? $user->lang['VIEW_RESULTS'] : '{ VIEW_RESULTS }')); ?></a>
				<?php } if ($this->_rootref['S_CAN_VOTE']) {  ?>

				<a class="ui-button2 poll-vote"><input type="submit" name="update" value="<?php echo ((isset($this->_rootref['L_SUBMIT_VOTE'])) ? $this->_rootref['L_SUBMIT_VOTE'] : ((isset($user->lang['SUBMIT_VOTE'])) ? $user->lang['SUBMIT_VOTE'] : '{ SUBMIT_VOTE }')); ?>" class="vote" /></a>
				<?php } else { ?>

				<a class="ui-button2 poll-vote inactive"><?php echo ((isset($this->_rootref['L_SUBMIT_VOTE'])) ? $this->_rootref['L_SUBMIT_VOTE'] : ((isset($user->lang['SUBMIT_VOTE'])) ? $user->lang['SUBMIT_VOTE'] : '{ SUBMIT_VOTE }')); ?></a>
				<?php } ?>

			</div>
			</fieldset>

					</div>
				</div>
			</div>

		</div>
	</div>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>

<?php } $_postrow_count = (isset($this->_tpldata['postrow'])) ? sizeof($this->_tpldata['postrow']) : 0;if ($_postrow_count) {for ($_postrow_i = 0; $_postrow_i < $_postrow_count; ++$_postrow_i){$_postrow_val = &$this->_tpldata['postrow'][$_postrow_i]; if ($_postrow_val['S_FIRST_UNREAD']) {  ?><a id="unread"></a><?php } ?>

	    <div id="p<?php echo $_postrow_val['POST_ID']; ?>" class="post <?php if (($_postrow_val['S_ROW_COUNT'] & 1)  ) {  ?>bg1<?php } else { ?>bg2<?php } if ($_postrow_val['S_UNREAD_POST']) {  ?> unreadpost<?php } if ($_postrow_val['S_POST_REPORTED']) {  ?> reported<?php } if ($_postrow_val['USER_SPECIAL_STYLING']) {  ?> <?php echo $_postrow_val['USER_SPECIAL_STYLING']; } ?>">
			<div class="innerborder1">
				<div class="innerborder2">
					<div class="innerbg1">
						<div class="innerbg2">
							<div class="inner">

	<?php if (! $_postrow_val['S_IGNORE_POST']) {  ?>

		<div class="postprofile<?php if ($_postrow_val['S_ONLINE'] && ! $_postrow_val['S_IGNORE_POST']) {  ?> online<?php } if ($_postrow_val['POSTER_WARNINGS'] > 0 && $_postrow_val['U_WARN']) {  ?> warned<?php } ?>" id="profile<?php echo $_postrow_val['POST_ID']; ?>">
			<div class="wow-profile">
			<?php if ($_postrow_val['POSTER_AVATAR_SRC'] || $_postrow_val['S_PROFILE_PBAVATAR'] || $_postrow_val['S_PROFILE_PBBNETAVATAR']) {  if ($_postrow_val['POSTER_AVATAR_SRC']) {  ?>

				<div class="game-avatar" style="background-image: url('<?php echo $_postrow_val['POSTER_AVATAR_SRC']; ?>');">
				<?php } else if ($_postrow_val['S_PROFILE_PBBNETAVATAR']) {  ?>

				<div class="game-avatar" style="background-image: url('<?php echo $_postrow_val['PROFILE_PBBNETAVATAR_VALUEID']; ?>');">
				<?php } else { ?>

				<div class="game-avatar" style="background-image: url('<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/portraits/<?php echo $_postrow_val['PROFILE_PBAVATAR_VALUE']; ?>');">
				<?php } ?>

					<div class="game-avatar-frame">
						<?php if ($_postrow_val['U_POST_AUTHOR']) {  ?><a id="a<?php echo $_postrow_val['POST_ID']; ?>" class="context-avatar" href="<?php echo $_postrow_val['U_POST_AUTHOR']; ?>"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/pixel.gif" title="<?php echo $_postrow_val['POST_AUTHOR']; ?>" alt="<?php echo $_postrow_val['POST_AUTHOR']; ?>" /></a><?php } ?>

						<div class="game-rank-icon">
							<?php if ($_postrow_val['RANK_IMG'] && ( ( $_postrow_val['POSTS_RANK_TITLE'] != $_postrow_val['RANK_TITLE'] ) || ( ! $_postrow_val['S_PROFILE_PBRACE'] && ! $_postrow_val['S_PROFILE_PBDCLASS'] && ! $_postrow_val['S_PROFILE_PBWSRACE'] ) )) {  ?>

							<?php echo $_postrow_val['RANK_IMG']; ?>

							<?php } else if ($_postrow_val['S_PROFILE_PBLEVEL'] && $_postrow_val['PROFILE_PBLEVEL_VALUE'] != 0) {  ?>

							<b><small><?php echo $_postrow_val['PROFILE_PBLEVEL_VALUE']; ?></small></b>
							<?php } else { ?>

							<div class="norank"></div>
							<?php } ?>

						</div>

						<?php if ($_postrow_val['S_PROFILE_PBRACE'] || $_postrow_val['S_PROFILE_PBDCLASS'] || $_postrow_val['S_PROFILE_PBWSRACE']) {  ?>

						<div class="game-icons-frame">

							<?php if ($_postrow_val['PROFILE_PBRACE_VALUEID']) {  ?>

							<div class="game-icons-a wow-<?php echo $_postrow_val['PROFILE_PBRACE_VALUEID']; if ($_postrow_val['S_PROFILE_PBGENDER'] && $_postrow_val['PROFILE_PBGENDER_VALUEID'] > (1)) {  ?> female<?php } ?>"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/pixel.gif" title="<?php echo $_postrow_val['PROFILE_PBRACE_VALUE']; ?>" alt="<?php echo $_postrow_val['PROFILE_PBRACE_VALUE']; ?>" /></div>
							<?php } else if ($_postrow_val['PROFILE_PBDCLASS_VALUEID']) {  ?>

							<div class="game-icons-a diablo-<?php echo $_postrow_val['PROFILE_PBDCLASS_VALUEID']; if ($_postrow_val['S_PROFILE_PBDGENDER'] && $_postrow_val['PROFILE_PBDGENDER_VALUEID'] > (1)) {  ?> female<?php } ?>"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/pixel.gif" title="<?php echo $_postrow_val['PROFILE_PBDCLASS_VALUE']; ?>" alt="<?php echo $_postrow_val['PROFILE_PBDCLASS_VALUE']; ?>" /></div>							
							<?php } else if ($_postrow_val['PROFILE_PBWSRACE_VALUEID']) {  ?>

							<div class="game-icons-a wildstar-<?php echo $_postrow_val['PROFILE_PBWSRACE_VALUEID']; if ($_postrow_val['S_PROFILE_PBWSGENDER'] && $_postrow_val['PROFILE_PBWSGENDER_VALUEID'] > (1)) {  ?> female<?php } ?>"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/pixel.gif" title="<?php echo $_postrow_val['PROFILE_PBWSRACE_VALUE']; ?>" alt="<?php echo $_postrow_val['PROFILE_PBWSRACE_VALUE']; ?>" /></div>							
							<?php } if ($_postrow_val['PROFILE_PBCLASS_VALUEID']) {  ?>

							<div class="game-icons-b wow-<?php echo $_postrow_val['PROFILE_PBCLASS_VALUEID']; ?>"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/pixel.gif" title="<?php echo $_postrow_val['PROFILE_PBCLASS_VALUE']; ?>" alt="<?php echo $_postrow_val['PROFILE_PBCLASS_VALUE']; ?>" /></div>
							<?php } else if ($_postrow_val['PROFILE_PBDFOLLOWER_VALUEID']) {  ?>

							<div class="game-icons-b diablo-<?php echo $_postrow_val['PROFILE_PBDFOLLOWER_VALUEID']; ?>"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/pixel.gif" title="<?php echo $_postrow_val['PROFILE_PBDFOLLOWER_VALUE']; ?>" alt="<?php echo $_postrow_val['PROFILE_PBDFOLLOWER_VALUE']; ?>" /></div>
							<?php } else if ($_postrow_val['PROFILE_PBWSCLASS_VALUEID']) {  ?>

							<div class="game-icons-b wildstar-<?php echo $_postrow_val['PROFILE_PBWSCLASS_VALUEID']; ?>"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/pixel.gif" title="<?php echo $_postrow_val['PROFILE_PBWSCLASS_VALUE']; ?>" alt="<?php echo $_postrow_val['PROFILE_PBWSCLASS_VALUE']; ?>" /></div>
							<?php } if ($_postrow_val['POSTS_RANK_IMG']) {  ?>

							<div class="game-icons-c" style="background-image: url('<?php echo $_postrow_val['POSTS_RANK_IMG_SRC']; ?>');"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/pixel.gif" alt="<?php echo $_postrow_val['POSTS_RANK_TITLE']; ?>" title="<?php echo $_postrow_val['POSTS_RANK_TITLE']; ?>" /></div>
							<?php } else if ($_postrow_val['PROFILE_PBRACE_VALUEID'] && $_postrow_val['S_PROFILE_PBFACTION']) {  ?>

							<div class="game-icons-c wow-<?php echo $_postrow_val['PROFILE_PBFACTION_VALUE']; ?>"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/pixel.gif" /></div>
							<?php } else if ($_postrow_val['PROFILE_PBWSRACE_VALUEID'] && $_postrow_val['S_PROFILE_PBFACTION']) {  ?>

							<div class="game-icons-c wildstar-<?php echo $_postrow_val['PROFILE_PBFACTION_VALUE']; ?>"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/pixel.gif" /></div>
							<?php } ?>


						</div>
						<?php } ?>


					</div>
				</div>
			<?php } else if ($_postrow_val['POSTER_AVATAR']) {  if ($_postrow_val['U_POST_AUTHOR']) {  ?><a href="<?php echo $_postrow_val['U_POST_AUTHOR']; ?>"><?php echo $_postrow_val['POSTER_AVATAR']; ?></a><?php } else { echo $_postrow_val['POSTER_AVATAR']; } } else { ?>

				<div class="game-noavatar">
					<?php if ($_postrow_val['U_POST_AUTHOR']) {  ?><a id="a<?php echo $_postrow_val['POST_ID']; ?>" class="context-avatar" href="<?php echo $_postrow_val['U_POST_AUTHOR']; ?>"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/pixel.gif" title="<?php echo $_postrow_val['POST_AUTHOR']; ?>" alt="<?php echo $_postrow_val['POST_AUTHOR']; ?>" /></a><?php } ?>

				</div>
			<?php } ?>

			</div>

			<div class="wow-info-frame">
				<dl>
					<dt class="author"><?php if ($_postrow_val['U_POST_AUTHOR']) {  ?>

					<a id="u<?php echo $_postrow_val['POST_ID']; ?>" class="context-link<?php if ($_postrow_val['POST_AUTHOR_COLOUR']) {  ?> username-coloured" style="color: <?php echo $_postrow_val['POST_AUTHOR_COLOUR']; } ?>" href="<?php echo $_postrow_val['U_POST_AUTHOR']; ?>"><?php echo $_postrow_val['POST_AUTHOR']; ?></a>
					<?php } else { ?><strong><?php echo $_postrow_val['POST_AUTHOR_FULL']; ?></strong><?php } ?></dt>
					<?php if ($_postrow_val['S_PROFILE_PBGUILD']) {  ?><dd class="guild">&lsaquo; <?php echo $_postrow_val['PROFILE_PBGUILD_VALUE']; ?> &rsaquo;</dd><?php } if ($_postrow_val['RANK_TITLE']) {  ?><dd class="special-rank"><?php echo $_postrow_val['RANK_TITLE']; ?></dd><?php } if ($_postrow_val['POSTS_RANK_TITLE'] != $_postrow_val['RANK_TITLE']) {  ?><dd class="rank"><?php echo $_postrow_val['POSTS_RANK_TITLE']; if ($_postrow_val['POSTS_RANK_TITLE'] && $_postrow_val['POSTS_RANK_IMG']) {  ?><br /><?php } echo $_postrow_val['POSTS_RANK_IMG']; ?></dd><?php } ?>

					<dd class="separator"></dd>
					<?php $_custom_fields_count = (isset($_postrow_val['custom_fields'])) ? sizeof($_postrow_val['custom_fields']) : 0;if ($_custom_fields_count) {for ($_custom_fields_i = 0; $_custom_fields_i < $_custom_fields_count; ++$_custom_fields_i){$_custom_fields_val = &$_postrow_val['custom_fields'][$_custom_fields_i]; ?><dd class="<?php echo $_custom_fields_val['PROFILE_FIELD_IDENT']; ?>"><strong><?php echo $_custom_fields_val['PROFILE_FIELD_NAME']; ?>:</strong> <?php echo $_custom_fields_val['PROFILE_FIELD_VALUE']; ?></dd><?php }} if ($_postrow_val['POSTER_POSTS'] != ('')) {  ?><dd class="numberposts"><strong><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>:</strong> <?php echo $_postrow_val['POSTER_POSTS']; ?></dd><?php } if ($_postrow_val['POSTER_JOINED']) {  ?><dd class="joined"><strong><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?>:</strong> <?php echo $_postrow_val['POSTER_JOINED']; ?></dd><?php } if ($_postrow_val['POSTER_FROM']) {  ?><dd class="from"><strong><?php echo ((isset($this->_rootref['L_LOCATION'])) ? $this->_rootref['L_LOCATION'] : ((isset($user->lang['LOCATION'])) ? $user->lang['LOCATION'] : '{ LOCATION }')); ?>:</strong> <?php echo $_postrow_val['POSTER_FROM']; ?></dd><?php } if ($_postrow_val['S_ONLINE']) {  ?><dd class="online"><?php echo ((isset($this->_rootref['L_ONLINE'])) ? $this->_rootref['L_ONLINE'] : ((isset($user->lang['ONLINE'])) ? $user->lang['ONLINE'] : '{ ONLINE }')); ?></dd><?php } if ($_postrow_val['S_PROFILE_FIELD1']) {  ?><dd><strong><?php echo $_postrow_val['PROFILE_FIELD1_NAME']; ?>:</strong> <?php echo $_postrow_val['PROFILE_FIELD1_VALUE']; ?></dd><?php } ?>

				</dl>
				
				<div class="wow-context" id="<?php echo $_postrow_val['POST_ID']; ?>-context">
				<?php if (! $this->_rootref['S_IS_BOT']) {  ?>

					<strong><?php echo $_postrow_val['POST_AUTHOR']; ?></strong>
					<!--<strong <?php if ($_postrow_val['POST_AUTHOR_COLOUR']) {  ?>style="color: <?php echo $_postrow_val['POST_AUTHOR_COLOUR']; ?>"<?php } ?>><?php if ($_postrow_val['SPECIAL_RANK_TITLE']) {  echo $_postrow_val['SPECIAL_RANK_TITLE']; } else { echo $_postrow_val['POST_AUTHOR']; } ?></strong>-->
					<div class="user-icons">
						<a class="icon-profile" href="<?php echo $_postrow_val['U_POST_AUTHOR']; ?>"><?php echo ((isset($this->_rootref['L_READ_PROFILE'])) ? $this->_rootref['L_READ_PROFILE'] : ((isset($user->lang['READ_PROFILE'])) ? $user->lang['READ_PROFILE'] : '{ READ_PROFILE }')); ?></a>
						<a class="icon-posts" href="<?php echo $_postrow_val['U_SEARCH']; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_USER_POSTS'])) ? $this->_rootref['L_SEARCH_USER_POSTS'] : ((isset($user->lang['SEARCH_USER_POSTS'])) ? $user->lang['SEARCH_USER_POSTS'] : '{ SEARCH_USER_POSTS }')); ?>"></a>
						<?php if ($_postrow_val['S_FRIEND']) {  ?><!--Friend! yay!--><?php } if ($this->_rootref['U_PROFILE']) {  ?><a class="icon-foe" href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>?i=zebra&mode=foes&add=<?php echo $_postrow_val['POST_AUTHOR']; ?>" title="Ignore user" accesskey="e"></a><?php } ?>

					</div>		
					<?php if ($_postrow_val['U_PM'] || $_postrow_val['U_EMAIL'] || $_postrow_val['U_WWW'] || $_postrow_val['U_MSN'] || $_postrow_val['U_ICQ'] || $_postrow_val['U_YIM'] || $_postrow_val['U_AIM'] || $_postrow_val['U_JABBER'] || $_postrow_val['U_BEBO_SN'] || $_postrow_val['U_BLOGGER_SN'] || $_postrow_val['U_FACEBOOK_SN'] || $_postrow_val['U_GOODREADS_SN'] || $_postrow_val['U_LINKEDIN_SN'] || $_postrow_val['U_MYSPACE_SN'] || $_postrow_val['U_NETLOG_SN'] || $_postrow_val['U_TWITTER_SN']) {  ?>

					<ul class="profile-icons">
						<?php if ($_postrow_val['U_PM']) {  ?><li class="pm-icon"><a href="<?php echo $_postrow_val['U_PM']; ?>" title="<?php echo ((isset($this->_rootref['L_PRIVATE_MESSAGE'])) ? $this->_rootref['L_PRIVATE_MESSAGE'] : ((isset($user->lang['PRIVATE_MESSAGE'])) ? $user->lang['PRIVATE_MESSAGE'] : '{ PRIVATE_MESSAGE }')); ?>"><span><?php echo ((isset($this->_rootref['L_PRIVATE_MESSAGE'])) ? $this->_rootref['L_PRIVATE_MESSAGE'] : ((isset($user->lang['PRIVATE_MESSAGE'])) ? $user->lang['PRIVATE_MESSAGE'] : '{ PRIVATE_MESSAGE }')); ?></span></a></li><?php } if ($_postrow_val['U_EMAIL']) {  ?><li class="email-icon"><a href="<?php echo $_postrow_val['U_EMAIL']; ?>" title="<?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?> <?php echo $_postrow_val['POST_AUTHOR']; ?>"><span><?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?> <?php echo $_postrow_val['POST_AUTHOR']; ?></span></a></li><?php } if ($_postrow_val['U_WWW']) {  ?><li class="web-icon"><a href="<?php echo $_postrow_val['U_WWW']; ?>" title="<?php echo ((isset($this->_rootref['L_VISIT_WEBSITE'])) ? $this->_rootref['L_VISIT_WEBSITE'] : ((isset($user->lang['VISIT_WEBSITE'])) ? $user->lang['VISIT_WEBSITE'] : '{ VISIT_WEBSITE }')); ?>: <?php echo $_postrow_val['U_WWW']; ?>"><span><?php echo ((isset($this->_rootref['L_WEBSITE'])) ? $this->_rootref['L_WEBSITE'] : ((isset($user->lang['WEBSITE'])) ? $user->lang['WEBSITE'] : '{ WEBSITE }')); ?></span></a></li><?php } if ($_postrow_val['U_MSN']) {  ?><li class="msnm-icon"><a href="<?php echo $_postrow_val['U_MSN']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_MSNM'])) ? $this->_rootref['L_MSNM'] : ((isset($user->lang['MSNM'])) ? $user->lang['MSNM'] : '{ MSNM }')); ?>"><span><?php echo ((isset($this->_rootref['L_MSNM'])) ? $this->_rootref['L_MSNM'] : ((isset($user->lang['MSNM'])) ? $user->lang['MSNM'] : '{ MSNM }')); ?></span></a></li><?php } if ($_postrow_val['U_ICQ']) {  ?><li class="icq-icon"><a href="<?php echo $_postrow_val['U_ICQ']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_ICQ'])) ? $this->_rootref['L_ICQ'] : ((isset($user->lang['ICQ'])) ? $user->lang['ICQ'] : '{ ICQ }')); ?>"><span><?php echo ((isset($this->_rootref['L_ICQ'])) ? $this->_rootref['L_ICQ'] : ((isset($user->lang['ICQ'])) ? $user->lang['ICQ'] : '{ ICQ }')); ?></span></a></li><?php } if ($_postrow_val['U_YIM']) {  ?><li class="yahoo-icon"><a href="<?php echo $_postrow_val['U_YIM']; ?>" onclick="popup(this.href, 780, 550); return false;" title="<?php echo ((isset($this->_rootref['L_YIM'])) ? $this->_rootref['L_YIM'] : ((isset($user->lang['YIM'])) ? $user->lang['YIM'] : '{ YIM }')); ?>"><span><?php echo ((isset($this->_rootref['L_YIM'])) ? $this->_rootref['L_YIM'] : ((isset($user->lang['YIM'])) ? $user->lang['YIM'] : '{ YIM }')); ?></span></a></li><?php } if ($_postrow_val['U_AIM']) {  ?><li class="aim-icon"><a href="<?php echo $_postrow_val['U_AIM']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_AIM'])) ? $this->_rootref['L_AIM'] : ((isset($user->lang['AIM'])) ? $user->lang['AIM'] : '{ AIM }')); ?>"><span><?php echo ((isset($this->_rootref['L_AIM'])) ? $this->_rootref['L_AIM'] : ((isset($user->lang['AIM'])) ? $user->lang['AIM'] : '{ AIM }')); ?></span></a></li><?php } if ($_postrow_val['U_JABBER']) {  ?><li class="jabber-icon"><a href="<?php echo $_postrow_val['U_JABBER']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_JABBER'])) ? $this->_rootref['L_JABBER'] : ((isset($user->lang['JABBER'])) ? $user->lang['JABBER'] : '{ JABBER }')); ?>"><span><?php echo ((isset($this->_rootref['L_JABBER'])) ? $this->_rootref['L_JABBER'] : ((isset($user->lang['JABBER'])) ? $user->lang['JABBER'] : '{ JABBER }')); ?></span></a></li><?php } if ($_postrow_val['U_BEBO_SN']) {  ?><li class="bebosn-icon"><a href="http://www.bebo.com/<?php echo $_postrow_val['U_BEBO_SN']; ?>"  title="<?php echo ((isset($this->_rootref['L_BEBO'])) ? $this->_rootref['L_BEBO'] : ((isset($user->lang['BEBO'])) ? $user->lang['BEBO'] : '{ BEBO }')); ?>"><span><?php echo ((isset($this->_rootref['L_BEBO'])) ? $this->_rootref['L_BEBO'] : ((isset($user->lang['BEBO'])) ? $user->lang['BEBO'] : '{ BEBO }')); ?></span></a></li><?php } if ($_postrow_val['U_BLOGGER_SN']) {  ?><li class="bloggersn-icon"><a href="<?php echo $_postrow_val['U_BLOGGER_SN']; ?>" title="<?php echo ((isset($this->_rootref['L_BLOGGER'])) ? $this->_rootref['L_BLOGGER'] : ((isset($user->lang['BLOGGER'])) ? $user->lang['BLOGGER'] : '{ BLOGGER }')); ?>"><span><?php echo ((isset($this->_rootref['L_BLOGGER'])) ? $this->_rootref['L_BLOGGER'] : ((isset($user->lang['BLOGGER'])) ? $user->lang['BLOGGER'] : '{ BLOGGER }')); ?></span></a></li><?php } if ($_postrow_val['U_FACEBOOK_SN']) {  ?><li class="facebooksn-icon"><a href="<?php echo $_postrow_val['U_FACEBOOK_SN']; ?>" title="<?php echo ((isset($this->_rootref['L_FACEBOOK'])) ? $this->_rootref['L_FACEBOOK'] : ((isset($user->lang['FACEBOOK'])) ? $user->lang['FACEBOOK'] : '{ FACEBOOK }')); ?>"><span><?php echo ((isset($this->_rootref['L_FACEBOOK'])) ? $this->_rootref['L_FACEBOOK'] : ((isset($user->lang['FACEBOOK'])) ? $user->lang['FACEBOOK'] : '{ FACEBOOK }')); ?></span></a></li><?php } if ($_postrow_val['U_GOODREADS_SN']) {  ?><li class="goodreadssn-icon"><a href="<?php echo $_postrow_val['U_GOODREADS_SN']; ?>" title="<?php echo ((isset($this->_rootref['L_GOODREADS'])) ? $this->_rootref['L_GOODREADS'] : ((isset($user->lang['GOODREADS'])) ? $user->lang['GOODREADS'] : '{ GOODREADS }')); ?>"><span><?php echo ((isset($this->_rootref['L_GOODREADS'])) ? $this->_rootref['L_GOODREADS'] : ((isset($user->lang['GOODREADS'])) ? $user->lang['GOODREADS'] : '{ GOODREADS }')); ?></span></a></li><?php } if ($_postrow_val['U_LINKEDIN_SN']) {  ?><li class="linkedinsn-icon"><a href="<?php echo $_postrow_val['U_LINKEDIN_SN']; ?>" title="<?php echo ((isset($this->_rootref['L_LINKEDIN'])) ? $this->_rootref['L_LINKEDIN'] : ((isset($user->lang['LINKEDIN'])) ? $user->lang['LINKEDIN'] : '{ LINKEDIN }')); ?>"><span><?php echo ((isset($this->_rootref['L_LINKEDIN'])) ? $this->_rootref['L_LINKEDIN'] : ((isset($user->lang['LINKEDIN'])) ? $user->lang['LINKEDIN'] : '{ LINKEDIN }')); ?></span></a></li><?php } if ($_postrow_val['U_MYSPACE_SN']) {  ?><li class="myspacesn-icon"><a href="http://www.myspace.com/<?php echo $_postrow_val['U_MYSPACE_SN']; ?>" title="<?php echo ((isset($this->_rootref['L_MYSPACE'])) ? $this->_rootref['L_MYSPACE'] : ((isset($user->lang['MYSPACE'])) ? $user->lang['MYSPACE'] : '{ MYSPACE }')); ?>"><span><?php echo ((isset($this->_rootref['L_MYSPACE'])) ? $this->_rootref['L_MYSPACE'] : ((isset($user->lang['MYSPACE'])) ? $user->lang['MYSPACE'] : '{ MYSPACE }')); ?></span></a></li><?php } if ($_postrow_val['U_NETLOG_SN']) {  ?><li class="netlogsn-icon"><a href="<?php echo $_postrow_val['U_NETLOG_SN']; ?>" title="<?php echo ((isset($this->_rootref['L_NETLOG'])) ? $this->_rootref['L_NETLOG'] : ((isset($user->lang['NETLOG'])) ? $user->lang['NETLOG'] : '{ NETLOG }')); ?>"><span><?php echo ((isset($this->_rootref['L_NETLOG'])) ? $this->_rootref['L_NETLOG'] : ((isset($user->lang['NETLOG'])) ? $user->lang['NETLOG'] : '{ NETLOG }')); ?></span></a></li><?php } if ($_postrow_val['U_TWITTER_SN']) {  ?><li class="twittersn-icon"><a href="http://www.twitter.com/<?php echo $_postrow_val['U_TWITTER_SN']; ?>" title="<?php echo ((isset($this->_rootref['L_TWITTER'])) ? $this->_rootref['L_TWITTER'] : ((isset($user->lang['TWITTER'])) ? $user->lang['TWITTER'] : '{ TWITTER }')); ?>"><span><?php echo ((isset($this->_rootref['L_TWITTER'])) ? $this->_rootref['L_TWITTER'] : ((isset($user->lang['TWITTER'])) ? $user->lang['TWITTER'] : '{ TWITTER }')); ?></span></a></li><?php } ?>

					</ul>
					<?php } } ?>

				</div>
			</div>
			<div class="wow-info-bottom"></div>
		</div>
	<?php } ?>


		<div class="postbody">
			<?php if ($_postrow_val['S_IGNORE_POST']) {  ?>

				<div class="ignore"><?php echo $_postrow_val['L_IGNORE_POST']; ?></div>
			<?php } else { if (! $this->_rootref['S_IS_BOT']) {  if ($_postrow_val['U_EDIT'] || $_postrow_val['U_DELETE'] || $_postrow_val['U_REPORT'] || $_postrow_val['U_WARN'] || $_postrow_val['U_INFO'] || $_postrow_val['U_QUOTE'] || $this->_rootref['S_DISPLAY_REPLY_INFO']) {  ?>

				<ul class="profile-icons">
					<?php if ($_postrow_val['U_EDIT']) {  ?><li class="edit-icon"><a href="<?php echo $_postrow_val['U_EDIT']; ?>" title="<?php echo ((isset($this->_rootref['L_EDIT_POST'])) ? $this->_rootref['L_EDIT_POST'] : ((isset($user->lang['EDIT_POST'])) ? $user->lang['EDIT_POST'] : '{ EDIT_POST }')); ?>"><span><?php echo ((isset($this->_rootref['L_EDIT_POST'])) ? $this->_rootref['L_EDIT_POST'] : ((isset($user->lang['EDIT_POST'])) ? $user->lang['EDIT_POST'] : '{ EDIT_POST }')); ?></span></a></li><?php } if ($_postrow_val['U_DELETE']) {  ?><li class="delete-icon"><a href="<?php echo $_postrow_val['U_DELETE']; ?>" title="<?php echo ((isset($this->_rootref['L_DELETE_POST'])) ? $this->_rootref['L_DELETE_POST'] : ((isset($user->lang['DELETE_POST'])) ? $user->lang['DELETE_POST'] : '{ DELETE_POST }')); ?>"><span><?php echo ((isset($this->_rootref['L_DELETE_POST'])) ? $this->_rootref['L_DELETE_POST'] : ((isset($user->lang['DELETE_POST'])) ? $user->lang['DELETE_POST'] : '{ DELETE_POST }')); ?></span></a></li><?php } if ($_postrow_val['U_REPORT']) {  ?><li class="report-icon"><a href="<?php echo $_postrow_val['U_REPORT']; ?>" title="<?php echo ((isset($this->_rootref['L_REPORT_POST'])) ? $this->_rootref['L_REPORT_POST'] : ((isset($user->lang['REPORT_POST'])) ? $user->lang['REPORT_POST'] : '{ REPORT_POST }')); ?>"><span><?php echo ((isset($this->_rootref['L_REPORT_POST'])) ? $this->_rootref['L_REPORT_POST'] : ((isset($user->lang['REPORT_POST'])) ? $user->lang['REPORT_POST'] : '{ REPORT_POST }')); ?></span></a></li><?php } if ($_postrow_val['U_WARN']) {  ?><li class="warn-icon"><a href="<?php echo $_postrow_val['U_WARN']; ?>" title="<?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?>"><span><?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?></span></a></li><?php } if ($_postrow_val['U_INFO']) {  ?><li class="info-icon"><a href="<?php echo $_postrow_val['U_INFO']; ?>" title="<?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?>"><span><?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?></span></a></li><?php } if ($_postrow_val['U_QUOTE']) {  ?><li class="<?php if ($this->_rootref['S_IS_LOCKED']) {  ?>quote-icon inactive<?php } else { ?>quote-icon<?php } ?>"><a href="<?php echo $_postrow_val['U_QUOTE']; ?>" title="<?php echo ((isset($this->_rootref['L_REPLY_WITH_QUOTE'])) ? $this->_rootref['L_REPLY_WITH_QUOTE'] : ((isset($user->lang['REPLY_WITH_QUOTE'])) ? $user->lang['REPLY_WITH_QUOTE'] : '{ REPLY_WITH_QUOTE }')); ?>" class="ui-button2"><?php echo ((isset($this->_rootref['L_REPLY_WITH_QUOTE'])) ? $this->_rootref['L_REPLY_WITH_QUOTE'] : ((isset($user->lang['REPLY_WITH_QUOTE'])) ? $user->lang['REPLY_WITH_QUOTE'] : '{ REPLY_WITH_QUOTE }')); ?><div></div></a></li><?php } if ($this->_rootref['S_DISPLAY_REPLY_INFO']) {  if ($this->_rootref['S_IS_LOCKED']) {  ?><li class="reply-icon inactive"><a href="<?php echo (isset($this->_rootref['U_POST_REPLY_TOPIC'])) ? $this->_rootref['U_POST_REPLY_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_TOPIC_LOCKED_SHORT'])) ? $this->_rootref['L_TOPIC_LOCKED_SHORT'] : ((isset($user->lang['TOPIC_LOCKED_SHORT'])) ? $user->lang['TOPIC_LOCKED_SHORT'] : '{ TOPIC_LOCKED_SHORT }')); ?>" class="ui-button2"><?php echo ((isset($this->_rootref['L_POST'])) ? $this->_rootref['L_POST'] : ((isset($user->lang['POST'])) ? $user->lang['POST'] : '{ POST }')); ?></a></li><?php } else { ?>

					<li class="reply-icon"><a href="<?php echo (isset($this->_rootref['U_POST_REPLY_TOPIC'])) ? $this->_rootref['U_POST_REPLY_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_POST_REPLY'])) ? $this->_rootref['L_POST_REPLY'] : ((isset($user->lang['POST_REPLY'])) ? $user->lang['POST_REPLY'] : '{ POST_REPLY }')); ?>" class="ui-button2"><?php echo ((isset($this->_rootref['L_POST'])) ? $this->_rootref['L_POST'] : ((isset($user->lang['POST'])) ? $user->lang['POST'] : '{ POST }')); ?></a></li><?php } } ?>

				</ul>
			<?php } } ?>


			<h3 <?php if ($_postrow_val['S_FIRST_ROW']) {  ?>class="first"<?php } ?>><?php if ($_postrow_val['POST_ICON_IMG']) {  ?><img src="<?php echo (isset($this->_rootref['T_ICONS_PATH'])) ? $this->_rootref['T_ICONS_PATH'] : ''; echo $_postrow_val['POST_ICON_IMG']; ?>" width="<?php echo $_postrow_val['POST_ICON_IMG_WIDTH']; ?>" height="<?php echo $_postrow_val['POST_ICON_IMG_HEIGHT']; ?>" alt="" /> <?php } ?><a href="#p<?php echo $_postrow_val['POST_ID']; ?>"><?php echo $_postrow_val['POST_SUBJECT']; ?></a></h3>
			<p class="author"><?php if ($this->_rootref['S_IS_BOT']) {  echo $_postrow_val['MINI_POST_IMG']; } else { ?><a href="<?php echo $_postrow_val['U_MINI_POST']; ?>"><?php echo $_postrow_val['MINI_POST_IMG']; ?></a><?php } echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <strong><?php echo $_postrow_val['POST_AUTHOR_FULL']; ?></strong> &raquo; <?php echo $_postrow_val['POST_DATE']; ?> </p>

			<?php if ($_postrow_val['S_POST_UNAPPROVED'] || $_postrow_val['S_POST_REPORTED']) {  ?>

				<p class="rules">
					<?php if ($_postrow_val['S_POST_UNAPPROVED']) {  echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?> <a href="<?php echo $_postrow_val['U_MCP_APPROVE']; ?>"><strong><?php echo ((isset($this->_rootref['L_POST_UNAPPROVED'])) ? $this->_rootref['L_POST_UNAPPROVED'] : ((isset($user->lang['POST_UNAPPROVED'])) ? $user->lang['POST_UNAPPROVED'] : '{ POST_UNAPPROVED }')); ?></strong></a><br /><?php } if ($_postrow_val['S_POST_REPORTED']) {  echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?> <a href="<?php echo $_postrow_val['U_MCP_REPORT']; ?>"><strong><?php echo ((isset($this->_rootref['L_POST_REPORTED'])) ? $this->_rootref['L_POST_REPORTED'] : ((isset($user->lang['POST_REPORTED'])) ? $user->lang['POST_REPORTED'] : '{ POST_REPORTED }')); ?></strong></a><?php } ?>

				</p>
			<?php } ?>


			<div class="content" <?php if ($_postrow_val['USER_SPECIAL_COLOR']) {  ?>style="color: <?php echo $_postrow_val['USER_SPECIAL_COLOR']; ?>"<?php } ?>><?php echo $_postrow_val['MESSAGE']; ?></div>

			<?php if ($_postrow_val['S_HAS_ATTACHMENTS']) {  ?>

				<dl class="attachbox">
					<dt><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?></dt>
					<?php $_attachment_count = (isset($_postrow_val['attachment'])) ? sizeof($_postrow_val['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$_postrow_val['attachment'][$_attachment_i]; ?>

						<dd><?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?></dd>
					<?php }} ?>

				</dl>
			<?php } if ($_postrow_val['S_DISPLAY_NOTICE']) {  ?><p class="rules"><img src = "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/icons/error-tiny.gif" /><?php echo ((isset($this->_rootref['L_DOWNLOAD_NOTICE'])) ? $this->_rootref['L_DOWNLOAD_NOTICE'] : ((isset($user->lang['DOWNLOAD_NOTICE'])) ? $user->lang['DOWNLOAD_NOTICE'] : '{ DOWNLOAD_NOTICE }')); ?></p><?php } if ($_postrow_val['EDITED_MESSAGE'] || $_postrow_val['EDIT_REASON']) {  ?>

				<div class="notice"><?php echo $_postrow_val['EDITED_MESSAGE']; ?>

					<?php if ($_postrow_val['EDIT_REASON']) {  ?><br /><strong><?php echo ((isset($this->_rootref['L_REASON'])) ? $this->_rootref['L_REASON'] : ((isset($user->lang['REASON'])) ? $user->lang['REASON'] : '{ REASON }')); ?>:</strong> <em><?php echo $_postrow_val['EDIT_REASON']; ?></em><?php } ?>

				</div>
			<?php } if ($_postrow_val['BUMPED_MESSAGE']) {  ?><div class="notice"><br /><br /><?php echo $_postrow_val['BUMPED_MESSAGE']; ?></div><?php } if ($_postrow_val['SIGNATURE']) {  ?><div id="sig<?php echo $_postrow_val['POST_ID']; ?>" class="signature"><?php echo $_postrow_val['SIGNATURE']; ?></div><?php } } ?>


		</div>
		<?php if (! $_postrow_val['S_IGNORE_POST']) {  ?><div class="back2top2"><a href="#wrap" class="top" title="<?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?>"><?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?></a></div><?php } ?>

		<div class="clear"></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr class="divider" />
<?php }} if ($this->_rootref['S_QUICK_REPLY']) {  $this->_tpl_include('quickreply_editor.html'); } if ($this->_rootref['PAGINATION'] || $this->_rootref['PREVIOUS_PAGE'] || $this->_rootref['S_NUM_POSTS'] > (1)) {  ?>

<div class="topic-actions">
	<div class="pagination">
		<?php if ($this->_rootref['PREVIOUS_PAGE']) {  ?><a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>" class="left-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a>  &bull;  <?php } if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?><a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a>
		 &bull;  <span><?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; ?></span><?php } else { echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; } } if ($this->_rootref['NEXT_PAGE']) {  ?><a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>" class="right-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a><?php } ?>

	</div>
</div>
<?php } ?>


<div class="clear"></div>

<div class="inner-footer" id="viewtopic-tools">
	<h2 class="open"></h2>
	<div>
	<div class="left"><div><div class="inner">
		<?php if ($this->_rootref['MODERATORS']) {  ?><h3><?php if ($this->_rootref['S_SINGLE_MODERATOR']) {  echo ((isset($this->_rootref['L_MODERATOR'])) ? $this->_rootref['L_MODERATOR'] : ((isset($user->lang['MODERATOR'])) ? $user->lang['MODERATOR'] : '{ MODERATOR }')); } else { echo ((isset($this->_rootref['L_MODERATORS'])) ? $this->_rootref['L_MODERATORS'] : ((isset($user->lang['MODERATORS'])) ? $user->lang['MODERATORS'] : '{ MODERATORS }')); } if ($this->_rootref['U_MCP']) {  ?>  &raquo;  [&nbsp;<a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></a>&nbsp;]<?php } ?></h3>
		<p><?php echo (isset($this->_rootref['MODERATORS'])) ? $this->_rootref['MODERATORS'] : ''; ?></p><?php } if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>

		<h3><?php if ($this->_rootref['U_VIEWONLINE']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></a><?php } else { echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); } ?></h3>
		<p><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?></p>
		<?php } if ($this->_rootref['S_TOPIC_MOD']) {  ?>

		<hr />
		<form method="post" action="<?php echo (isset($this->_rootref['S_MOD_ACTION'])) ? $this->_rootref['S_MOD_ACTION'] : ''; ?>">
		<fieldset class="quickmod">
			<label for="quick-mod-select"><?php echo ((isset($this->_rootref['L_QUICK_MOD'])) ? $this->_rootref['L_QUICK_MOD'] : ((isset($user->lang['QUICK_MOD'])) ? $user->lang['QUICK_MOD'] : '{ QUICK_MOD }')); ?>:</label> <?php echo (isset($this->_rootref['S_TOPIC_MOD'])) ? $this->_rootref['S_TOPIC_MOD'] : ''; ?> <input type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="button2" />
			<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

		</fieldset>
		</form>
		<?php } $this->_tpl_include('jumpbox2.html'); if (! $this->_rootref['S_TOPIC_MOD'] && ! $this->_rootref['MODERATORS']) {  if ($this->_rootref['S_DISPLAY_JUMPBOX']) {  ?><p><a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>" class="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" accesskey="r"><?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?> <?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a></p><?php } } ?>

	</div></div></div>
	<div class="right"><div><div class="inner">
		<?php if ($this->_rootref['U_VIEW_UNREAD_POST'] || $this->_rootref['TOTAL_POSTS'] && ! $this->_rootref['S_IS_BOT']) {  ?>

		<p><?php if ($this->_rootref['U_VIEW_UNREAD_POST'] && ! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEW_UNREAD_POST'])) ? $this->_rootref['U_VIEW_UNREAD_POST'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_UNREAD_POST'])) ? $this->_rootref['L_VIEW_UNREAD_POST'] : ((isset($user->lang['VIEW_UNREAD_POST'])) ? $user->lang['VIEW_UNREAD_POST'] : '{ VIEW_UNREAD_POST }')); ?></a> &bull; <?php } if ($this->_rootref['TOTAL_POSTS']) {  echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; } ?></p>
		<?php } if ($this->_rootref['S_NUM_POSTS'] > (1) || $this->_rootref['PREVIOUS_PAGE']) {  ?>

		<hr />
		<form id="viewtopic" method="post" action="<?php echo (isset($this->_rootref['S_TOPIC_ACTION'])) ? $this->_rootref['S_TOPIC_ACTION'] : ''; ?>">
			<fieldset class="display-options">
			<?php if (! $this->_rootref['S_IS_BOT']) {  ?>

				<label><?php echo ((isset($this->_rootref['L_DISPLAY_POSTS'])) ? $this->_rootref['L_DISPLAY_POSTS'] : ((isset($user->lang['DISPLAY_POSTS'])) ? $user->lang['DISPLAY_POSTS'] : '{ DISPLAY_POSTS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?></label><br />
				<label><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?></label>
				<label><?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?> <input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="button2" /></label>
			<?php } ?>

			</fieldset>
		</form>
		<?php } if ($this->_rootref['S_TOPIC_MOD'] || $this->_rootref['MODERATORS']) {  if ($this->_rootref['S_DISPLAY_JUMPBOX']) {  ?><hr /><p><a href="<?php echo (isset($this->_rootref['U_VIEW_FORUM'])) ? $this->_rootref['U_VIEW_FORUM'] : ''; ?>" class="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>" accesskey="r"><?php echo ((isset($this->_rootref['L_RETURN_TO'])) ? $this->_rootref['L_RETURN_TO'] : ((isset($user->lang['RETURN_TO'])) ? $user->lang['RETURN_TO'] : '{ RETURN_TO }')); ?> <?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?></a></p><?php } } ?>

	</div></div></div>
	</div>
</div>

<div class="clear"></div>

<script type="text/javascript">
$(document).ready(function($){
	if (typeof jQuery != 'undefined') {
		$("a.context-link, a.context-avatar").attr("href", "#")
	
		$("a.context-link, a.context-avatar").click(function (e) {
			var id = $(this).attr('id');
			id = id.substring(1, id.length);
			var context = $("#" + id + "-context");
			if ($(context).hasClass("active")) {
				$(context).stop(true);
				$(context).slideUp(100);
				$(context).animate(
    				{ opacity: 0 },
    				{ queue: false, duration: 100 }
 				);
				$(context).removeClass("active");
				$("#u" + id).removeClass("active");
				$("#a" + id).removeClass("active");
			} else {
				$(context).stop(true);
				$(context).css('opacity', 0)
				$(context).slideDown(200);
				$(context).animate(
    				{ opacity: 1 },
    				{ queue: false, duration: 300 }
 				);
				$(context).addClass("active");
				$("#u" + id).addClass("active");
				$("#a" + id).addClass("active");
			}
			e.stopPropagation();
			return false;
		});

		$("body").click(function () { 
			$(".wow-context.active").stop(true);
			$(".wow-context.active").slideUp(100);
			$(".wow-context.active").animate(
    			{ opacity: 0 },
    			{ queue: false, duration: 100 }
 			);
			$(".wow-context.active").removeClass("active");
			$("a.context-link.active").removeClass("active");
			$("a.context-avatar.active").removeClass("active");
		});
		
		<?php if ($this->_rootref['S_HAS_POLL'] && $this->_rootref['S_DISPLAY_RESULTS']) {  ?>

		var maxperc = 0;
		$(".pollbar").each(function() {
			var perc = parseFloat($("div", this).html());
			maxperc = ( perc > maxperc ? perc : maxperc );
		})
		if (maxperc !== 0) {
			$(".pollbar").each(function() {
				var perc = parseFloat($("div", this).html());
				if (perc == maxperc) {
					$(this).addClass("winner");
				}
				perc = Math.round(perc / maxperc * 100);
				$(this).css("width", perc+"%");
			})
		}
		<?php } ?>

	}
}); 
</script>

<?php $this->_tpl_include('overall_footer.html'); ?>