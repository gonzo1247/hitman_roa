<?php if (!defined('IN_PHPBB')) exit; ?><div id="video-background"></div>

<script type="text/javascript">
$(document).ready(function(){
	if (typeof jQuery != 'undefined') {
		if(!jQuery.browser.mobile && $(window).width() >= 1200) {

			var v = '<video id="video-element1" preload="auto" autoplay="true" loop="loop">';
			v += '<source src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/videos/wotlk.mp4" type="video/mp4">';
			v += '<source src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/videos/wotlk.webm" type="video/webm">';
			v += '</video>';
			v += '<video id="video-element2" preload="auto" autoplay="true" loop="loop">';
			v += '<source src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/videos/tbc.mp4" type="video/mp4">';
			v += '<source src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/videos/tbc.webm" type="video/webm">';
			v += '</video>';
			v += '<video id="video-element3" preload="auto" autoplay="true" loop="loop">';
			v += '<source src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/videos/cat.mp4" type="video/mp4">';
			v += '<source src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/videos/cat.webm" type="video/webm">';
			v += '</video>';

			$("#video-background").html(v);
			$("#video-background video").on("canplaythrough", function(){
				if ($(this).css("opacity") != 1) {
					$(this).delay(100).fadeTo(4000,1);
				}
			});
		} else {
			$("#video-background").hide();
		}
	}
});
</script>