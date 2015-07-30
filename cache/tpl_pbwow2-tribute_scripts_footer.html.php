<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('quick_login.html'); ?>


<script type="text/javascript">
$(document).ready(function($){
	if (typeof jQuery != 'undefined') {
		$(".wow-index .forabg > h2, .wow-recent > h2, .index-extra > h2, .inner-footer > h2, .inner-footer").addClass("toggle")
        $(".wow-index .forabg, .wow-recent, .index-extra, .inner-footer").collapse({
			persist: true,
			open: function() {
				this.stop(true,true);
				this.addClass("open");
				this.slideDown(400);
			},
			close: function() {
				this.stop(true,true);
				this.slideUp(400);
				this.removeClass("open");
			}
		});

		$(".wow-index .subforums-menu").each(function() {
			$(this).html($(this).html().replace(/[\,][\ ]/g,""));
		});

		function subActivate(forum) {
			var menu = $(forum).children(".subforums-menu");
			var button = $(forum).children(".subforums-button");
			menu.stop(true,true);
			menu.css('opacity', 0)
			menu.slideDown(200);
			menu.animate(
				{ opacity: 1 },
				{ queue: false, duration: 300 }
			);
			menu.addClass("active");
			button.addClass("active");
		}

		function subDeactivate(forum) {
			var menu = $(forum).children(".subforums-menu");
			var button = $(forum).children(".subforums-button");
			menu.stop(true,true);
			menu.slideUp(200);
			menu.animate(
				{ opacity: 0 },
				{ queue: false, duration: 200 }
			);
			menu.removeClass("active");
			button.removeClass("active");
		}
		
		function subDetermine(button, force) {
			var menu = $(button).siblings(".subforums-menu");
			if (menu.hasClass("active") && force) {
				return;
			}
			else if (menu.hasClass("active")) {
				subDeactivate($(button).parent());
			} else {
				$(".wow-forum div.active").each(function() {
					subDeactivate($(this).parent());
				});
				subActivate($(button).parent());
			}
		}
		
		$(".subforums-button").click(function (e) {
			subDetermine($(this),false);
			e.stopPropagation();
			e.preventDefault();
			return false;
		}); 

		var timeout;
		$(document).delegate(".subforums-button", "mouseenter", function() {
			subDetermine($(this),true);
			clearTimeout(timeout);
		})
		
		$(document).delegate(".subforums-menu", "mouseenter", function() {
			clearTimeout(timeout);
		})
		
		$(document).delegate(".subforums-button, .subforums-menu", "mouseleave", function() {
			var $this = $(this);
			timeout = setTimeout(function() {
				subDeactivate($this.parent());
			}, 1000)
		})

		<?php if ($this->_rootref['S_NAVMENU']) {  ?>

		function menuActivate(forum) {
			var menu = $(forum).children(".nav-popup");
			var button = $(forum).children("a");
			menu.stop(true,true);
			menu.css('opacity', 0)
			menu.slideDown(200);
			menu.animate(
				{ opacity: 1 },
				{ queue: false, duration: 300 }
			);
			menu.addClass("active");
			button.addClass("active");
		}

		function menuDeactivate(forum) {
			var menu = $(forum).children(".nav-popup");
			var button = $(forum).children("a");
			menu.stop(true,true);
			menu.slideUp(200);
			menu.animate(
				{ opacity: 0 },
				{ queue: false, duration: 200 }
			);
			menu.removeClass("active");
			button.removeClass("active");
		}
		
		function menuDetermine(button, force) {
			var menu = $(button).siblings(".nav-popup");
			if (menu.hasClass("active") && force) {
				return;
			}
			else if (menu.hasClass("active")) {
				menuDeactivate($(button).parent());
			} else {
				$("#breadcrumb .nav-popup").each(function() {
					menuDeactivate($(this).parent());
				});
				menuActivate($(button).parent());
			}
		}

		if(!jQuery.browser.mobile) {
			var timeout2;
			$(document).delegate("#breadcrumb .nav-link > a", "mouseenter", function() {
				menuDetermine($(this),true);
				clearTimeout(timeout2);
			})
			
			$(document).delegate("#breadcrumb .nav-popup", "mouseenter", function() {
				clearTimeout(timeout2);
			})
			
			$(document).delegate("#breadcrumb .nav-link > a, #breadcrumb .nav-popup", "mouseleave", function() {
				var $this = $(this);
				timeout2 = setTimeout(function() {
					menuDeactivate($this.parent());
				}, 700)
			})
		}
		<?php } if ($this->_rootref['S_JQUERY_TOPIC_PREVIEW']) {  ?>

		if(!jQuery.browser.mobile) {
			$("dt[title]").topicPreview({
				"dir"   : "<?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; ?>", // do not change
				"theme" : "", // use "light" or "dark" topic preview theme
				"delay" : 500, // sets the delay before showing topic previews (in milliseconds)
				"width" : 360, // sets the width of topic previews (in pixels)
				"left"  : 35, // sets the position offset from the left (in pixels)
				"drift" : 15, // sets the amount of vertical animation, use negative values to change direction (in pixels)
				"noavatar" : "<?php echo (isset($this->_rootref['T_IMAGESET_PATH'])) ? $this->_rootref['T_IMAGESET_PATH'] : ''; ?>/images/portraits/def.gif"
			});
		}
		<?php } if ($this->_rootref['S_TOPBAR_FIXED']) {  ?>

		var $window = $(window);
		var $pane = $('body');
	
		function checkWidth() {
			var windowsize = $window.width();
			if (windowsize > 670) {
				if (!$pane.hasClass('top-bar-fixed')) {
					$pane.addClass('top-bar-fixed');
				}
			} else {
				if ($pane.hasClass('top-bar-fixed')) {
					$pane.removeClass('top-bar-fixed');
				}
			}
		}
		checkWidth();
		$(window).resize(checkWidth);
		<?php } ?>

	}
});
</script>

<?php $this->_tpl_include('scripts_footer_jqstyle.html'); if ($this->_rootref['S_TOOLTIPS_FOOTER'] && ! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['WOWTIPS_SCRIPT']) {  echo (isset($this->_rootref['WOWTIPS_SCRIPT'])) ? $this->_rootref['WOWTIPS_SCRIPT'] : ''; } if ($this->_rootref['D3TIPS_SCRIPT']) {  echo (isset($this->_rootref['D3TIPS_SCRIPT'])) ? $this->_rootref['D3TIPS_SCRIPT'] : ''; } if ($this->_rootref['ZAMTIPS_SCRIPT']) {  echo (isset($this->_rootref['ZAMTIPS_SCRIPT'])) ? $this->_rootref['ZAMTIPS_SCRIPT'] : ''; } } if ($this->_rootref['TRACKING_CODE']) {  echo (isset($this->_rootref['TRACKING_CODE'])) ? $this->_rootref['TRACKING_CODE'] : ''; } ?>