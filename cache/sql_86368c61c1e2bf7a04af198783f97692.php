<?php exit; ?>
1438283474
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (phpbb_3moderator_cache m) LEFT JOIN phpbb_3users u ON (m.user_id = u.user_id) LEFT JOIN phpbb_3groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}