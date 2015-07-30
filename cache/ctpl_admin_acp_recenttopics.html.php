<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<h1><?php echo ((isset($this->_rootref['L_RECENT_TOPICS_MOD'])) ? $this->_rootref['L_RECENT_TOPICS_MOD'] : ((isset($user->lang['RECENT_TOPICS_MOD'])) ? $user->lang['RECENT_TOPICS_MOD'] : '{ RECENT_TOPICS_MOD }')); ?></h1>
<p><?php echo (isset($this->_rootref['RT_VERSION'])) ? $this->_rootref['RT_VERSION'] : ''; ?></p>


<form id="acp_board" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
	<fieldset>
		<dl>
			<dt><label for="rt_number"><?php echo ((isset($this->_rootref['L_RT_NUMBER'])) ? $this->_rootref['L_RT_NUMBER'] : ((isset($user->lang['RT_NUMBER'])) ? $user->lang['RT_NUMBER'] : '{ RT_NUMBER }')); ?>:</label><br />
			<span><?php echo ((isset($this->_rootref['L_RT_NUMBER_EXP'])) ? $this->_rootref['L_RT_NUMBER_EXP'] : ((isset($user->lang['RT_NUMBER_EXP'])) ? $user->lang['RT_NUMBER_EXP'] : '{ RT_NUMBER_EXP }')); ?></span></dt>
			<dd><input type="text" id="rt_number" name="rt_number" size="30" value="<?php echo (isset($this->_rootref['RT_NUMBER'])) ? $this->_rootref['RT_NUMBER'] : ''; ?>" /></dd>
		</dl>
		<dl>
			<dt><label for="rt_page_number"><?php echo ((isset($this->_rootref['L_RT_PAGE_NUMBER'])) ? $this->_rootref['L_RT_PAGE_NUMBER'] : ((isset($user->lang['RT_PAGE_NUMBER'])) ? $user->lang['RT_PAGE_NUMBER'] : '{ RT_PAGE_NUMBER }')); ?>:</label><br />
			<span><?php echo ((isset($this->_rootref['L_RT_PAGE_NUMBER_EXP'])) ? $this->_rootref['L_RT_PAGE_NUMBER_EXP'] : ((isset($user->lang['RT_PAGE_NUMBER_EXP'])) ? $user->lang['RT_PAGE_NUMBER_EXP'] : '{ RT_PAGE_NUMBER_EXP }')); ?></span></dt>
			<dd><input type="text" id="rt_page_number" name="rt_page_number" size="30" value="<?php echo (isset($this->_rootref['RT_PAGE_NUMBER'])) ? $this->_rootref['RT_PAGE_NUMBER'] : ''; ?>" /></dd>
		</dl>
		<dl>
			<dt><label for="rt_anti_topics"><?php echo ((isset($this->_rootref['L_RT_ANTI_TOPICS'])) ? $this->_rootref['L_RT_ANTI_TOPICS'] : ((isset($user->lang['RT_ANTI_TOPICS'])) ? $user->lang['RT_ANTI_TOPICS'] : '{ RT_ANTI_TOPICS }')); ?>:</label><br />
			<span><?php echo ((isset($this->_rootref['L_RT_ANTI_TOPICS_EXP'])) ? $this->_rootref['L_RT_ANTI_TOPICS_EXP'] : ((isset($user->lang['RT_ANTI_TOPICS_EXP'])) ? $user->lang['RT_ANTI_TOPICS_EXP'] : '{ RT_ANTI_TOPICS_EXP }')); ?></span></dt>
			<dd><input type="text" id="rt_anti_topics" name="rt_anti_topics" size="30" value="<?php echo (isset($this->_rootref['RT_ANTI_TOPICS'])) ? $this->_rootref['RT_ANTI_TOPICS'] : ''; ?>" /></dd>
		</dl>
		<dl>
			<dt><label for="rt_parents"><?php echo ((isset($this->_rootref['L_RT_PARENTS'])) ? $this->_rootref['L_RT_PARENTS'] : ((isset($user->lang['RT_PARENTS'])) ? $user->lang['RT_PARENTS'] : '{ RT_PARENTS }')); ?>:</label></dt>
			<dd><input type="radio" class="radio" id="rt_parents" name="rt_parents" value="1" <?php if ($this->_rootref['RT_PARENTS']) {  ?>checked="checked"<?php } ?>/> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?> &nbsp; 
				<input type="radio" class="radio" name="rt_parents" value="0" <?php if (! $this->_rootref['RT_PARENTS']) {  ?>checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></dd>
		</dl>
	</fieldset>
	<fieldset>
		<legend><?php echo ((isset($this->_rootref['L_RT_VIEW_ON'])) ? $this->_rootref['L_RT_VIEW_ON'] : ((isset($user->lang['RT_VIEW_ON'])) ? $user->lang['RT_VIEW_ON'] : '{ RT_VIEW_ON }')); ?></legend>
		<dl>
			<dt><label for="rt_index"><?php echo ((isset($this->_rootref['L_RT_INDEX'])) ? $this->_rootref['L_RT_INDEX'] : ((isset($user->lang['RT_INDEX'])) ? $user->lang['RT_INDEX'] : '{ RT_INDEX }')); ?></label></dt>
			<dd><input type="radio" class="radio" id="rt_index" name="rt_index" value="1" <?php if ($this->_rootref['RT_INDEX']) {  ?>checked="checked"<?php } ?>/> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?> &nbsp; 
				<input type="radio" class="radio" name="rt_index" value="0" <?php if (! $this->_rootref['RT_INDEX']) {  ?>checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></dd>
		</dl>
	</fieldset>
	<fieldset>
		<p class="submit-buttons">
			<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

			<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;
			<input class="button2" type="reset" id="reset" name="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" />
		</p>
	</fieldset>
</form>
<?php $this->_tpl_include('overall_footer.html'); ?>