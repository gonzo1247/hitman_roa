<?php if (!defined('IN_PHPBB')) exit; echo (isset($this->_tpldata['DEFINE']['.']['LR_BLOCK_H_L'])) ? $this->_tpldata['DEFINE']['.']['LR_BLOCK_H_L'] : ''; if ($this->_tpldata['DEFINE']['.']['S_BLOCK_ICON']) {  ?><img src="<?php echo (isset($this->_tpldata['DEFINE']['.']['IMAGE_SRC'])) ? $this->_tpldata['DEFINE']['.']['IMAGE_SRC'] : ''; ?>" width="<?php echo (isset($this->_tpldata['DEFINE']['.']['IMAGE_WIDTH'])) ? $this->_tpldata['DEFINE']['.']['IMAGE_WIDTH'] : ''; ?>" height="<?php echo (isset($this->_tpldata['DEFINE']['.']['IMAGE_HEIGHT'])) ? $this->_tpldata['DEFINE']['.']['IMAGE_HEIGHT'] : ''; ?>" alt="" />&nbsp;<?php } echo (isset($this->_tpldata['DEFINE']['.']['TITLE'])) ? $this->_tpldata['DEFINE']['.']['TITLE'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['LR_BLOCK_H_R'])) ? $this->_tpldata['DEFINE']['.']['LR_BLOCK_H_R'] : ''; ?>

			<?php if ($this->_rootref['BIRTHDAY_LIST']) {  ?>

			<strong><?php echo ((isset($this->_rootref['L_CONGRATULATIONS'])) ? $this->_rootref['L_CONGRATULATIONS'] : ((isset($user->lang['CONGRATULATIONS'])) ? $user->lang['CONGRATULATIONS'] : '{ CONGRATULATIONS }')); ?>:</strong><br />
			<?php $_board3_birthday_list_count = (isset($this->_tpldata['board3_birthday_list'])) ? sizeof($this->_tpldata['board3_birthday_list']) : 0;if ($_board3_birthday_list_count) {for ($_board3_birthday_list_i = 0; $_board3_birthday_list_i < $_board3_birthday_list_count; ++$_board3_birthday_list_i){$_board3_birthday_list_val = &$this->_tpldata['board3_birthday_list'][$_board3_birthday_list_i]; ?>

			<span style="float:left;">
				<img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/portal/portal_user.png" width="16" height="16" alt="" />
			</span>
			<span style="float:left; padding-left:5px; padding-top:2px;">
				<?php echo $_board3_birthday_list_val['USER']; ?>

			</span>
			<span style="float: right;">
				<?php if ($_board3_birthday_list_val['AGE']) {  echo $_board3_birthday_list_val['AGE']; } ?>

			</span><br style="clear: both" />
			<?php }} } else { ?>

			<?php echo ((isset($this->_rootref['L_NO_BIRTHDAYS'])) ? $this->_rootref['L_NO_BIRTHDAYS'] : ((isset($user->lang['NO_BIRTHDAYS'])) ? $user->lang['NO_BIRTHDAYS'] : '{ NO_BIRTHDAYS }')); ?>

			<?php } if ($this->_rootref['S_DISPLAY_BIRTHDAY_AHEAD_LIST']) {  ?>

				<hr class="dashed" />
				<strong><?php echo ((isset($this->_rootref['L_BIRTHDAYS_AHEAD'])) ? $this->_rootref['L_BIRTHDAYS_AHEAD'] : ((isset($user->lang['BIRTHDAYS_AHEAD'])) ? $user->lang['BIRTHDAYS_AHEAD'] : '{ BIRTHDAYS_AHEAD }')); ?></strong>
				<br />
				<?php if ($this->_rootref['BIRTHDAYS_AHEAD_LIST']) {  $_board3_birthday_ahead_list_count = (isset($this->_tpldata['board3_birthday_ahead_list'])) ? sizeof($this->_tpldata['board3_birthday_ahead_list']) : 0;if ($_board3_birthday_ahead_list_count) {for ($_board3_birthday_ahead_list_i = 0; $_board3_birthday_ahead_list_i < $_board3_birthday_ahead_list_count; ++$_board3_birthday_ahead_list_i){$_board3_birthday_ahead_list_val = &$this->_tpldata['board3_birthday_ahead_list'][$_board3_birthday_ahead_list_i]; ?>

				<span style="float:left;">
					<img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/portal/portal_user.png" width="16" height="16" alt="" />
				</span>
				<span style="float:left; padding-left:5px; padding-top:2px;">
					<span title="<?php echo $_board3_birthday_ahead_list_val['DATE']; ?>"><?php echo $_board3_birthday_ahead_list_val['USER']; ?></span>
				</span>
				<span style="float: right;">
					<?php if ($_board3_birthday_ahead_list_val['AGE']) {  echo $_board3_birthday_ahead_list_val['AGE']; } ?>

				</span><br style="clear: both" />
				<?php }} } else { ?>

				<?php echo ((isset($this->_rootref['L_NO_BIRTHDAYS_AHEAD'])) ? $this->_rootref['L_NO_BIRTHDAYS_AHEAD'] : ((isset($user->lang['NO_BIRTHDAYS_AHEAD'])) ? $user->lang['NO_BIRTHDAYS_AHEAD'] : '{ NO_BIRTHDAYS_AHEAD }')); ?>

				<?php } } ?>

<?php echo (isset($this->_tpldata['DEFINE']['.']['LR_BLOCK_F_L'])) ? $this->_tpldata['DEFINE']['.']['LR_BLOCK_F_L'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['LR_BLOCK_F_R'])) ? $this->_tpldata['DEFINE']['.']['LR_BLOCK_F_R'] : ''; ?>