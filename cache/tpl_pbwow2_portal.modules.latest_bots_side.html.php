<?php if (!defined('IN_PHPBB')) exit; echo (isset($this->_tpldata['DEFINE']['.']['LR_BLOCK_H_L'])) ? $this->_tpldata['DEFINE']['.']['LR_BLOCK_H_L'] : ''; if ($this->_tpldata['DEFINE']['.']['S_BLOCK_ICON']) {  ?><img src="<?php echo (isset($this->_tpldata['DEFINE']['.']['IMAGE_SRC'])) ? $this->_tpldata['DEFINE']['.']['IMAGE_SRC'] : ''; ?>" width="<?php echo (isset($this->_tpldata['DEFINE']['.']['IMAGE_WIDTH'])) ? $this->_tpldata['DEFINE']['.']['IMAGE_WIDTH'] : ''; ?>" height="<?php echo (isset($this->_tpldata['DEFINE']['.']['IMAGE_HEIGHT'])) ? $this->_tpldata['DEFINE']['.']['IMAGE_HEIGHT'] : ''; ?>" alt="" />&nbsp;<?php } echo (isset($this->_tpldata['DEFINE']['.']['TITLE'])) ? $this->_tpldata['DEFINE']['.']['TITLE'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['LR_BLOCK_H_R'])) ? $this->_tpldata['DEFINE']['.']['LR_BLOCK_H_R'] : ''; ?>
	<?php $_last_visited_bots_count = (isset($this->_tpldata['last_visited_bots'])) ? sizeof($this->_tpldata['last_visited_bots']) : 0;if ($_last_visited_bots_count) {for ($_last_visited_bots_i = 0; $_last_visited_bots_i < $_last_visited_bots_count; ++$_last_visited_bots_i){$_last_visited_bots_val = &$this->_tpldata['last_visited_bots'][$_last_visited_bots_i]; ?>
		<span class="genmed"><?php echo $_last_visited_bots_val['BOT_NAME']; ?></span> <br /> <span class="gensmall"><?php echo $_last_visited_bots_val['LAST_VISIT_DATE']; ?></span>
		<?php if (! $_last_visited_bots_val['S_LAST_ROW']) {  ?><hr /><?php } }} ?>
<?php echo (isset($this->_tpldata['DEFINE']['.']['LR_BLOCK_F_L'])) ? $this->_tpldata['DEFINE']['.']['LR_BLOCK_F_L'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['LR_BLOCK_F_R'])) ? $this->_tpldata['DEFINE']['.']['LR_BLOCK_F_R'] : ''; ?>