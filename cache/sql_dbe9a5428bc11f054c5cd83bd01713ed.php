<?php exit; ?>
1438291654
SELECT s.style_id, t.template_storedb, t.template_path, t.template_id, t.bbcode_bitfield, t.template_inherits_id, t.template_inherit_path, c.theme_path, c.theme_name, c.theme_storedb, c.theme_id, i.imageset_path, i.imageset_id, i.imageset_name FROM phpbb_3styles s, phpbb_3styles_template t, phpbb_3styles_theme c, phpbb_3styles_imageset i WHERE s.style_id = 9 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id
481
a:1:{i:0;a:14:{s:8:"style_id";s:1:"9";s:16:"template_storedb";s:1:"0";s:13:"template_path";s:14:"pbwow2_tribute";s:11:"template_id";s:1:"9";s:15:"bbcode_bitfield";s:4:"lNg=";s:20:"template_inherits_id";s:1:"2";s:21:"template_inherit_path";s:6:"pbwow2";s:10:"theme_path";s:14:"pbwow2_tribute";s:10:"theme_name";s:14:"PBWoW2_Tribute";s:13:"theme_storedb";s:1:"1";s:8:"theme_id";s:1:"9";s:13:"imageset_path";s:6:"pbwow2";s:11:"imageset_id";s:1:"2";s:13:"imageset_name";s:6:"PBWoW2";}}