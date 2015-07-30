<?php if (!defined('IN_PHPBB')) exit; ?><div class="quick-style">
	<form action="<?php echo (isset($this->_rootref['S_QUICK_STYLE_ACTION'])) ? $this->_rootref['S_QUICK_STYLE_ACTION'] : ''; ?>" method="post">
		<span><?php echo ((isset($this->_rootref['L_PRIME_QUICK_STYLE'])) ? $this->_rootref['L_PRIME_QUICK_STYLE'] : ((isset($user->lang['PRIME_QUICK_STYLE'])) ? $user->lang['PRIME_QUICK_STYLE'] : '{ PRIME_QUICK_STYLE }')); ?>: </span>
		<select name="prime_quick_style" id="prime_quick_style" onchange="this.form.submit();"><?php echo (isset($this->_rootref['S_QUICK_STYLE_OPTIONS'])) ? $this->_rootref['S_QUICK_STYLE_OPTIONS'] : ''; ?></select>
		<noscript>
			<div style="display:inline;">
				<input type="submit" value="<?php echo ((isset($this->_rootref['L_CHANGE'])) ? $this->_rootref['L_CHANGE'] : ((isset($user->lang['CHANGE'])) ? $user->lang['CHANGE'] : '{ CHANGE }')); ?>" class="button2" style="font-size:0.9em;" />
			</div>
		</noscript>
	</form>
</div>