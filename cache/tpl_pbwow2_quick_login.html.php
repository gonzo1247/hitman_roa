<?php if (!defined('IN_PHPBB')) exit; if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>

<div id="quick-login-bg" class="quick-login-bg"></div>

<form method="post" action="<?php echo (isset($this->_rootref['S_LOGIN_ACTION'])) ? $this->_rootref['S_LOGIN_ACTION'] : ''; ?>" id="quick-login-panel" class="quick-login-panel">
	<div><div>
	<h3><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a><?php if ($this->_rootref['S_REGISTER_ENABLED']) {  ?>&nbsp; &bull; &nbsp;<a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a><?php } ?></h3>
	<fieldset class="quick-login">
		<div class="username"><div><label for="username" title="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>" /><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?></label><input type="text" name="username" id="username" size="10" class="inputbox" title="<?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>" /></div></div>
		<div class="password"><div><label for="password" title="<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>" /><?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?></label><input type="password" name="password" id="password" size="10" class="inputbox" title="<?php echo ((isset($this->_rootref['L_PASSWORD'])) ? $this->_rootref['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ PASSWORD }')); ?>" /></div></div>
		<div class="controls">
			<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?>

			<label for="autologin"><input type="checkbox" name="autologin" id="autologin" /> <?php echo ((isset($this->_rootref['L_LOG_ME_IN'])) ? $this->_rootref['L_LOG_ME_IN'] : ((isset($user->lang['LOG_ME_IN'])) ? $user->lang['LOG_ME_IN'] : '{ LOG_ME_IN }')); ?></label>
			<?php } ?>

			<label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="5" /> <?php echo ((isset($this->_rootref['L_HIDE_ME'])) ? $this->_rootref['L_HIDE_ME'] : ((isset($user->lang['HIDE_ME'])) ? $user->lang['HIDE_ME'] : '{ HIDE_ME }')); ?></label>
			<input type="submit" name="login" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" class="button2" />
		</div>
		<?php echo (isset($this->_rootref['S_LOGIN_REDIRECT'])) ? $this->_rootref['S_LOGIN_REDIRECT'] : ''; ?>

	</fieldset>
	</div></div>
</form>

<script type="text/javascript">
$(document).ready(function($){
	if (typeof jQuery != 'undefined') {  
		$("a#quick-login").attr("href", "#")
		$("a#quick-login").click(function(){
			$("#quick-login-bg, #quick-login-panel").fadeIn(300);
		})
		$("#quick-login-bg").click(function () { 
			$("#quick-login-bg, #quick-login-panel").fadeOut(300);  
		})
	}
})  
</script> 
<?php } ?>