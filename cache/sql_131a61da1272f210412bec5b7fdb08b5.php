<?php exit; ?>
1438288355
SELECT s.style_id, c.theme_id, c.theme_data, c.theme_path, c.theme_name, c.theme_mtime, i.*, t.template_path FROM phpbb_3styles s, phpbb_3styles_template t, phpbb_3styles_theme c, phpbb_3styles_imageset i WHERE s.style_id = 9 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id
117470
a:1:{i:0;a:11:{s:8:"style_id";s:1:"9";s:8:"theme_id";s:1:"9";s:10:"theme_data";s:117069:"/*  phpBB3 Style Sheet
    --------------------------------------------------------------
	Style name:			PBWoW 2 Tribute
	Based on style:		prosilver (the default phpBB 3.0.x style)
	Original author:	Tom Beddard ( http://www.subblue.com/ )
	Modified by:		PayBas ( http://pbwow.com/ )
    --------------------------------------------------------------
*/

/* General Markup Styles
---------------------------------------- */

* {
	/* Reset browsers default margin, padding and font sizes */
	margin: 0;
	padding: 0;
}

html {
	font-size: 62.5%;
	/* Always show a scrollbar for short pages - stops the jump when the scrollbar appears. non-IE browsers */
	height: 101%;
}

body {
	font-family: Verdana, Helvetica, Arial, sans-serif;
	color: #CCCCCC;
	font-size: 10px;
	font-size: 1rem;
	margin: 0;
	padding: 0;
	background-color: #000;
	background-position: 49.999% 0;
	background-repeat: no-repeat;
}

body.body-top-bar {
	background-position: 49.999% 41px;
}

body.bg-fixed {
	background-attachment: fixed;
}

body.bg-fixed #video-background {
	position: fixed;
	z-index: 0;
}

body.bg-fixed.body-top-bar #video-background {
	top: 41px;
}

h1 {
	/* Forum name */
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	margin-right: 200px;
	color: #FFFFFF;
	font-weight: bold;
	font-size: 20px;
	font-size: 2rem;
	margin-top: 15px;
	margin-top: 1.5rem;
}

h2 {
	/* Forum header titles */
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight: normal;
	color: #FFF;
	font-size: 20px;
	font-size: 2rem;
	margin: 8px 0 2px 5px;
	margin: 0.8rem 0 0.2rem 0.5rem;
}

h2.solo {
	margin-bottom: 10px;
	margin-bottom: 1rem;
}

h3 {
	/* Sub-headers (also used as post headers, but defined later) */
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	text-transform: uppercase;
	border-bottom: 1px solid #444;
	margin-bottom: 3px;
	margin-bottom: 0.3rem;
	padding-bottom: 2px;
	padding-bottom: 0.2rem;
	font-size: 11px;
	font-size: 1.1rem;
	color: #888;
	margin-top: 20px;
}

h4 {
	/* Forum and topic list titles */
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, Sans-serif;
	font-size: 1.3px;
	font-size: 1.3rem;
}

p {
	line-height: 13px;
	line-height: 1.3rem;
	font-size: 11px;
	font-size: 1.1rem;
	margin-bottom: 15px;
	margin-bottom: 1.5rem;
}

img {
	border-width: 0;
}

hr {
	/* Also see tweaks.css */
	border: 0 none #7C7C7C;
	border-top: 1px solid #444;
	height: 1px;
	margin: 5px 0;
	display: block;
	clear: both;
}

hr.dashed {
	border-top: 1px dashed #CCCCCC;
	margin: 10px 0;
}

hr.divider {
	display: none;
}

p.right {
	text-align: right;
}

/* Main blocks
---------------------------------------- */
#wrapper {

}

#wrap {
	margin: 0 auto;
	padding: 0;
	min-width: 670px;
	max-width: 990px;
}

#simple-wrap {
	padding: 6px 10px;
}

#page-body {
	clear: both;
	background: #000;
	background: rgba(0,0,0,0.8);
	position: relative;
}

.wrap1 { background: url("{T_IMAGESET_PATH}/images/border-left.gif") repeat-y 0 0 }
.wrap2 { background: url("{T_IMAGESET_PATH}/images/border-right.gif") repeat-y 100% 0 }
.wrap3 { background: url("{T_IMAGESET_PATH}/images/border-top.gif") repeat-x 0 0 }
.wrap4 { background: url("{T_IMAGESET_PATH}/images/border-bot.gif") repeat-x 0 100% }
.wrap5 { background: url("{T_IMAGESET_PATH}/images/border-top-left.gif") no-repeat 0 0 }
.wrap6 { background: url("{T_IMAGESET_PATH}/images/border-top-right.gif") no-repeat 100% 0 }
.wrap7 { background: url("{T_IMAGESET_PATH}/images/border-bot-right.gif") no-repeat 100% 100% }
.wrap8 { background: url("{T_IMAGESET_PATH}/images/border-bot-left.gif") no-repeat 0 100%; padding: 20px 30px 38px 30px }

#page-footer {
	clear: both;
	text-shadow: 1px 1px 1px #000000;
}

#page-footer h3 {
	margin-top: 20px;
}

#page-footer .inner {
	padding: 0 15px;
}

#logo-wrap {
	min-height: 160px;
	position: relative;
	overflow: hidden;
}

#logo {
	display: block;
	width: 300px;
	height: 150px;
	margin: 10px 10px 25px 10px;
	background-size: 100% 100%;
	z-index: 0;
}

a#logo:hover {
	text-decoration: none;
}

/* Custom header
---------------------------------------- */
.headerbar { 
	box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.85), inset 0px 0px 6px 6px rgba(0,0,0,1); 
	background: #111;
	background: rgba(0,0,0,0.85);
	border-radius: 0 0 6px 6px; 
	border: 1px solid #000;
	border-top: none;
	margin: 0 15px 15px 0;
	float: right;
	color: #999;
	/* max-width: 500px;  IE fix */
 }
.headerbar > div { 
	border-radius: 0 0 6px 6px; 
	border: 1px solid #363636;
	border-top: none;
	padding: 1px 2px;
	float: right;
}
.headerbar > div > div { 
	border: 1px solid #1a1a1a;
	border-top: none;
	padding: 10px 15px;
	float: right; 
}
.headerbar ul.linklist li {
	margin-right: 10px;
}
.headerbar ul.linklist li:last-child {
	margin-right: 5px;
}
.headerbar span.time {
	clear: right;
	float: right;
	margin-top: 5px;
}
.body-top-bar .headerbar {
	margin-top: 1px;
}

/* Body top (global search & pagination)
--------------------------------------------- */
.body-top { 
	background: url("{T_IMAGESET_PATH}/images/forumliner-top.png") repeat-x; 
	height: 21px;
	position: relative; 
}
.body-top #fix-left1, .body-top #fix-left2, .body-top #fix-right1, .body-top #fix-right2 {
	position: absolute;
	width: 22px;
	top: 0;
}
.body-top #fix-left1 { background: url("{T_IMAGESET_PATH}/images/forumliner-fix-left1.gif") no-repeat; height: 121px; left: 0; }
.body-top #fix-left2 { background: url("{T_IMAGESET_PATH}/images/forumliner-fix-left2.gif") no-repeat; height: 121px; left: 0; }
.body-top #fix-right1 { background: url("{T_IMAGESET_PATH}/images/forumliner-fix-right1.gif") no-repeat; height: 100px; right: 0; }
.body-top #fix-right2 { background: url("{T_IMAGESET_PATH}/images/forumliner-fix-right2.gif") no-repeat; height: 100px; right: 0; }

#search-box { 
	background: url("{T_IMAGESET_PATH}/images/forumliner-top-left.gif") no-repeat 0 0; 
	height: 39px;
	width: 355px;
	position: absolute;
	bottom: 0;
	left: 12px;
}
#search-box .qs-title {
	background: url("{T_IMAGESET_PATH}/{S_USER_LANG}/forum-menu-quicksearch.gif") no-repeat 0 0;
	width: 85px;
	height: 17px;
	position: absolute;
	left: 6px;
	top: -6px;
}
#search-box .qs-advanced {
	background: url("{T_IMAGESET_PATH}/{S_USER_LANG}/forum-menu-advanced-search.gif") no-repeat 0 0;
	height: 17px;
	width: 107px;
	position: absolute;
	left: 94px;
	top: -6px;
}
#search-box .qs-advanced:hover { 
	background-position: 0 100%;
}
#search-box .qs-button {
	background: url("{T_IMAGESET_PATH}/{S_USER_LANG}/forum-menu-search.gif") no-repeat;
	height:39px;
	width: 74px;
	border: none;
	padding: 0;
	text-indent: -5000px;
	text-transform: capitalize;
}
#search-box input {
	vertical-align: top;
}
#search-box input.inputbox {
	margin: 11px 0 0 12px;
	padding: 2px;
	width: 176px;
	background: #0D1A2D url("{T_IMAGESET_PATH}/images/forum-menu-search-tile.gif") repeat-x scroll 0 0;
	border: 1px solid #7F7F7F;
	border-radius: 2px;
}
#search-box input.inputbox:focus {
	border: 1px solid #11A3EA;
}

/* Breadcrump and navbar
--------------------------------------------- */
#breadcrumb {
	background: url("{T_IMAGESET_PATH}/images/grey-bar-wide.gif") repeat-x;
	height: 35px;
}
#breadcrumb ul.navlinks {
	margin: 0;
	padding: 0 25px;
	height: auto;
	overflow: visible;
}
#breadcrumb li.rightside {
	margin: 7px 0 0 7px;
	line-height: 1.5em;
}
#breadcrumb li.rightside a {
	font-weight: normal;
	font-size: 0.9em;
}
#breadcrumb li.nav-link, #breadcrumb li.icon-faq {
	padding: 0 0 0 10px;
	margin-right: 3px;
	line-height: 32px;
	position: relative;
	background: url("{T_IMAGESET_PATH}/images/icons/flyout-arrows.gif") -2px -111px no-repeat;
}
#breadcrumb li.nav-link a, #breadcrumb li.icon-faq a {
	max-width: 200px;
	padding: 0 5px;
	display: block;
	text-overflow: ellipsis;
	white-space: nowrap;
	overflow: hidden;
	text-decoration: none;
	font-weight: normal;
}
#breadcrumb li.icon-home {
	 background: url("{T_IMAGESET_PATH}/images/icons/icon_home.png") 0 50% no-repeat !important;
	 padding: 0 0 0 15px;
}
#breadcrumb li.nav-link.lock {
	background: url("{T_IMAGESET_PATH}/images/icons/lock-accent.png") 0 60% no-repeat;
	padding: 0;
	width: 20px;
	height: 32px;
}
#breadcrumb li.nav-link a span {
	border-bottom: 1px dotted #8C6407;
}
#breadcrumb li.nav-link a:hover span {
	border-bottom-color: #FFF;
}
#breadcrumb li.nav-link div {
	position: absolute;
	width: auto;
	background: #101010;
	background: rgba(15, 15, 15, 0.97);
	border: 1px solid #353535;
	border-radius: 5px;
	box-shadow: 0 0 10px #000000;
	padding: 1px;
	z-index: 75;
	
	display: none;
	top: 28px;
	left: 15px;
}
#breadcrumb li.nav-link div div { z-index: 80; }
#breadcrumb li.nav-link div div div { z-index: 85; }
#breadcrumb li.nav-link div div div div { z-index: 90; }
#breadcrumb li.nav-link div div div div div { z-index: 95; }

#breadcrumb li.nav-link li:hover > div {
	display: block;
}
#breadcrumb li.nav-link div div {
	left: 195px;
	top: -2px;
}
#breadcrumb li.nav-link ul {
	width: 200px;
	float: left;
	list-style: none outside none;
	margin: 0;
	padding: 0;
}
#breadcrumb li.nav-link li {
	margin: 0;
	clear: both;
	position: relative;
	float: none;
	line-height: 18px;
	line-height: 1.8rem;
	border-bottom: 1px solid #2A292B;
}
#breadcrumb li.nav-link li:last-child {
	border-bottom: none;
}
#breadcrumb li.nav-link li a {
	display: block;
	padding: 4px 18px 4px 8px;
	font-weight: normal;
}
#breadcrumb li.nav-link li a:hover {
	background-color: #1C1B1A;
}
#breadcrumb li.nav-link li.children > a {
	background-image: url("{T_IMAGESET_PATH}/images/icons/flyout-arrows.gif");
	background-position: 99% -150px;
	background-repeat: no-repeat;
}
#breadcrumb li.nav-link li.children:hover > a {
	background-position: 99% -115px;
}
#breadcrumb li.nav-link li.current > a {
	color: #00C0FF;
}

/* Common for index and forums
--------------------------------------------- */
.index-left {
	width: auto;
	margin-right: 302px;
}
.index-right {
	float: right;
	width: 302px;
}
.forabg {
	background: #111;
	background: rgba(20,20,20,0.8);
	border: 1px solid #444;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,0.6);
	margin: 0 14px 10px 7px;
	padding: 0 5px;
	clear: left;
}
.forumbg {
	padding: 3px;
	border: 1px solid #575757;
	clear: both;
}
.index-left .forumbg, .index-right .forumbg{
	clear: none;
	border: none;
	padding: 0 13px 0 5px;
	padding: 0 1.3rem 0 0.5rem;
}
.section-memberlist .forumbg, .section-viewonline .forumbg, #simple-wrap .forumbg, .section-dkp .forumbg {
	padding: 0;
	border: none;
}

.panel {
	margin-bottom: 4px;
	padding: 8px 10px;
	color: #CCC;
	background: #111;
	background: rgba(20,20,20,0.7);
	border: 1px solid #444;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,0.6);
	/*display: block;
	overflow: hidden;*/
}

.post, .poll, .wow-topics {
	padding: 0;
	margin-top: 3px;
	background-repeat: no-repeat;
	background-position: 100% 0;
	box-shadow: 0px 2px 4px rgba(0,0,0,0.6);
}

.wow-topics {
	clear: both;
}

.innerborder1, .innerborder2, .innerbg1 {
	padding: 2px;
	border: solid 1px #000;
}
.innerborder1 {
	background-color: #1B1B1B;
}
.innerborder2 {
	background-color: #313131;
	transition: box-shadow 0.25s ease-in-out 0s;
}
.poll .innerbg1, .wow-topics .innerbg1 {
	padding: 0;
}
.post:hover .innerborder2, .poll:hover .innerborder2, 
.post:active .innerborder2, .poll:active .innerborder2 {
	box-shadow: 0 0 2px 2px #FFB019;
}
.wow-topics .panel {
	margin-bottom: 0;
}

.bg1 { background: rgba(49,49,49,0.75); }
.bg2 { background: rgba(27,27,27,0.75); }
.bg3 { background: rgba(20,20,20,0.75); }

.bg1 .innerbg1 {
	background: #313131;
	background: #313131 linear-gradient(to bottom, rgba(23,23,23,1) 0,rgba(49,49,49,0) 82px);
}
.bg1 .innerbg2 { 
	background: linear-gradient(to top, rgba(26,26,26,1) 0,rgba(49,49,49,0) 46px);
}
.bg2 .innerbg1, .wow-topics .innerbg1 { 
	background: #1B1B1B;
	background: #1B1B1B linear-gradient(to bottom, rgba(14,14,14,1) 0,rgba(27,27,27,0) 82px);
}
.bg2 .innerbg2, .wow-topics .innerbg2 {
	background: linear-gradient(to top, rgba(14,14,14,1) 0,rgba(27,27,27,0) 38px);
}

.rowbg {
	margin: 5px 5px 2px 5px;
}

/* Damn old corners, hate them
--------------------------------------------- */
span.corners-top, span.corners-bottom, span.corners-top span, span.corners-bottom span {
	font-size: 1px;
	line-height: 1px;
	display: block;
	height: 0;
	background-repeat: no-repeat;
}

span.corners-top {
	background-image: none;
	/*margin: 0 -5px;*/
}

span.corners-top span {
	background-image: none;
}

span.corners-bottom {
	background-image: none;
	/*margin: 0 -5px;*/
	clear: both;
}

span.corners-bottom span {
	background-image: none;
}

.headbg span.corners-bottom {
	margin-bottom: -1px;
}

/* Horizontal lists
----------------------------------------*/
ul.linklist {
	display: block;
	margin: 0;
}

ul.linklist li {
	display: block;
	list-style-type: none;
	float: left;
	width: auto;
	margin-right: 5px;
	font-size: 11px;
	font-size: 1.1rem;
	line-height: 24px;
	line-height: 2.4rem;
}

ul.linklist li.rightside, p.rightside {
	float: right;
	margin-right: 0;
	margin-left: 5px;
	text-align: right;
}

ul.navlinks {
	padding: 5px;
	margin-bottom: 1px;
	font-weight: bold;
}

ul.leftside {
	float: left;
	margin-left: 0;
	margin-right: 5px;
	text-align: left;
}

ul.rightside {
	float: right;
	margin-left: 5px;
	margin-right: -5px;
	text-align: right;
}

/* Table styles
----------------------------------------*/
table.table1 {
	/* See tweaks.css */
	margin-bottom: 5px;

	border: 1px solid #575757;
	border-spacing: 0;
	padding: 3px;
	box-shadow: 0 0 1px 1px #000;
	background: #1B1B1B;
	background: linear-gradient(to top, rgba(13,13,13,1) 0,rgba(27,27,27,0) 46px), linear-gradient(to bottom, rgba(12,12,12,1) 0,rgba(27,27,27,0) 82px) #1B1B1B;
}

#ucp-main table.table1 {
	padding: 2px;
}

table.table1 thead {
	background: #111;
	background: rgba(0,0,0,0);
}

table.table1 thead th {
	font-weight: normal;
	text-transform: uppercase;
	color: #FFFFFF;
	line-height: 13px;
	line-height: 1.3rem;
	font-size: 10px;
	font-size: 1rem;
	padding: 0 0 4px 3px;
}

table.table1 thead th span {
	padding-left: 7px;
}

table.table1 tbody tr.bg1 {
	background: #252525;
	background: #252525 linear-gradient(to bottom, rgba(30,30,30,1) 0,rgba(37,37,37,0) 35px); 
}

table.table1 tbody tr.bg2 {
	background: #161616;
	background: #161616 linear-gradient(to bottom, rgba(11,11,11,1) 0,rgba(22,22,22,0) 35px); 
}

table.table1 tbody tr.bg1:hover, table.table1 tbody tr.bg1.hover {
	background: #252525;
	background: #252525 linear-gradient(to top, rgba(30,30,30,1) 0,rgba(37,37,37,0) 35px); 
}

table.table1 tbody tr.bg2:hover, table.table1 tbody tr.bg2.hover {
	background: #161616;
	background: #161616 linear-gradient(to top, rgba(11,11,11,1) 0,rgba(22,22,22,0) 35px); 
}

table.table1 tbody tr:hover td, table.table1 tbody tr.hover td {
	color: #FFF;
}

table.table1 td {
	color: #CCC;
	font-size: 11px;
	font-size: 1.1rem;
}

table.table1 tbody td {
	padding: 5px;
	border-top: 1px solid #000;
}

table.table1 tbody .bg1 td {
	border: 1px solid;
	border-color: #000000 #161616 #252525 #252525;
}

table.table1 tbody .bg2 td {
	border: 1px solid;
	border-color: #000000 #101010 #161616 #161616;
}

table.table1 tbody th {
	padding: 5px;
	border-bottom: 1px solid #000000;
	text-align: left;
	color: #CCC;
	background-color: #000;
}

/* Specific column styles */
table.table1 .name		{ text-align: left; }
table.table1 .posts		{ text-align: center !important; width: 7%; }
table.table1 .joined	{ text-align: left; width: 15%; }
table.table1 .active	{ text-align: left; width: 15%; }
table.table1 .mark		{ text-align: center; width: 7%; }
table.table1 .info		{ text-align: left; width: 30%; }
table.table1 .info div	{ width: 100%; white-space: normal; overflow: hidden; }
table.table1 .autocol	{ line-height: 2em; white-space: nowrap; }
table.table1 thead .autocol { padding-left: 1em; }

table.table1 span.rank-img {
	float: right;
	width: auto;
}

table.info td {
	padding: 3px;
}

table.info tbody th {
	padding: 3px;
	text-align: right;
	vertical-align: top;
	color: #FFF;
	font-weight: normal;
}

.forumbg table.table1 {
	margin: 0;
}

/* Misc layout styles
---------------------------------------- */
/* column[1-2] styles are containers for two column layouts 
   Also see tweaks.css */
.column1 {
	float: left;
	clear: left;
	width: 49%;
}

.column2 {
	float: right;
	clear: right;
	width: 49%;
}

/* General classes for placing floating blocks */
.left-box {
	float: left;
	width: auto;
	text-align: left;
}

.right-box {
	float: right;
	width: auto;
	text-align: right;
}

dl.details {
	/*font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;*/
	font-size: 1.1em;
}

dl.details dt {
	float: left;
	clear: left;
	width: 30%;
	text-align: right;
	color: #DDD;
	display: block;
}

dl.details dd {
	margin-left: 0;
	padding-left: 5px;
	margin-bottom: 5px;
	color: #BBB;
	float: left;
	width: 65%;
}

/* Pagination
---------------------------------------- */
.pagination {
	height: 1%; /* IE tweak (holly hack) */
	width: auto;
	text-align: right;
	margin-top: 5px;
	float: right;
}
.pagination span.page-sep {
	display: none;
}
li.pagination {
	margin-top: 0;
}
.pagination strong, .pagination b {
	font-weight: normal;
}
.pagination span strong {
	padding: 0 2px;
	margin: 0 2px;
	font-weight: normal;
	color: #FFFFFF;
	background-color: #0D1A2D;
	border: 1px solid #B28910;
	font-size: 0.9em;
}
.pagination span a, .pagination span a:link, .pagination span a:visited, .pagination span a:active {
	font-weight: normal;
	text-decoration: none;
	color: #CCC;
	margin: 0 2px;
	padding: 0 2px;
	background-color: #1A1A1A;
	border: solid 1px #575757;
	font-size: 0.9em;
	line-height: 1.5em;
}
.pagination span a:hover {
	border-color: #FFF !important;
	background-color: #000;
	color: #FFF !important;
	text-decoration: none;
	box-shadow: 0 0 3px 1px rgba(0,192,255,0.7) !important;
}
.pagination span a:active, .body-top .pagination span a:active {
	background-color: #FFB019 !important;
	border-color: #FFB019 !important;
	color: #000 !important;
	text-decoration: none;
	box-shadow: none !important;
}
.pagination img {
	vertical-align: middle;
}
.pagination a.left {
	margin-right: 8px;
}
.pagination a.right {
	margin-left: 8px;
}

/* Pagination in viewforum for multipage topics */
.row .pagination {
	display: block;
	float: right;
	width: auto;
	margin-top: 0;
	padding: 1px 0 1px 15px;
	font-size: 0.9em;
	background: url("{T_IMAGESET_PATH}/images/icons/icon_pages.png") 0 50% no-repeat;
	color: #CCC;
}

/* Pagination for page-head */
#pagination-box { 
	background: url("{T_IMAGESET_PATH}/images/forumliner-top-right.gif") no-repeat 0 0;
	height: 39px;
	position:absolute;
	bottom: 0;
	right: 12px;
}
#pagination-box > div {
	background: url("{T_IMAGESET_PATH}/images/forumliner-top-right-end.gif") no-repeat 100% 0;
	height: 39px;
	padding: 0 10px 0 85px;
}
#pagination-box .pagination { 
	margin-top:11px;
	line-height: 20px;
	line-height: 2rem;
}
#pagination-box .page-jump {
	margin: 0 10px 0 5px;
}
#pagination-box span strong {
	font-weight: bold;
	padding: 3px 4px;
	border: 1px solid #FFB019;
	border-radius: 3px;
	font-size: 10px;
	font-size: 1rem;
}
#pagination-box span a, #pagination-box span a:link, #pagination-box span a:visited, #pagination-box span a:active {
	color: #FFB019;
	padding: 3px 4px;
	border: 1px solid #b28910;
	border-radius: 3px;
	font-size: 10px;
	font-size: 1rem;
	background-color: #0D1A2D;
}
#pagination-box span a:hover {
	font-weight: bold;
	background-color: #0D1A2D;
}

/* Miscellaneous styles
---------------------------------------- */
#forum-permissions {
	float: right;
	width: auto;
	padding-left: 5px;
	margin-left: 5px;
	margin-top: 10px;
	text-align: right;
}

.copyright {
	padding: 5px;
	text-align: center;
	color: #555555;
	position: relative;
}

.small {
	font-size: 0.9em !important;
}

.titlespace {
	margin-bottom: 15px;
}

.headerspace {
	margin-top: 20px;
}

.error {
	color: #FF1111;
	font-weight: bold;
	font-size: 12px;
	font-size: 1.2rem;
}

.reported {
	background-color: #f7f7f7;
}

li.reported:hover {
	background-color: #AA1111 !important;
}

div.rules {
	background-color: #222;
	background: none repeat scroll 0 0 rgba(20, 20, 20, 0.8);
	border: solid 1px #AA1111;
	padding: 5px 10px;
	padding: 0.5rem 1rem;
	margin: 10px 0;
	margin: 1rem 0;
	font-size: 11px;
	font-size: 1.1rem;
	color: #FFF;
}

div.rules strong {
	font-size: 13px;
	font-size: 1.3rem;
}

div.rules dt {
	font-weight: bold;
	padding: 5px 5px 0;
	font-size: 14px;
	font-size: 1.4rem;
	text-align: center;
	color: #FF1111;
}
div.rules dd {
	text-align: justify;
	padding: 10px;
}

div.rules ul, div.rules ol {
	margin-left: 20px;
}

p.rules {
	background-color: #222;
	background-image: none;
	border: solid 1px #AA1111;
	padding: 5px;
	padding: 0.5rem;
	margin: 10px;
	margin: 1rem;
	box-shadow: 1px 1px 1px 0 rgba(0,0,0,0.4);
}

p.rules img {
	vertical-align: middle;
	padding-right: 5px;
}

p.rules a {
	vertical-align: middle;
	clear: both;
}

.wow-topics div.rules {
	background: none;
	border: 1px solid #575757;
    clear: both;
    padding: 3px;
	margin: 0;
	/*box-shadow: 0px 0px 8px 2px rgba(255,0,0,1);*/
}
.wow-topics div.rules dl {
	
}
.wow-topics div.rules dt {
	background: #320000;
	background: linear-gradient(to bottom, rgba(40,1,1,1) 0,rgba(60,5,5,1) 25px);
	border-top: 1px solid #600C0C;
	border-left: 1px solid #500C0C;
    border-right: 1px solid black;
	border-bottom: 1px solid black;
    color: #FFFFFF;
    font-weight: bold;
	padding: 7px;
}
.wow-topics div.rules dd {
	color: #FFF;
	text-align: justify;
	padding: 10px;
}

#top {
	position: absolute;
	top: -20px;
}

.clear {
	display: block;
	clear: both;
	font-size: 1px;
	line-height: 1px;
	background: transparent;
}

.quick-style {
	position: absolute;
	color: #555555;
	margin-top: 5px;
	z-index: 10;
}
.quick-style span {
	font-size: 9px;
	font-size: 0.9rem;
	vertical-align: middle;
}
.quick-style select {
	font-size: 0.9em;
}

#top-bar {
	background: url("{T_IMAGESET_PATH}/images/bar-bg.jpg") no-repeat scroll 50% 100% #002540;
	border-bottom: 1px solid #05517E;
	box-shadow: 0 0 3px 3px #000000;
	font-family: Arial,sans-serif;
	font-size: 13px;
	font-size: 1.3rem;
	/*height: 40px;*/
	line-height: 40px;
	/*width: 100%;*/
}
#top-bar > div {
	border-right: 3px solid #042E45;
	border-left: 1px solid #011323;
	height: 40px;
	margin: 0 auto;
	min-width: 670px;
	max-width: 990px;
}
#top-bar span, #top-bar a.cell {
	border-left: 2px solid #042E45;
	border-right: 1px solid #011323;
	display: inline-block;
	float: left;
	height: 40px;
	padding: 0 17px;
	font-weight: bold;
	text-shadow: 1px 1px #000000;
}
#top-bar span {
	color: #FFF;
}
#top-bar > div *:last-child {
	border-right: none !important;
}
#top-bar a.cell:hover {
	background-color: rgba(255, 255, 255, 0.05);
	text-decoration: none;
}
#top-bar .quick-style {
	margin-top: 0;
	display: inline-block;
	float: right;
	position: relative;
	padding-right: 15px;
}
#top-bar .quick-style span {
	border-left: none;
	font-size: 12px;
	font-size: 1.2rem;
	padding-right: 10px;
	border-right: none;
}
#top-bar .quick-style select {
	border-color: #15618E;
	font-size: 10px;
	font-size: 1rem;
}
.top-bar-fixed #top-bar {
	width: 100%;
	position: fixed;
	top: 0;
	z-index: 1000;
}
.top-bar-fixed #wrapper {
	margin-top: 41px;
}

/* =Media queries
-------------------------------------------------------------- */

/* Small devices. */
@media screen and (max-width: 700px) {
	.quick-style {
		margin-top: 0;
	}
}

@media screen and (max-width: 859px) {
	.headerbar {
		margin: 0 0 15px 10px;
	}
	#logo-wrap {
		min-height: 140px;
	}
	#logo {
		margin: 0 0 25px 0;
		width: 200px;
		height: 100px;
	}
	.body-top.headpagi {
		background: url("{T_IMAGESET_PATH}/images/forumliner-top-right.gif") no-repeat 75%;
		height: 39px;
		margin-top: -18px;
	}
	.body-top.headpagi #search-box {
		width: auto;
	}
	#search-box {
		left: 0;
	}
	#pagination-box {
		background-position: -100px 0;
		right: 0;
	}
	#pagination-box > div {
		padding-left: 10px;
	}
	#pagination-box a.page-jump, #fix-left1, #fix-left2, #fix-right1, #fix-right2 {
		display: none;
	}
	#breadcrumb ul.navlinks {
		padding: 0 10px;
	}
}

@media screen and (max-width: 999px) {
	body {
		background-position: 50% 0;
	}
	body.body-top-bar {
		background-position: 50% 41px;
	}
	body.bg-fixed {
		background-attachment: scroll;
	}
	#pagination-box a.page-jump {
		display: none;
	}
	#top-bar {
		border-bottom: none;
	}
	#top-bar > div {
		background: url("{T_IMAGESET_PATH}/images/bar-bg.jpg") no-repeat scroll -100px 100% #002540;
		border-bottom: 1px solid #05517E;
		border-left: none;
		border-right: none;
	}
	#video-background {
		display: none !important;
	}
}

@media screen and (min-width: 1000px) {
	#wrapper {
		position: relative;
		overflow: hidden;
		min-height: 850px;
	}
	#video-background video {
		opacity: 0;
	}
}
/* Link Styles
---------------------------------------- */

/* Links adjustment to correctly display an order of rtl/ltr mixed content */
a {
	direction: ltr;
	unicode-bidi: embed;
}

a:link	{ color: #FFB019; text-decoration: none; }
a:visited	{ color: #FFB019; text-decoration: none; }
a:hover	{ color: #FFF; text-decoration: underline; }
a:active	{ color: #00C0FF; text-decoration: none; }

/* Coloured usernames */
.username-coloured {
	font-weight: bold;
	display: inline !important;
	padding: 0 !important;
}

/* Links on gradient backgrounds */
.navbg a:link, .forumbg .header a:link, .forabg .header a:link, th a:link {
	color: #FFFFFF;
	text-decoration: none;
}

.navbg a:visited, .forumbg .header a:visited, .forabg .header a:visited, th a:visited {
	color: #FFFFFF;
	text-decoration: none;
}

.navbg a:hover, .forumbg .header a:hover, .forabg .header a:hover, th a:hover {
	color: #FFB019;
	text-decoration: underline;
}

.navbg a:active, .forumbg .header a:active, .forabg .header a:active, th a:active {
	color: #00C0FF;
	text-decoration: none;
}

/* Links for forum/topic lists */
a.forumtitle {
	font-family: "Trebuchet MS", Helvetica, Arial, Sans-serif;
	font-size: 1.2em;
	font-weight: bold;
	text-decoration: none;
}

a.forumtitle:hover {
	text-decoration: underline;
}

a.topictitle {
	font-family: "Trebuchet MS", Helvetica, Arial, Sans-serif;
	font-size: 1.3em;
	font-weight: bold;
	text-decoration: none;
}

a.topictitle:hover {
	text-decoration: underline;
}


/* Post body links */
.postlink {
	text-decoration: none;
	border-bottom: 1px dotted #FFB019;
	padding-bottom: 0;
}

.postlink:visited {
	color: #D38D01;
	border-bottom-color: #D38D01;
}

.postlink:active {
	color: #00C0FF;
	border-bottom-color: #FFF;
}

.postlink:hover {
	text-decoration: none;
	color: #FFF;
	border-bottom-color: #00C0FF;
}

.signature a, .signature a:visited, .signature a:hover, .signature a:active {
	border: none;
	text-decoration: underline;
	background-color: transparent;
}

/* Profile links */
.postprofile a:link, .postprofile a:visited, .postprofile dt.author a {
	font-weight: bold;
	/*color: #FFB019;*/
	text-decoration: none;
}

.postprofile a:hover, .postprofile dt.author a:hover {
	text-decoration: none;
	color: #FFF !important;
}

.postprofile dt.author a {
	font-size: 12px;
	font-size: 1.2rem;
}

/* CSS spec requires a:link, a:visited, a:hover and a:active rules to be specified in this order. */
/* See http://www.phpbb.com/bugs/phpbb3/59685 */
.postprofile a:active {
	font-weight: bold;
	color: #00C0FF;
	text-decoration: none;
}


/* Profile searchresults */	
.search .postprofile a {
	text-decoration: none; 
	font-weight: normal;
}

.search .postprofile a:hover {
	text-decoration: underline; 
}

/* Back to top of page */
.back2top {
	clear: both;
	height: 11px;
	text-align: right;
}
.back2top2 {
	position: absolute;
	bottom: 2px;
	right: 3px;
}

a.top {
	background: url("{T_IMAGESET_PATH}/images/icons/arrow_up_big.png") no-repeat 1px 3px;
	text-decoration: none;
	width: 15px;
	height: 15px;
	display: block;
	float: right;
	overflow: hidden;
	text-indent: 20px;
	text-transform: capitalize;
}
a.top2 {
	background: url("{T_IMAGESET_PATH}/images/icons/arrow_up_big.png") no-repeat 0px 3px;
	text-decoration: none;
	padding-left: 15px;
	font-size: 11px;
	font-size: 1.1rem;
}
a.top:hover {
	background-position: 1px -48px;
}
a.top2:hover {
	background-position: 0px -48px;
}

/* Arrow links  */
a.up		{ background: url("{T_IMAGESET_PATH}/images/icons/arrow_up.png") no-repeat 0 3px transparent; }
a.down		{ background: url("{T_IMAGESET_PATH}/images/icons/arrow_down.png") no-repeat 100% 3px transparent; }
a.left		{ background: url("{T_IMAGESET_PATH}/images/icons/arrow_left.png") no-repeat 3px 3px transparent; }
a.right		{ background: url("{T_IMAGESET_PATH}/images/icons/arrow_right.png") no-repeat 95% 3px transparent; }

a.up, a.up:link, a.up:active, a.up:visited {
	padding-left: 12px;
	text-decoration: none;
	border-bottom-width: 0;
}

a.up:hover {
	background-position: 0 -47px;
	background-color: transparent;
}

a.down, a.down:link, a.down:active, a.down:visited {
	padding-right: 12px;
}

a.down:hover {
	background-position: 100% -47px;
	text-decoration: none;
}

a.left, a.left:active, a.left:visited {
	padding-left: 15px;
}

a.left:hover {
	text-decoration: none;
	background-position: 0 -47px;
}

a.right, a.right:active, a.right:visited {
	padding-right: 15px;
}

a.right:hover {
	color: #FFF;
	text-decoration: none;
	background-position: 100% -47px;
}

/* invisible skip link, used for accessibility  */
.skiplink {
	position: absolute;
	left: -999px;
	width: 990px;
}

/* Feed icon in forumlist_body.html */
a.feed-icon-forum {
	float: right;
	margin: 3px;
}
/* Content Styles
---------------------------------------- */

/* Collapse styling */

.wow-index h2, .index-extra h2, .index-right h2 {
	font-size: 20px;
	font-size: 2rem;
	line-height: 40px;
	line-height: 4rem;
	margin: 0 10px 0 5px;
	margin: 0 1rem 0 0.5rem;
	padding-left: 10px;
	padding-left: 1rem;
	letter-spacing: -0.05em;
	text-transform: uppercase;
	color: #888;
	font-family: Verdana, Helvetica, Arial, sans-serif;
	transition: border-bottom 0.20s ease-in-out 0s;
}
.wow-index h2 a, .index-extra h2 a, .index-right h2 a {
	color: #888;
	display: block;
	white-space: nowrap;
}
.wow-index h2 a:hover, .index-extra h2 a:hover, .index-right h2 a:hover, h2.toggle:hover a
.wow-index h2 a:active, .index-extra h2 a:active, .index-right h2 a:active, h2.toggle:active a {
	color: #FFF;
	text-decoration: none;
}
h2.toggle {
	background: url("{T_IMAGESET_PATH}/images/icons/toggler.png") 0 11px no-repeat;
	padding-left: 0;
}
h2.toggle:hover {
	background-position: 0 -105px;
}
h2.toggle.close {
	background-position: 0 -47px;
	border-bottom: 1px solid #444;
}
h2.toggle.close:hover {
	background-position: 0 -163px;
	border-bottom: 1px solid #CCC;
}
h2.toggle > a {
	padding-left: 25px;
}
.inner-footer h2.toggle {
	background-position: 0 0;
	display: inline-block;
	margin: 0 0 0 5px;
	line-height: 20px;
	line-height: 2rem;
}
.inner-footer h2.toggle:hover {
	background-position: 0 -116px;
	border-bottom: none;
}
.inner-footer h2.toggle.close {
	background-position: 0 -58px;
	border-bottom: none;
}
.inner-footer h2.toggle.close:hover {
	background-position: 0 -174px;
	border-bottom: none;
}


/* Custom Index styling
---------------------------------------- */
.wow-index {
	padding: 0 5px;
	padding: 0 0.5rem;
	margin-bottom: 10px;
	clear: left;
}
.index-left .index-extra {
	padding: 0 11px 0 5px;
	padding: 0 1.1rem 0 0.5rem;
}
.wow-index .forabg {
	margin: 0 0 15px 0;
	margin: 0 0 1.5rem 0;
	padding: 0;
	/*overflow: hidden;*/
	background: none;
	box-shadow: none;
	border: none;
}
.wow-index ul.forums { 
	background: none; 
}
.wow-index li.wow-forum, .index-extra div.block, .index-right div.block {
	float: left;
	display: block;
	position: relative;
	background: #141414;
	background: rgba(20,20,20,0.8);
	width: 300px;
	border: 1px solid #444;
	margin: 2px;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,0.6);
}
.wow-index li.wow-forum {
	min-height: 110px;
}
.wow-index li.wow-forum:last-child {
	margin-bottom: 15px;
	margin-bottom: 1.5rem;
}
.wow-index a.forum-link {
	display: block;
	padding: 10px 10px 0 0;
	padding: 1rem 1rem 0 0;
}
.wow-index .forum-image {
	background: none 50% 20% no-repeat;
	float: left;
	display: block;
	height: 54px;
	height: 5.4rem;
	width: 54px;
	width: 5.4rem;
    padding: 0;
	margin: 0;
	text-align: center;
}
.wow-index .forum-info {
	display: block;
	margin: 0 0 15px 54px;
	margin: 0 0 1.5rem 5.4rem;
}
.wow-index .forum-title, .wow-index .subforums-menu a {
	display: block;
	font-size: 12px;
	font-size: 1.2rem;
	line-height: 18px;
	line-height: 1.8rem;
	font-weight: bold;
}
.wow-index .forum-description {
	font-size: 11px;
	font-size: 1.1rem;
	line-height: 16px;
	line-height: 1.6rem;
	font-weight: normal;
	color: #877B69;
}
.wow-index .forum-link:hover .forum-description {
	color: #FFF;
}
.wow-index .forum-stats, .wow-recent dd.topic-stats, .online-pagelink {
	position: absolute;
	bottom: 3px;
	right: 3px;
	color: #4A4A4A;
}
.wow-index .new-icon {
	background: url("{T_IMAGESET_PATH}/images/icons/new-icon.gif") no-repeat 0 0;
	width: 19px;
	height: 15px;
	margin-left: 2px;
	display: inline-block;
	vertical-align: text-top;
}
.wow-index .extra-icons, .wow-recent .extra-icons {
	position: absolute;
	top: 3px;
	right: 3px;
}
.wow-index a.last-post-icon, .wow-recent a.last-post-icon {
	background: url("{T_IMAGESET_PATH}/icon_topic_latest.gif") no-repeat 50% 50%;
	width: 11px;
	height: 9px;
	padding: 2px 0;
	display: inline-block;
	vertical-align: text-bottom;
	text-indent: -5000px;
	text-transform: capitalize;
}
.wow-index .locked-icon {
	background: url("{T_IMAGESET_PATH}/images/icons/lock-icon.gif") no-repeat 50% 50%;
	width: 15px;
	height: 16px;
	display: inline-block;
	vertical-align: text-bottom;
	text-indent: -5000px;
	text-transform: capitalize;
}
.wow-index a:hover {
	text-decoration: none;
}
.wow-index .wow-forum {
	transition:	box-shadow 0.25s ease-out 0s;
}
.wow-index .wow-forum:hover,
.wow-index .wow-forum:active {
	border-color: #00C0FF;
}
.wow-index .subforums-button {
	background: url("{T_IMAGESET_PATH}/images/icons/child-arrow-big.gif") no-repeat scroll 50% 100% transparent;
    display: block;
	position: absolute;
	margin: 0;
    height: 24px;
    width: 34px;
	top: 48px;
	left: 9px;
}
.wow-index .subforums-button:hover {
	background-position: 50% 33%;
}
.wow-index .subforums-button.active {
	background-position: 50% 66%;
}
.wow-index .subforums-button.active:hover {
	background-position: 50% 0;
}
.wow-index .subforums-menu {
	display: none;
	position: absolute;
	margin: 2px 2px 2px 5px;
	background: #141414;
	background: rgba(15,15,15,0.98);
	border: 1px solid #444;
	border-radius: 5px;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,0.7);
	z-index: 70;
	top: 70px;
	padding: 15px 15px;
	color: #CCC;
}
.wow-index .subforums-menu a {
	display: list-item;
	list-style: none;
	padding: 0 0 0 25px;
	margin: 15px 0;
	background: url("{T_IMAGESET_PATH}/images/icons/square-grey.gif") 5px 50% no-repeat;
}
.wow-index .subforums-menu a.unread {
	background: url("{T_IMAGESET_PATH}/images/icons/new-icon.gif") 0 50% no-repeat;
}
.wow-index .subforums-menu a:last-child {
	margin-bottom: 5px;
}
.section-viewforum .wow-index {
	padding: 0 5px;
}
.section-viewforum .wow-index h2 {
	display: none;
}
.section-viewforum .wow-index .forabg {
	margin-bottom: 4px;
}
.section-viewforum .wow-index li.wow-forum:last-child {
	margin-bottom: 5px;
}

/* NV Recent Topics
---------------------------------------- */
.wow-recent {
	display: block; 
}
.wow-recent h2 {
	margin: 0;
}
.wow-recent ul {
	list-style: none;
	border-top: 1px solid #444;
}
.wow-recent li {
	position: relative; 
	margin: 0; 
	padding: 10px 0; 
	border-bottom: 1px solid #222;
	transition:	background 0.15s ease-in-out 0s;
}
.wow-recent li:hover {
	background: rgba(20,20,20,0.8);
}
.wow-recent a.topictitle {
	font-size: 12px;
	font-size: 1.2rem;
}
.wow-recent a.forum {
	font-size: 10px;
	font-size: 1.0rem;
	color: #B07000;	
}
.wow-recent a:hover {
	text-decoration: none;
	color: #FFF !important;
}

/* Other blocks on the index
---------------------------------------- */
.index-right div.block {
	width: auto;
	height: auto;
	float: none;
	padding: 0 10px;
	margin: 10px 0 0;
}
.index-right div.block p {
	padding: 10px 0;
	margin: 0;
	border-bottom: 1px solid #444;
}
.index-right div.block p:last-child {
	border-bottom: none;
}
.index-right dl.icon {
	background-position: 5px 50%;
}
.index-right dl.icon dt {
	padding: 0 0 5px 40px;
}

.index-extra {
	padding: 0 5px;
	padding: 0 0.5rem;
	margin-bottom: 10px;
	clear: left;
}
.index-left .index-extra {
	padding: 0 11px 0 5px;
	padding: 0 1.1rem 0 0.5rem;
}
.index-extra.solo {
	padding: 0;
}
.index-extra div.block {
	width: auto;
	height: auto;
	float: none;
	padding: 10px;
}
.index-extra p {
	margin: 0;
}
.index-extra ul.linklist li {
	margin-top: 5px;
}

/* Topic and forum lists
---------------------------------------- */
ul.topiclist {
	display: block;
	list-style-type: none;
	margin: 0;
}
ul.topiclist li {
	display: block;
	list-style-type: none;
	/*color: #D7CEA4;*/
	margin: 0;
	transition: background 0.15s ease-in-out 0s; 
	text-shadow: 1px 1px 2px rgba(0,0,0,0.65);
}
ul.topiclist li.header {
	background: #111;
	background: rgba(0,0,0,0);
}
ul.topiclist li.bg1 {
	background: #252525;
	background: #252525 linear-gradient(to bottom, rgba(30,30,30,1) 0,rgba(37,37,37,0) 35px); 
	border: 1px solid;
	border-color: #000000 #000000 #252525 #252525;
}
ul.topiclist li.bg1 dt, ul.topiclist li.bg1 dd {
	border-left: 1px solid #252525;
	border-right: 1px solid #000;
}
ul.topiclist li.bg2 {
	background: #161616;
	background: #161616 linear-gradient(to bottom, rgba(11,11,11,1) 0,rgba(22,22,22,0) 35px); 
	border: 1px solid;
	border-color: #000000 #000000 #161616 #161616;
}
ul.topiclist li.bg2 dt, ul.topiclist li.bg2 dd {
	border-left: 1px solid #161616;
	border-right: 1px solid #000;
}
ul.topiclist li.bg1 dt, ul.topiclist li.bg2 dt {
	border-left: none;
}
ul.topics li.bg1:hover, ul.cplist li.bg1:hover, 
ul.topics li.bg1:active, ul.cplist li.bg1:active {
	background: #252525;
	background: #252525 linear-gradient(to top, rgba(30,30,30,1) 0,rgba(37,37,37,0) 35px); 
	color: #FFF;
}
ul.topics li.bg2:hover, ul.cplist li.bg2:hover, 
ul.topics li.bg2:active, ul.cplist li.bg2:active {
	background: #161616;
	background: #161616 linear-gradient(to top, rgba(11,11,11,1) 0,rgba(22,22,22,0) 35px); 
	color: #FFF;
}

ul.topiclist dl dd:last-child { border-right: none ;}

ul.topiclist dl {
	position: relative;
}

ul.topiclist li.row dl {
	padding: 2px 0;
}

ul.topiclist dt {
	display: block;
	float: left;
	width: 50%;
	font-size: 10px;
	font-size: 1.0rem;
	padding: 3px 5px 0;
	padding: 0.3rem 0.5rem 0;
}

ul.topiclist dd {
	display: block;
	float: left;
	border-left: 1px solid #161616;
	padding: 4px 0;
}

ul.topiclist dd.time {
	border-right: none !important;
}

ul.topiclist dfn {
	/* Labels for post/view counts */
	position: absolute;
	left: -999px;
	width: 990px;
}

ul.topiclist li.row dt a.subforum {
	background-image: none;
	background-position: 0 50%;
	background-repeat: no-repeat;
	position: relative;
	white-space: nowrap;
	padding: 0 0 0 12px;
}

.forum-image {
	float: left;
	padding-top: 5px;
	margin-right: 5px;
}

li.row {
	border-top: 1px solid #000;
	border-bottom: 1px solid #161616;
}

li.row strong {
	font-weight: normal;
	color: #FFF;
}

li.row:hover {
	background-color: #f6f6f6;
}

li.row:hover dd {
	border-left-color: #CCCCCC;
}

li.header dt, li.header dd {
	line-height: 1em;
	border-left-width: 0;
	margin: 2px 0 4px 0;
	color: #FFFFFF;
	padding-top: 2px;
	padding-bottom: 2px;
	font-size: 10px;
	font-size: 1rem;
	font-family: Arial, Helvetica, sans-serif;
	text-transform: uppercase;
	overflow: hidden;
	text-overflow: ellipsis;
}

li.header dt {
	font-weight: bold;
}

li.header dd {
	margin-left: 1px;
}

li.header dl.icon {
	min-height: 0;
}

li.header dl.icon dt {
	/* Tweak for headers alignment when folder icon used */
	padding-left: 0;
	padding-right: 50px;
	text-indent: 5px;
}

/* Forum list column styles */
dl.icon {
	min-height: 35px;
	background-position: 7px 50%;		/* Position of folder icon */
	background-repeat: no-repeat;
}

dl.icon dt {
	padding-left: 45px;					/* Space for folder icon */
	background-repeat: no-repeat;
	background-position: 5px 95%;		/* Position of topic icon */
}

dd.posts, dd.topics, dd.views {
	width: 8%;
	text-align: center;
	font-size: 12px;
	font-size: 1.2rem;
	line-height: 26px;
	line-height: 2.6rem;
}

/* List in forum description */
dl.icon dt ol,
dl.icon dt ul {
	list-style-position: inside;
	margin-left: 10px;
	margin-left: 1rem;
}

dl.icon dt li {
	display: list-item;
	list-style-type: inherit;
}

dd.lastpost {
	width: 24%;
	font-size: 1.0em;
}

dd.redirect {
	font-size: 11px;
	font-size: 1.1rem;
	line-height: 25px;
	line-height: 2.5rem;
}

dd.moderation {
	font-size: 1.1em;
}

dd.lastpost span, ul.topiclist dd.searchby span, ul.topiclist dd.info span, ul.topiclist dd.time span, dd.redirect span, dd.moderation span {
	display: block;
	padding-left: 5px;
}

dd.time {
	width: auto;
	line-height: 200%;
	font-size: 1.1em;
}

dd.extra {
	width: 12%;
	line-height: 200%;
	text-align: center;
	font-size: 1.1em;
}

dd.mark {
	float: right !important;
	width: 9%;
	text-align: center;
	line-height: 200%;
	font-size: 1.2em;
}

dd.info {
	width: 30%;
}

dd.option {
	width: 15%;
	line-height: 200%;
	text-align: center;
	font-size: 1.1em;
}

dd.searchby {
	width: 47%;
	font-size: 1.1em;
	line-height: 1em;
}

ul.topiclist dd.searchextra {
	margin-left: 5px;
	padding: 0.2em 0;
	font-size: 1.1em;
	color: #CCC;
	border-left: none;
	clear: both;
	width: 98%;
	overflow: hidden;
}

/* Container for post/reply buttons and pagination */
.topic-actions {
	margin: 0 4px 3px;
	font-size: 1.1em;
	height: 28px;
	min-height: 28px;
}
div[class].topic-actions {
	height: auto;
}

/* Footer tools
---------------------------------------- */
.inner-footer {
	margin-top: 15px;
}
.inner-footer div.left {
	width: 50%;
	float: left;
	text-align: left;
}
.inner-footer div.right {
	width: 50%;
	float: right;
	text-align: right;
}
.inner-footer div.left > div, .inner-footer div.right > div {
	padding: 4px;
}
.inner-footer div.inner {
	padding: 10px;
	border: 1px solid #232323;
	background: #111;
	background: rgba(18,18,18,0.75);
	color: #BBB;
}
.inner-footer div.inner p, .inner-footer div.inner fieldset {
	margin: 7px 0;
	font-size: 10px;
	font-size: 1rem;
	width: auto !important;
	float: none !important;
}
.inner-footer div.inner > *:first-child, .inner-footer div.inner > *:first-child fieldset {
	margin-top: 0 !important;
}
.inner-footer div.inner > *:last-child, .inner-footer div.inner > *:last-child fieldset {
	margin-bottom: 0 !important;
}
.inner-footer .left fieldset {
	text-align: left !important;
}
.inner-footer .right fieldset {
	text-align: right !important;
}
.inner-footer label {
	color: #BBB;
}
.inner-footer fieldset.display-options label {
	margin: 4px 0 4px 4px;
	padding: 0;
	display: inline-block;
}
.inner-footer fieldset.jumpbox, .inner-footer fieldset.quickmod, .inner-footer div.inner > h3:first-child  {
	padding-top: 3px;
}

/* Post body styles
----------------------------------------*/
.inner {
	position: relative;
}

.postbody {
	padding: 0;
	color: #CCC;
	width: auto;
	text-shadow: 1px 1px 2px rgba(0,0,0,0.75);
	line-height: 18px;
	line-height: 1.8rem;
}

.post .postbody {
	margin: 0 0 0 211px;
	padding-bottom: 10px;
}

.postbody .ignore {
	padding: 5px 10px;
	padding: 0.5rem 1rem;
	font-size: 11px;
	font-size: 1.1rem;
}

.postbody h3.first {
	/* The first post on the page uses this */
	font-size: 13px;
	font-size: 1.3rem;
}

.postbody h3 {
	/* Postbody requires a different h3 format - so change it here */
	padding: 2px 0 0 0;
	padding: 0.2rem 0 0 0;
	margin: 0 0 3px 10px !important;
	margin: 0 0 0.3rem 1rem !important;
	text-transform: none;
	border: none;
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
	line-height: 125%;
	font-size: 12px;
	font-size: 1.2rem;
}

.postbody h3 img {
	/* Also see tweaks.css */
	vertical-align: bottom;
}

.postbody p.author {
	margin: 0 150px 3px 10px;
	margin: 0 15rem 0.3rem 1rem;
}

.postbody .content {
	background: url("{T_IMAGESET_PATH}/images/postbody-top-left.png") no-repeat;
	text-align: justify;
	border-top: solid 1px #000;
	padding: 10px;
	padding: 1rem;
	font-size: 13px;
	font-size: 1.3rem;
	line-height: 18px;
	line-height: 1.8rem;
	opacity: 1 !important;
}

.postbody ul.profile-icons {
	opacity:0;
	transition:	all 0.25s ease-in-out 0s;
}

.post:hover ul.profile-icons, 
.post:active ul.profile-icons { 
	opacity:1; 
}

.post:target .content { 
	color: #DDD; 
}

.post:target h3 a { 
	color: #FFF; 
}

/* Topic review panel
----------------------------------------*/
#review {
	margin-top: 2em;
}

#topicreview {
	/*padding-right: 5px;*/
	overflow: auto;
	height: 300px;
	border: 1px solid #7C7C7C;
	margin: 5px 0;
}

#topicreview .postbody {
	width: auto;
	float: none;
	margin: 0;
	height: auto;
}

#topicreview .post {
	height: auto;
}

#topicreview .post:first-of-type {
	margin-top: 0;
}

#topicreview .bg1 { background: #2c2c2c; background: rgba(49,49,49,0.9); }
#topicreview .bg2 { background: #181818; background: rgba(27,27,27,0.9); }

#topicreview h2 {
	border-bottom-width: 0;
}

.post-ignore .postbody {
	display: none;
}

/* MCP Post details
----------------------------------------*/
#post_details
{
	/* This will only work in IE7+, plus the others */
	overflow: auto;
	max-height: 300px;
}

#expand
{
	clear: both;
}

/* Content container styles
----------------------------------------*/
.content {
	min-height: 3em;
	overflow: hidden;
	line-height: 1.4em;
	font-family: "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
	font-size: 1em;
	color: #CCC;
	padding-bottom: 1px;
}

.bg1 .content {
	color: #D4D4D4;
}

.content h2, .panel h2 {
	font-weight: normal;
	color: #00C0FF;
	border-bottom: 1px solid #888;
	font-size: 1.6em;
	margin: 0.5em 0;
	padding-bottom: 0.5em;
}

.panel h3 {
	margin: 0.6em 0 0.5em;
}

.panel p {
	font-size: 1.2em;
	margin-bottom: 1em;
	line-height: 1.4em;
}

.content p {
	font-family: "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
	font-size: 1.2em;
	margin-bottom: 1em;
	line-height: 1.4em;
}

dl.faq {
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	font-size: 11px;
	font-size: 1.1rem;
	margin-top: 10px;
	margin-top: 1rem;
	margin-bottom: 20px;
	margin-bottom: 2rem;
	line-height: 16px;
	line-height: 1.6rem;
}

dl.faq dt {
	font-weight: bold;
	color: #FFF;
}

.content dl.faq {
	font-size: 12px;
	font-size: 1.2em;
	margin-bottom: 6px;
	margin-bottom: 0.6rem;
	line-height: 17px;
	line-height: 1.7rem;
}

.content li {
	list-style-type: inherit;
}

.content ul, .content ol {
	margin-bottom: 1em;
	margin-left: 3em;
}

.content img {
	max-width: 100%;
}

.posthilit {
	background-color: #f3f3f3;
	color: #000;
	padding: 0 2px 1px 2px;
	text-shadow: none;
}

.announce, .unreadpost {
	/* Highlight the announcements & unread posts box */
	border-left-color: #BCBCBC;
	border-right-color: #BCBCBC;
}

/* Post author */
p.author {
	margin: 0 150px 6px 0;
	margin: 0 15rem 0.6rem 0;
	padding: 0 0 5px 0;
	padding: 0 0 0.5rem 0;
	font-family: Verdana, Helvetica, Arial, sans-serif;
	font-size: 10px;
	font-size: 1rem;
	line-height: 13px;
	line-height: 1.3rem;
}

/* Post signature */
.signature {
	margin: 15px 10px 0 10px;
	margin: 1.5rem 1rem 0 1rem;
	padding-top: 4px;
	padding-top: 0.4rem;
	font-size: 1.1em;
	border-top: 1px solid #7C7C7C;
	line-height: 140%;
	overflow: hidden;
}

dd .signature {
	margin: 0;
	padding: 0;
	clear: none;
	border: none;
}

.signature li {
	list-style-type: inherit;
}

.signature ul, .signature ol {
	margin-bottom: 1em;
	margin-left: 3em;
}

/* Post noticies */
.notice {
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	width: auto;
	margin: 15px 10px 0 10px;
	margin: 1.5rem 1rem 0 1rem;
	padding-top: 4px;
	padding-top: 0.4rem;
	font-size: 1em;
	border-top: 1px dashed #CCCCCC;
	clear: left;
	line-height: 130%;
}

/* Jump to post link for now */
ul.searchresults {
	list-style: none;
	text-align: right;
	clear: both;
}
a.jumptopost {
	position: absolute;
	bottom: 5px;
	right: 5px;
	padding-right: 17px;
	background-position: 97% 3px;
}

/* BB Code styles
----------------------------------------*/
/* Quote block */
blockquote {
	background: url("{T_IMAGESET_PATH}/images/icons/quote.gif") 6px 8px no-repeat, linear-gradient(to bottom, rgba(0,0,0,0.25) 0,rgba(0,0,0,0) 30%);
	border: 1px solid #777;
	font-size: 0.95em;
	margin: 0.5em 1px 0 25px;
	overflow: hidden;
	padding: 6px 10px 10px 10px;
	padding: 0.6rem 1rem 1rem 1rem;
	box-shadow: 1px 1px 1px 1px rgba(0,0,0,0.4);
	color: #CCC;
}

.bg1 blockquote {
	color: #D4D4D4;
}

.rtl blockquote {
	background-image: url("{T_IMAGESET_PATH}/images/icons/quote_rtl.gif");
}

blockquote blockquote {
	/* Nested quotes */
	font-size: 1em;
	margin: 0.5em 1px 0 15px;	
}

blockquote cite {
	/* Username/source of quoter */
	font-style: normal;
	font-weight: bold;
	margin: 0 0 5px 20px;
	display: block;
	font-size: 0.9em;
}

blockquote cite cite {
	font-size: 1em;
}

blockquote.uncited {
	padding-top: 25px;
}

/* Code block */
dl.codebox {
	padding: 3px;
	padding: 0.3rem;
	background-color: #111;
	border: 1px solid #575757;
	font-size: 1em;
	text-shadow: none;
}

dl.codebox dt {
	text-transform: uppercase;
	border-bottom: 1px solid #575757;
	margin-bottom: 3px;
	font-size: 0.8em;
	font-weight: bold;
	display: block;
}

blockquote dl.codebox {
	margin-left: 0;
}

dl.codebox code {
	/* Also see tweaks.css */
	overflow: auto;
	display: block;
	height: auto;
	max-height: 200px;
	white-space: normal;
	padding-top: 5px;
	font: 0.9em Monaco, "Andale Mono","Courier New", Courier, mono;
	line-height: 1.3em;
	color: #3E9B67;
	margin: 2px 0;
	text-align: left;
}

.syntaxbg		{ color: #353535; }
.syntaxcomment	{ color: #FF8000; }
.syntaxdefault	{ color: #0000BB; }
.syntaxhtml		{ color: #808081; }
.syntaxkeyword	{ color: #007700; }
.syntaxstring	{ color: #DD0000; }

/* Attachments
----------------------------------------*/
.attachbox {
	width: auto; 
	margin: 5px 10px 5px 10px;
	padding: 6px;
	border: 1px dashed #d8d8d8;
	clear: right;
}

.pm-message .attachbox {
	background-color: #333;
}

.attachbox dt {
	font-family: Arial, Helvetica, sans-serif;
	text-transform: uppercase;
}

.attachbox dd {
	margin-top: 4px;
	padding-top: 4px;
	/*clear: left;*/
	border-top: 1px solid #575757;
}

.attachbox dd dd {
	border: none;
}

.attachbox p {
	line-height: 110%;
	color: #999;
	font-weight: normal;
	clear: left;
}

.attachbox p.stats
{
	line-height: 110%;
	color: #999;
	font-weight: normal;
	clear: left;
}

.attach-image {
	margin: 3px 0;
	width: 100%;
	max-height: 350px;
	overflow: auto;
}

.attach-image img {
	border: 1px solid #444;
/*	cursor: move; */
	cursor: default;
}

/* Inline image thumbnails */
div.inline-attachment dl.thumbnail, div.inline-attachment dl.file {
	display: block;
	margin-bottom: 4px;
}

div.inline-attachment p {
	font-size: 100%;
}

dl.file {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	display: block;
}

dl.file dt {
	text-transform: none;
	margin: 0;
	padding: 0;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

dl.file dd {
	color: #999;
	margin: 0;
	padding: 0;	
}

dl.thumbnail img {
	padding: 3px;
	border: 1px solid #666666;
	background-color: #111;
}

dl.thumbnail dd {
	color: #666666;
	font-style: italic;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

.attachbox dl.thumbnail dd {
	font-size: 100%;
}

dl.thumbnail dt a:hover {
	background-color: #222;
}

dl.thumbnail dt a:hover img {
	border: 1px solid #00C0FF;
}

/* Post poll styles
----------------------------------------*/

.wow-poll-frame1 { background: url("{T_IMAGESET_PATH}/images/poll-bg.jpg") 0 0 repeat-x; }
.wow-poll-frame2 { background: url("{T_IMAGESET_PATH}/images/poll-right.gif") 100% 0 no-repeat; }
.wow-poll-frame3 { background: url("{T_IMAGESET_PATH}/images/poll-left.gif") 0 0 no-repeat; padding: 0 20px; }

.wow-poll-box1 { 
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,0.9), inset 0px 0px 6px 6px rgba(0,0,0,1);
	background: #0A0A0A; 
	background: rgba(0,0,0,0.5);
	border-radius: 6px; 
	border: 1px solid #000;
	margin:10px 10px 35px 10px;
 }
.wow-poll-box2 { 
	border-radius: 6px; 
	border: 1px solid #363636;
	padding: 1px 2px;
}
.wow-poll-box3 { 
	border: 1px solid #1a1a1a;
	padding: 15px 15px 0; 
}

.wow-poll-author1 { 
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,0.9), inset 0px 0px 6px 6px rgba(0,0,0,1); 
	background: #0A0A0A;
	background: rgba(0,0,0,0.6);
	border-radius: 0 0 6px 6px; 
	border: 1px solid #000;
	border-top: none;
	margin:0 10px 15px 10px;
	float: left;
 }
.wow-poll-author2 { 
	border-radius: 0 0 6px 6px; 
	border: 1px solid #363636;
	border-top: none;
	padding: 1px 2px;
}
.wow-poll-author3 { 
	border: 1px solid #1a1a1a;
	border-top: none;
	padding: 5px 25px; 
}
.poll p.author {
	margin: 0;
	padding: 0;
	color: #999;
	text-transform: uppercase;
}
.poll p.author span {
	color: #FFF;
}
.poll .content h2 {
	color: #00C0FF;
	font: italic 18px Georgia,"Times New Roman",Times,serif;
	border-bottom: none;
	clear: left;
}
.poll .content h2 span {
	color: #FFFFFF;
    font-size: 18px;
    padding: 10px 5px 10px 25px;
	font: normal bold 18px Arial,Helvetica,sans-serif;
}

.wow-poll-totals {
	margin: 0 auto;
	text-align: center;
	margin: 15px 0 -15px 0;
	font-weight: bold;
}

.wow-poll-footer { 
	background: url("{T_IMAGESET_PATH}/images/poll-bot.gif") no-repeat;
	margin: 0 auto;
	height: 74px;
	width: 506px;
	position: relative;
	top: 38px;
}

.wow-poll-footer a {
    float: left;
    left: 128px;
    position: relative;
    top: 13px;
	padding: 0;
}

fieldset.polls {
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
}

fieldset.polls dl {
	margin-top: 3px;
	/*border-top: 1px solid #e2e2e2;
	padding: 5px 0 0 0;
	line-height: 120%;*/
	color: #CCC;
	line-height: 16px;
}

fieldset.polls dl.voted {
	font-weight: bold;
	color: #FFF;
}

fieldset.polls dt {
	text-align: right;
	float: left;
	display: block;
	width: 50%;
	border-right: none;
	padding: 0;
	margin: 0;
	font-size: 1.1em;
}

fieldset.polls dt * {
	padding: 0;
	margin-right: 10px;
}

fieldset.polls dd {
	float: left;
	width: 10%;
	border-left: none;
	/*padding: 0 5px;*/
	margin-left: 0;
	font-size: 11px;
	font-size: 1.1rem;
	text-shadow: 0 0 2px #000;
}

fieldset.polls dd span {
	/*margin-left: 10px;*/
	display: inline-block;
	width: 18%;
	text-align: right;
	font-size: 12px;
	font-size: 1.2rem;
}

fieldset.polls dd.resultbar {
	width: 50%;
	margin: 0;
}

fieldset.polls .resultbar-restrict {
	width: 80%;
	text-align: left;
}

fieldset.polls dd.resultbar div {
	display: inline-block;
}

fieldset.polls dd input {
	margin: 2px 0;
}

fieldset.polls dd div {
	text-align: right;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-weight: bold;
	overflow: visible;
	min-width: 2%;
}

.pollbar {
	background: url("{T_IMAGESET_PATH}/images/poll_bars1.gif") no-repeat ;
	background-position: 0 -19px;
	height: 16px;
}
.pollbar div {
	background: url("{T_IMAGESET_PATH}/images/poll_bars1.gif") no-repeat ;
	background-position: 100% -19px;
	margin-left: 3px;
	padding-right: 3px;
}
.pollbar.winner {
	background-position: 0 -1px;
}
.pollbar.winner div {
	background-position: 100% -1px;
}

/* Poster profile block
----------------------------------------*/
.postprofile {
	/* Also see tweaks.css */
	margin: 0;
	padding: 5px;
	min-height: 165px;
	color: #CCC;
	border-right: 1px solid #000;
	width: 200px;
	float: left;
	display: inline;
	text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.75);
}
.bg1 .postprofile {
	background: url("{T_IMAGESET_PATH}/images/avatar-bg1.gif") no-repeat;
}
.bg2 .postprofile {
	background: url("{T_IMAGESET_PATH}/images/avatar-bg2.gif") no-repeat;
}
.bg1.blizz .postprofile {
	background: url("{T_IMAGESET_PATH}/images/avatar-bg1-blizz.gif") no-repeat;
}
.bg2.blizz .postprofile {
	background: url("{T_IMAGESET_PATH}/images/avatar-bg2-blizz.gif") no-repeat;
}
.bg1.propass .postprofile {
	background: url("{T_IMAGESET_PATH}/images/avatar-bg1-pro.gif") no-repeat;
}
.bg2.propass .postprofile {
	background: url("{T_IMAGESET_PATH}/images/avatar-bg2-pro.gif") no-repeat;
}
.bg1.red .postprofile {
	background: url("{T_IMAGESET_PATH}/images/avatar-bg1-red.jpg") no-repeat;
}
.bg2.red .postprofile {
	background: url("{T_IMAGESET_PATH}/images/avatar-bg2-red.jpg") no-repeat;
}

/*.pm .postprofile {
	border-right: 1px solid #DDDDDD;
}*/

.postprofile dd, .postprofile dt {
	line-height: 1.2em;
	/*margin-left: 8px;*/
}

.postprofile dd {
	margin: 5px 0;
	font-size: 9px; 
	font-size: 0.9rem;
}

.postprofile dd:last-child {
	margin-bottom: 0;
}

.postprofile dd.separator {
	margin: 5px 0;
	height: 1px;
}

.postprofile dd a {
	font-size: 1.1em;
}

.postprofile strong {
	font-weight: normal;
	color: #DDD;
}

.postprofile dd.stats span {
	display: inline-block; padding: 0 5px;
}

.postprofile dd.online, .postprofile dt.online {
	background: none;
	color: #5cff00;
	margin-top: 5px;
	font-weight: bold;
	font-size: 1em;
}

.avatar {
	border: none;
	margin-bottom: 3px;
}

.wow-profile {
	width: 100%;
	height: 92px;
	position: relative;
	text-align: center;
}
.warned .wow-profile {
	background: url("{T_IMAGESET_PATH}/images/icons/warning.png") 0 4px no-repeat;
}
.game-avatar {
	height: 64px;
	width: 64px;
	position: absolute;
	top: 10px;
	left: 68px;
	background-size: 64px 64px !important;
	background-repeat: no-repeat;
	background-position: 50% 50%;
}
.game-avatar .context-avatar img, game-noavatar .context-avatar img {
	height: 83px;
	width: 82px;
}
.game-avatar-frame {
	background: url("{T_IMAGESET_PATH}/images/portrait-frame.gif") no-repeat;
	height: 83px;
	width: 82px;
	position: absolute;
	top: -8px;
	left: -8px;
}
.propass .game-avatar-frame {
	background: url("{T_IMAGESET_PATH}/images/portrait-frame-pro.gif") no-repeat;
}
.game-noavatar {
	background: url("{T_IMAGESET_PATH}/images/avatar-none.gif") no-repeat;
	height: 83px;
	width: 82px;
	position: absolute;
	top: 2px;
	left: 60px;
}
.game-rank-icon {
	height: 23px;
	width: 30px;
	position: absolute;
	top: 54px;
	left: 52px;
	text-align: center;
	line-height: 23px;
}
.game-rank-icon > * {
	vertical-align:middle;
}
.game-rank-icon .norank {
	background: url("{T_IMAGESET_PATH}/images/icons/question.gif") no-repeat 50% 60%;
	height: 100%;
	width: 100%;
}
.game-icons-frame {
	background: url("{T_IMAGESET_PATH}/images/portrait-icons.png") no-repeat;
	height: 83px;
	width: 35px;
	position: absolute;
	top: -1px;
	left: -35px;
}
.propass .game-icons-frame {
	background: url("{T_IMAGESET_PATH}/images/portrait-icons-pro.gif") no-repeat;
}
.game-icons-frame img {
	height: 18px;
	width: 18px;
}

.game-icons-a, .game-icons-b, .game-icons-c {
	height: 18px;
	width: 18px;
	position: absolute;
	background-size: 100% 100%;
	background-repeat: no-repeat;
	background-color: #000;
	border-radius: 3px;
}
.game-icons-a {
	top: 11px;
	left: 11px;
}
.game-icons-b {
	top: 31px;
	left: 11px;
}
.game-icons-c {
	top: 51px;
	left: 11px;
}
.wow-info-frame {
	background: url("{T_IMAGESET_PATH}/images/avatar-tile.png") repeat-y;
	width: 159px;
	padding: 0 6px;
	position: relative;
	left: 14px;
	text-align: center;
	z-index: auto; /* IE fix */
}
.wow-info-bottom {
	background: url("{T_IMAGESET_PATH}/images/avatar-bot.png") no-repeat;
	width: 155px;
	height: 14px;
	padding: 0 8px 0 8px;
	position: relative;
	left: 14px;
	text-align: center;
}
.blizz .wow-info-frame, .red .wow-info-frame, .blizz .wow-info-bottom, .red .wow-info-bottom { background: none; }

.online {
	background-image: url("{IMG_ICON_USER_ONLINE_SRC}");
	background-position: 100% 0;
	background-repeat: no-repeat;
}
.wow-context {
	background: #1A1A1A;
	background: rgba(20, 20, 20, 0.98);
	border: 1px solid #575757;
	border-radius: 4px;
	box-shadow: 1px 1px 15px #000;
	display: none;
	left: 1px;
	opacity: 0.98;
	overflow: hidden;
	position: absolute;
	top: 15px;
	/*width: 225px;*/
	z-index: 70;
	padding: 10px;
}
.wow-info-frame dl {
	overflow: hidden; /* IE fix */
}
.wow-context div.user-icons {
	margin-top: 10px;
	display: flex;
}
.wow-context div.user-icons a {
	background: #292A2A url("{T_IMAGESET_PATH}/images/icons/context.gif") no-repeat;
	display: block;
	float: left;
	height: 30px;
	line-height: 30px;
	margin-right: 1px;
	padding-left: 30px;
	font-size: 1.1em;
}
.wow-context div.user-icons a:hover {
	background-color: #525252;
}
.wow-context div.user-icons > *:first-child {
	border-radius: 3px 0 0 3px;
	padding-right: 10px;
}
.wow-context div.user-icons > *:last-child {
	border-radius: 0 3px 3px 0;
}
.wow-context strong {
	font-size: 1.3em;
	color: #FFF;
	font-weight: bold;
}
.wow-context a.icon-profile {
}
.wow-context a.icon-posts {
	background-position: 0 -30px !important;
}
.wow-context a.icon-foe {
	background-position: 0 -60px !important;
}
.wow-context ul.profile-icons {
	display: inline-block;
}
.wow-context ul.profile-icons li:last-child {
	margin-right: 0;
}

/* Topic Preview MOD
----------------------------------------*/
#topic_preview {
	background: #101010;
	background: rgba(15, 15, 15, 0.97);
	border: 1px solid #575757;
	border-radius: 4px;
	box-shadow: 1px 1px 15px #000;
	padding: 10px;
	margin-left: -40px;
	min-width: 40px;
	position: absolute;
	font-size: 11px;
	text-decoration: none;
	font-style: normal;
	z-index: 10;
	display: none;
}

#topic_preview:before {
	/* Upper Triangle */
	content: "";
	background: #101010;
	background: rgba(15, 15, 15, 0.97);
	border: 0;
	border-top: 1px solid #575757;
	border-right: 1px solid #575757;
	width: 10px;
	height: 10px;
	margin-left: 15px;
	margin-top: -16px;
	display: block;
	position: absolute;
	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

#topic_preview.invert:after {
	/* Lower Triangle */
	content: "";
	background: #101010;
	background: rgba(15, 15, 15, 0.97);
	border: 0;
	border-bottom: 1px solid #575757;
	border-left: 1px solid #575757;
	width: 10px;
	height: 10px;
	top: 100%;
	margin-left: 15px;
	margin-top: -5px;
	display: block;
	position: absolute;
	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

#topic_preview.invert:before {
	/* Hide upper triangle */
	content: "";
	display: none;
}

#topic_preview hr {
	margin: 5px 0;
}

/* Avatars and Text */
.topic_preview_avatar {
	float: left;
	position: relative;
	margin: 0 10px 0 0;
	border: solid 1px #575757;
	width: 64px;
	height: 64px;
}

.topic_preview_avatar.rtl {
	/* rtl languages */
	float: right;
	margin: 0 0 0 10px;
}

.topic_preview_text_first,
.topic_preview_text_last {
	word-wrap: break-word;
	overflow: hidden;
}

.topic_preview_break {
	clear: both;
	display: block;
	width: 100%;
	height: 0;
	padding: 5px 0;
	margin: 0;
	font-size: 0;
}


/* mChat MOD
------------ */

div.chatbox1 {
	border: 1px solid #000;
	padding: 2px;
	background-color: #313131;
	box-shadow: 0 0 5px 0 rgba(0,0,0,0.7);
}

div.chatbox2 {
	border: 1px solid #000;
}

#mChatmain {
	border: 1px solid #575757;
	background: #202020 linear-gradient(to bottom, rgba(0,0,0,0.5) 0, rgba(0,0,0,0) 20%, rgba(0,0,0,0) 80%, rgba(0,0,0,0.4) 100%);
	padding: 2px;
}

div.mChatBG1, div.mChatBG2 {
	padding: 3px;
}

div.mChatBG1 {
	background: #252525;
	background: #252525 linear-gradient(to bottom, rgba(30,30,30,1) 0,rgba(37,37,37,0) 35px); 
	border: 1px solid;
	border-color: #252525 #000 #000 #000;
	overflow: hidden;
}

div.mChatBG1:hover {
	background: #252525;
	background: #252525 linear-gradient(to top, rgba(30,30,30,1) 0,rgba(37,37,37,0) 35px); 
	color: #FFF;
}

div.mChatBG2 {
	background: #161616;
	background: #161616 linear-gradient(to bottom, rgba(11,11,11,1) 0,rgba(22,22,22,0) 35px); 
	border: 1px solid;
	border-color: #161616 #000 #000 #000;
	overflow: hidden;
}

div.mChatBG2:hover {
	background: #161616;
	background: #161616 linear-gradient(to top, rgba(11,11,11,1) 0,rgba(22,22,22,0) 35px); 
	color: #FFF;
}

div.mChatBG1 span, div.mChatBG2 span {
	color: #877B69;
}

div.mChatRowLimit {
	overflow: auto;
	width: 100%;
	width: auto;
}

div.mChatRowLimitCustom {
	overflow: auto;
	width: 100%;
	width: auto;
}

div.mChatPanel {
	text-align: center;
	padding: 3px;
	clear: left;
}

input.mChatText {
	cursor: text;
	width: 70% !important;
	/*background-color: #FFFFFF;
	border: 1px solid #B4BAC0;
	color: #333333;*/
	padding: 5px 5px 3px 5px;
	margin: 3px 0px 6px 5px;
}

input.mChatText:hover {
	border-color: #11A3EA;
}

div.mChatBodyFix {
	width: 100% !important;
}

div.mChatStatic {
	padding-left: 5px;
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	text-align: center;
	font-size: 1.1em;
}

div.mChatStats {
	padding-left: 5px;
	margin-top: 2px;
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	text-align: left;
	min-height: 1.3em;
	font-size: 1.1em;
	height: auto !important;
}

div.mChatRefresh {
	padding-left: 5px;
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	text-align: left;
	font-size: 1.1em;
	margin-top: 1.5em;
	clear: both;
}

input.mChatColor {
	width: 100%;
	text-align: center;
	background-color: #DEE3E7;
	border-style: none;	
}

div.mChatMessage {
	padding: 3px;
	font-size: 1.1em;
	width: 98%;
}

a.mChatScriptLink {
	text-decoration:none;
}

img.mChatImage{
	vertical-align: middle;
}

img.mChatImageLoad {
	vertical-align: middle;
	cursor: wait;
	display: none;
}

img.mChatImageOk {
	vertical-align: middle;
	cursor: help;
}

img.mChatImageHideImg {
	vertical-align: middle; 
	cursor: help; 
	display: none;
}

div.mChatSound {
	position: absolute;
	left: -1000px;
	top: -1000px;
}

.mchat_alert {
	color: #7E2217;
	padding: 10px;
}

#mChatUserList {
	display: none;
	float: left;
	padding: 5px 0;
}

.mChatAvatars {
	float: left;
	padding-right: 5px;
}

div.avatarMessage {
	margin-left: 50px;
	width: 90%;
	margin-right: 5px;
}


/* Poster profile used by search*/
.search .postprofile {
	/*width: 30%;*/
}

/* pm list in compose message if mass pm is enabled */
dl.pmlist dt {
	width: 60% !important;
}

dl.pmlist dt textarea {
	width: 95%;
}

dl.pmlist dd {
	margin-left: 61% !important;
	margin-bottom: 2px;
}

/* fixes & extras */
.post .innerbg2 div.inner, .post.pm div.inner {
	background: url("{T_IMAGESET_PATH}/images/pixel-black.gif") repeat-y 210px 0;
}
#preview.post.pm div.inner {
	background: none;
}
.pm .postbody h3 {
	color: #FFB019;
}
#preview .postbody {
	margin-left: 0;
}
#preview.post {
	margin-left: 0;
	border: 1px solid #444;
}
.mcp-main dd.mark {
	width: 40px;
	border-left: none !important;
}
.mcp-main .postbody ul.profile-icons {
	opacity: 1;
	margin: 0;
	padding: 0;
}
.mcp-main .postbody ul.profile-icons li {
	margin-top: 0 !important;
}
.ucp-main dd.lastpost {
	border-right: none !important;
}
.ucp-main dd.mark {
	border-left: none !important;;
}
dd.moderation span {
	padding-right: 5px;
}
.blizz .content span.bold {
	color: #FFF;
}
.blizz .wow-info-frame .joined {
	display: none;
}
.blizz .game-icons-frame, .red .game-icons-frame { 
	/*display: none; */
}
#topicreview .postbody {
	padding-bottom: 0;
}
#topicreview .postbody .content {
	min-height: inherit;
}
#topicreview .postbody .profile-icons {
	opacity: 1;
}
#register .attachbox, #login .attachbox {
	float: left;
	width: auto; 
	margin: 5px 5px 5px 0;
	padding: 6px;
	clear: left;
}
#login .fields1 .button1, .quick-login .button2 {
	padding: 5px 14px;
}
#searchresults-tools.toggle, #viewtopic-tools.toggle {
	margin-top: 0;
}
#viewprofile .postprofile {
	background-color: #313131;
	border: 1px solid #000;
	margin-left: -5px;
}
.postprofile .guild {
	font-weight: bold;
	font-size: 10px;
	font-size: 1rem;
}
.advertisement, div.advertisement.index {
	margin: 10px auto;
	padding: 0;
}
.section-index .forumbg span.corners-inner-bottom {
	clear: left !important;
}
.section-dkp .forabg, .section-viewtopic .forabg {
	margin: 0 0 4px 0;
}

/* =Media queries
-------------------------------------------------------------- */

@media screen and (max-width: 700px) {
	.postbody h3 {
		display: inline-block;
	}
}

@media screen and (max-width: 999px) {
	.wow-index li.wow-forum {
		width: 99%;
		min-height: inherit;
	}
	.wow-index .subforums-button {
		top: 40px;
	}
	.index-extra {
		padding-right: 8px;
		padding-right: 0.8rem;
	}
}

@media screen and (min-width: 1000px) {
	.wow-index li.wow-forum {
		min-height: 110px;
		width: 300px;
	}
	.wow-index .subforums-button {
		top: 48px;
	}
}
/* Button Styles
---------------------------------------- */

/* Rollover buttons
   Based on: http://wellstyled.com/css-nopreload-rollovers.html
----------------------------------------*/
.buttons {
	float: left;
	width: auto;
	height: auto;
}

/* Rollover state */
.buttons div {
	float: left;
	margin: 0 5px 0 0;
	background-position: 0 100%;
}

/* Rolloff state */
.buttons div a {
	display: block;
	width: 100%;
	height: 100%;
	background-position: 0 0;
	position: relative;
	overflow: hidden;
}

/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */
/*.buttons div span		{ display: none; }*/
/*.buttons div a:hover	{ background-image: none; }*/
.buttons div span			{ position: absolute; width: 100%; height: 100%; cursor: pointer;}
.buttons div a:hover span	{ background-position: 0 100%; }

/* Sub-header (navigation bar)
--------------------------------------------- */
a.print, a.sendemail, a.fontsize, a.mcp-icon {
	display: block;
	overflow: hidden;
	height: 18px;
	text-indent: -5000px;
	text-transform: capitalize;
	text-align: left;
	background-repeat: no-repeat;
}

a.print {
	background-image: none;
	width: 22px;
}

a.sendemail {
	background-image: none;
	width: 22px;
}

a.fontsize {
	background-image: none;
	background-position: 0 -1px;
	width: 29px;
}

a.fontsize:hover {
	background-position: 0 -20px;
	text-decoration: none;
}

a.mcp-icon {
	background-image: none;
	width: 22px;
}

/* Icon images
---------------------------------------- */
.sitehome, .icon-faq, .icon-members, .icon-home, .icon-ucp, .icon-register, .icon-logout, .icon-bookmark,
.icon-bump, .icon-subscribe, .icon-unsubscribe, .icon-pages, .icon-search, .icon-portal, .icon-dkp {
	background-position: 0 50%;
	background-repeat: no-repeat;
	background-image: none;
	padding: 1px 0 0 18px;
}

/* Poster profile icons
----------------------------------------*/
ul.profile-icons {
	padding-top: 10px;
	list-style: none;
}

/* Rollover state */
ul.profile-icons li {
	float: left;
	margin: 0 6px 3px 0;
	background-position: 0 100%;
}

/* Rolloff state */
ul.profile-icons li a {
	display: block;
	width: 100%;
	height: 100%;
	background-position: 0 0;
}

/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */
ul.profile-icons li span { display:none; }
/*ul.profile-icons li a:hover { background: none; }*/

/* Positioning of moderator icons */
.postbody ul.profile-icons {
	float: right;
	width: auto;
	padding: 3px;
	margin: 0 0 0 0;
}

.postbody ul.profile-icons li {
	margin: 6px 3px 0 3px;
}

/* Profile & navigation icons */
.email-icon, .email-icon a				{ background: none top left no-repeat; }
.aim-icon, .aim-icon a					{ background: none top left no-repeat; }
.yahoo-icon, .yahoo-icon a				{ background: none top left no-repeat; }
.web-icon, .web-icon a					{ background: none top left no-repeat; }
.msnm-icon, .msnm-icon a				{ background: none top left no-repeat; }
.icq-icon, .icq-icon a					{ background: none top left no-repeat; }
.jabber-icon, .jabber-icon a			{ background: none top left no-repeat; }
.pm-icon, .pm-icon a					{ background: none top left no-repeat; }
.quote-icon, .quote-icon a				{ background: none top left no-repeat; }
.reply-icon, .reply-icon a				{ background: none top left no-repeat; }
.bebosn-icon, .bebosnsn-icon a			{ background: none top left no-repeat; }
.bloggersn-icon, .bloggersn-icon a		{ background: none top left no-repeat; }
.facebooksn-icon, .facebooksn-icon a	{ background: none top left no-repeat; }
.goodreadssn-icon, .goodreadssn-icon a	{ background: none top left no-repeat; }
.linkedinsn-icon, .linkedinsn-icon a	{ background: none top left no-repeat; }
.myspacesn-icon, .myspacesn-icon a		{ background: none top left no-repeat; }
.netlogsn-icon, .netlogsn-icon a		{ background: none top left no-repeat; }
.twittersn-icon, .twittersn-icon a		{ background: none top left no-repeat; }

/* Moderator icons */
.report-icon, .report-icon a	{ background: none top left no-repeat; }
.warn-icon, .warn-icon a		{ background: none top left no-repeat; }
.edit-icon, .edit-icon a		{ background: none top left no-repeat; }
.delete-icon, .delete-icon a	{ background: none top left no-repeat; }
.info-icon, .info-icon a		{ background: none top left no-repeat; }

/* Set profile icon dimensions */
ul.profile-icons li.email-icon			{ width: {IMG_ICON_CONTACT_EMAIL_WIDTH}px; height: {IMG_ICON_CONTACT_EMAIL_HEIGHT}px; }
ul.profile-icons li.aim-icon			{ width: {IMG_ICON_CONTACT_AIM_WIDTH}px; height: {IMG_ICON_CONTACT_AIM_HEIGHT}px; }
ul.profile-icons li.yahoo-icon			{ width: {IMG_ICON_CONTACT_YAHOO_WIDTH}px; height: {IMG_ICON_CONTACT_YAHOO_HEIGHT}px; }
ul.profile-icons li.web-icon			{ width: {IMG_ICON_CONTACT_WWW_WIDTH}px; height: {IMG_ICON_CONTACT_WWW_HEIGHT}px; }
ul.profile-icons li.msnm-icon			{ width: {IMG_ICON_CONTACT_MSNM_WIDTH}px; height: {IMG_ICON_CONTACT_MSNM_HEIGHT}px; }
ul.profile-icons li.icq-icon			{ width: {IMG_ICON_CONTACT_ICQ_WIDTH}px; height: {IMG_ICON_CONTACT_ICQ_HEIGHT}px; }
ul.profile-icons li.jabber-icon			{ width: {IMG_ICON_CONTACT_JABBER_WIDTH}px; height: {IMG_ICON_CONTACT_JABBER_HEIGHT}px; }
ul.profile-icons li.pm-icon				{ width: {IMG_ICON_CONTACT_PM_WIDTH}px; height: {IMG_ICON_CONTACT_PM_HEIGHT}px; }
ul.profile-icons li.bebosn-icon			{ width: {IMG_ICON_CONTACT_BEBO_WIDTH}px; height: {IMG_ICON_CONTACT_BEBO_HEIGHT}px; }
ul.profile-icons li.bloggersn-icon		{ width: {IMG_ICON_CONTACT_BLOGGER_WIDTH}px; height: {IMG_ICON_CONTACT_BLOGGER_HEIGHT}px; }
ul.profile-icons li.facebooksn-icon		{ width: {IMG_ICON_CONTACT_FB_WIDTH}px; height: {IMG_ICON_CONTACT_FB_HEIGHT}px; }
ul.profile-icons li.goodreadssn-icon	{ width: {IMG_ICON_CONTACT_GR_WIDTH}px; height: {IMG_ICON_CONTACT_GR_HEIGHT}px; }
ul.profile-icons li.linkedinsn-icon		{ width: {IMG_ICON_CONTACT_LI_WIDTH}px; height: {IMG_ICON_CONTACT_LI_HEIGHT}px; }
ul.profile-icons li.myspacesn-icon		{ width: {IMG_ICON_CONTACT_MS_WIDTH}px; height: {IMG_ICON_CONTACT_MS_HEIGHT}px; }
ul.profile-icons li.netlogsn-icon		{ width: {IMG_ICON_CONTACT_NETLOG_WIDTH}px; height: {IMG_ICON_CONTACT_NETLOG_HEIGHT}px; }
ul.profile-icons li.twittersn-icon		{ width: {IMG_ICON_CONTACT_TWIT_WIDTH}px; height: {IMG_ICON_CONTACT_TWIT_HEIGHT}px; }
ul.profile-icons li.report-icon		{ width: 19px; height: 17px; }
ul.profile-icons li.edit-icon		{ width: 16px; height: 18px; }
ul.profile-icons li.delete-icon		{ width: 16px; height: 15px; }
ul.profile-icons li.info-icon		{ width: 16px; height: 17px; }
ul.profile-icons li.warn-icon		{ width: 16px; height: 16px; }

/* Fix profile icon default margins */
ul.profile-icons li.edit-icon	{ margin-top: 3px; }
ul.profile-icons li.quote-icon	{ margin: 0 0 0 4px; }
ul.profile-icons li.reply-icon	{ margin: 0; }


/*  	
--------------------------------------------------------------
Colours and backgrounds for buttons.css
-------------------------------------------------------------- */

a.print {
	background-image: url("{T_IMAGESET_PATH}/images/icons/icon_print.png");
}

a.sendemail {
	background-image: url("{T_IMAGESET_PATH}/images/icons/icon_sendemail.png");
}

a.fontsize {
	background-image: url("{T_IMAGESET_PATH}/images/icons/icon_fontsize.png");
}

a.mcp-icon {
	background-image: url("{T_IMAGESET_PATH}/images/icons/biohazard-button.gif");
}

/* Icon images
---------------------------------------- */
.sitehome			{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_home.png"); }
.icon-faq			{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_faq.png"); }
.icon-members		{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_members.png"); }
.icon-home			{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_home.png"); }
.icon-ucp			{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_ucp.png"); }
.icon-register		{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_register.png"); }
.icon-logout		{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_logout.png"); }
.icon-bookmark		{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_bookmark.png"); }
.icon-bump			{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_bump.png"); }
.icon-subscribe		{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_subscribe.png"); }
.icon-unsubscribe	{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_unsubscribe.png"); }
.icon-pages			{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_pages.png"); }
.icon-search		{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_search.gif"); }
.icon-portal		{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_portal.png"); background-position: 0 60%; }
.icon-dkp			{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon_dkp.gif"); background-position: 0 60%; padding-left: 21px; }

/* Profile & navigation icons */
.email-icon, .email-icon a				{ background-image: url("{IMG_ICON_CONTACT_EMAIL_SRC}"); }
.aim-icon, .aim-icon a					{ background-image: url("{IMG_ICON_CONTACT_AIM_SRC}"); }
.yahoo-icon, .yahoo-icon a				{ background-image: url("{IMG_ICON_CONTACT_YAHOO_SRC}"); }
.web-icon, .web-icon a					{ background-image: url("{IMG_ICON_CONTACT_WWW_SRC}"); }
.msnm-icon, .msnm-icon a				{ background-image: url("{IMG_ICON_CONTACT_MSNM_SRC}"); }
.icq-icon, .icq-icon a					{ background-image: url("{IMG_ICON_CONTACT_ICQ_SRC}"); }
.jabber-icon, .jabber-icon a			{ background-image: url("{IMG_ICON_CONTACT_JABBER_SRC}"); }
.pm-icon, .pm-icon a					{ background-image: url("{IMG_ICON_CONTACT_PM_SRC}"); }
.bebosn-icon, .bebosn-icon a			{ background-image: url("{IMG_ICON_CONTACT_BEBO_SRC}"); }
.bloggersn-icon, .bloggersn-icon a		{ background-image: url("{IMG_ICON_CONTACT_BLOGGER_SRC}"); }
.facebooksn-icon, .facebooksn-icon a	{ background-image: url("{IMG_ICON_CONTACT_FB_SRC}"); }
.goodreadssn-icon, .goodreadssn-icon a	{ background-image: url("{IMG_ICON_CONTACT_GR_SRC}"); }
.linkedinsn-icon, .linkedinsn-icon a	{ background-image: url("{IMG_ICON_CONTACT_LI_SRC}"); }
.myspacesn-icon, .myspacesn-icon a		{ background-image: url("{IMG_ICON_CONTACT_MS_SRC}"); }
.netlogsn-icon, .netlogsn-icon a		{ background-image: url("{IMG_ICON_CONTACT_NETLOG_SRC}"); }
.twittersn-icon, .twittersn-icon a		{ background-image: url("{IMG_ICON_CONTACT_TWIT_SRC}"); }

.wow-info-frame .profile-icons li:hover,
.wow-info-frame .profile-icons li:hover a	{ 
	background-position: 0 100%;
}

/* Moderator icons */
.report-icon, .report-icon a	{ background-image: url("{T_IMAGESET_PATH}/images/icons/biohazard-button.gif"); }
.edit-icon, .edit-icon a		{ background-image: url("{T_IMAGESET_PATH}/images/icons/edit-button.gif"); }
.delete-icon, .delete-icon a	{ background-image: url("{T_IMAGESET_PATH}/images/icons/delete-icon.gif"); } 
.info-icon, .info-icon a		{ background-image: url("{T_IMAGESET_PATH}/images/icons/icon-help.gif"); }
.warn-icon, .warn-icon a		{ background-image: url("{T_IMAGESET_PATH}/images/icons/warn.gif"); } /* Need updated warn icon */


/* Custom buttons */
a.ui-button1, a.ui-button2 {
	float: left;
	display: inline-block;
	position: relative;
	background-color: #222;
	background-image: linear-gradient(to bottom, #373737 0%, #111111 100%);
	border: 1px solid #5D5D5D;
	border-radius: 3px;
	margin: 12px 3px 5px 3px;
	padding: 0 12px;
	font-size: 12px;
	font-size: 1.2rem;
	line-height: 30px;
	text-align: center;
	text-transform: uppercase;
	white-space: nowrap;
	text-shadow: 1px 1px rgba(0,0,0,0.8);
	box-shadow: 0 1px 7px 0 rgba(0,0,0,0.6), inset 0 0 3px 0 rgba(0,0,0,0.8);
	transition: all 0.2s;
}
a.ui-button1:hover, a.ui-button2:hover {
	background-color: #2061d2;
	background-image: linear-gradient(to bottom, #37dfff 0%, #1041e2 100%);
	border-color: #238eff;
	text-decoration: none;
	text-shadow: 0 0 4px rgba(255,255,255,0.5);
	box-shadow: 0 1px 7px 0 rgba(0,0,0,0.5), inset 0 1px 3px 0 rgba(255,255,255,0.8);	
}
a.ui-button2 {
	margin: 2px 2px 0 2px;
	padding: 0 8px;
	line-height: 24px;
}
ul.profile-icons li a.ui-button2 {
	width: auto;
}
a.ui-button1.post-icon:after, 
a.ui-button1.locked-icon:after, 
a.ui-button2.newpm-icon:after,
a.ui-button2.pmreply-icon:after,
a.ui-button2.forwardpm-icon:after,
.reply-icon a.ui-button2:after,
.quote-icon a.ui-button2 div {
	content: "";
	background-position: 0 0;
	background-repeat: no-repeat;
	display: inline-block;
	vertical-align: middle;
	width: 21px;
	height: 26px;
	margin: 0 -5px 0 3px;
}
a.ui-button2.newpm-icon:after,
a.ui-button2.pmreply-icon:after,
a.ui-button2.forwardpm-icon:after,
.reply-icon a.ui-button2:after,
.quote-icon a.ui-button2 div {
	height: 23px;
	background-position: 0 2px;
	vertical-align: top;
}
a.ui-button1:hover:after {
	background-position: 0 -41px;
}
a.ui-button2:hover:after, .quote-icon a.ui-button2:hover div {
	background-position: 0 -39px;
}
a.ui-button1.post-icon:after, 
.reply-icon a.ui-button2:after {
	background-image: url("{T_IMAGESET_PATH}/images/icons/icon_add.png");
}
a.ui-button1.locked-icon:after, 
.reply-icon.inactive a.ui-button2:after {
	background-image: url("{T_IMAGESET_PATH}/images/icons/icon_lock.png");
}
a.ui-button2.newpm-icon:after {
	background-image: url("{T_IMAGESET_PATH}/images/icons/icon_newpm.png");
}
a.ui-button2.pmreply-icon:after {
	background-image: url("{T_IMAGESET_PATH}/images/icons/icon_reply.png");
}
a.ui-button2.forwardpm-icon:after {
	background-image: url("{T_IMAGESET_PATH}/images/icons/icon_forward.png");
}
.quote-icon a.ui-button2 div {
	background-image: url("{T_IMAGESET_PATH}/images/icons/icon_quote.png");
	position: absolute;
	left: 6px;
}

.inactive a.ui-button2, a.ui-button2.inactive {
	background-color: #1A1A1A;
	background-image: linear-gradient(to bottom, #202020 0%, #111111 100%);
	border-color: #3f3f3f;
	box-shadow: 0 1px 7px 0 rgba(0,0,0,0.6), inset 0 0 3px 0 rgba(0,0,0,0.8);
	text-shadow: 1px 1px rgba(0,0,0,0.8);
	color: #777;
}
.quote-icon a.ui-button2 {
	text-indent: -5000px;
	width: 22px !important;
}
a.ui-button2.poll-results, a.ui-button2.poll-vote {
	width: 110px;
	margin: 0 2px;
	padding: 0 6px;
	overflow: hidden;
	text-overflow: ellipsis;
}
a.ui-button2 input {
	width: 100%;
	background: none;
	text-transform: uppercase;
	border: none;
	font-family: inherit;
	vertical-align: inherit;
	color: #FFAE00;
}
a.ui-button2:hover input {
	color: #FFF;
}

a.ui-button3 {
	display: block;
	padding: 10px;
	background: #320000;
	background: linear-gradient(to bottom, rgba(30,1,1,1),rgba(70,5,5,1));
	border: 1px solid #811;
	color: #FFF;
	font-size: 14px;
	font-size: 1.4rem;
	font-weight: bold;
	text-align: center;
	text-transform: uppercase;
}
a.ui-button3:hover {
	background: #320000;
	background: linear-gradient(to bottom, rgba(60,10,10,1),rgba(110,10,10,1));
	border: 1px solid #C11;
	color: #FFF;
}
/* Control Panel Styles
---------------------------------------- */


/* Main CP box
----------------------------------------*/
#cp-menu {
	float:left;
	width: 19%;
	margin-top: 1em;
	margin-bottom: 5px;
}

#cp-main {
	float: left;
	width: 81%;
}

/*#cp-main .content {
	padding: 0;
}*/

#cp-main h3, #cp-main hr, #cp-menu hr {
	border-color: #444;
}

#cp-main .panel p {
	font-size: 1.1em;
}

#cp-main .panel ol {
	margin-left: 2em;
	font-size: 1.1em;
}

/*#cp-main .panel li.row {
	border-bottom: 1px solid #cbcbcb;
	border-top: 1px solid #F9F9F9;
}*/

ul.cplist {
	margin-bottom: 5px;
	border: 1px solid #575757;
	padding: 3px;
	box-shadow: 0 0 1px 1px #000;
	background: linear-gradient(to top, rgba(13,13,13,1) 0,rgba(27,27,27,0) 46px);
}

#cp-main .panel li.header dd, #cp-main .panel li.header dt {
	color: #FFF;
	margin-bottom: 2px;
}

#cp-main table.table1 {
	margin-bottom: 1em;
}

#cp-main table.table1 thead th {
	color: #FFF;
	padding: 5px;
}

#cp-main table.table1 tbody th {
	font-style: italic;
	background-color: transparent !important;
	border-bottom: none;
}

#cp-main .pagination {
	float: right;
	width: auto;
	padding-top: 1px;
}

#cp-main .postbody p {
	font-size: 1.1em;
}

#cp-main .pm-message {
	border: 1px solid #DBDEE2;
	margin: 10px 0;
	background-color: #FFFFFF;
	width: auto;
	float: none;
}

.pm-message h2 {
	padding-bottom: 5px;
}

#cp-main .postbody h3, #cp-main .box2 h3 {
	margin-top: 0;
}

#cp-main .buttons {
	margin-left: 0;
}

#cp-main ul.linklist {
	margin: 0;
}

/* MCP Specific tweaks */
.mcp-main .postbody {
	width: 100%;
}

.tabs-container h2 {
	float: left;
	margin-bottom: 0px;
}

.tabs-container #minitabs {
	float: right;
	margin-top: 19px;
}

.tabs-container:after {
	display: block;
	clear: both;
	content: '';
}

/* CP tabbed menu
----------------------------------------*/
#tabs {
	line-height: normal;
	margin: 20px 0 -1px 7px;
	min-width: 570px;
}

#tabs ul {
	margin:0;
	padding: 0;
	list-style: none;
}

#tabs li {
	display: inline;
	margin: 0;
	padding: 0;
	font-size: 1em;
	font-weight: bold;
}

#tabs a {
	float: left;
	background: #1a1a1a;
	background: rgba(40,40,40,0.7) linear-gradient(to bottom, rgba(0,0,0,0.6) 0,rgba(0,0,0,0) 100%);
	margin: 0 2px 0 0;
	padding: 6px 10px 6px 10px;
	text-decoration: none;
	position: relative;
	cursor: pointer;
	border: 1px solid #222;
	border-radius: 3px 3px 0 0;
	border-bottom: none;
}

#tabs a span {
	color: #999;
	white-space: nowrap;
}

#tabs a:hover span {
	color: #FFF;
}

#tabs .activetab a {
	background: #111;
	background: rgba(20,20,20,0.7);
	border-color: #444;
	border-bottom: 1px solid #0e0e0e;
}

#tabs .activetab a span {
	color: #FFF;
}

#tabs a:hover {
	background: #1a1a1a;
	background: rgba(40,40,40,0.7) linear-gradient(to top, rgba(0,0,0,0.6) 0,rgba(0,0,0,0) 100%);
	border-color: #555;
}

#tabs .activetab a:hover span {
	color: #00C0FF;
}

/* Mini tabbed menu used in MCP
----------------------------------------*/
#minitabs {
	line-height: normal;
	margin: -20px 7px -1px 0;
}

#minitabs ul {
	margin:0;
	padding: 0;
	list-style: none;
}

#minitabs li {
	float: right;
	padding: 0;
	display: inline;
	font-size: 1em;
	font-weight: bold;
}

#minitabs a {
	margin: 0 2px 0 0;
	padding: 7px 10px 6px 10px;
	float: right;
	background: #1a1a1a;
	background: rgba(40,40,40,0.7) linear-gradient(to bottom, rgba(0,0,0,0.6) 0,rgba(0,0,0,0) 100%);
	border: 1px solid #222;
	border-radius: 3px 3px 0 0;
	border-bottom: none;
}

#minitabs a:hover {
	text-decoration: none;
	background: #1a1a1a;
	background: rgba(40,40,40,0.7) linear-gradient(to top, rgba(0,0,0,0.6) 0,rgba(0,0,0,0) 100%);
	border-color: #555;
}

#minitabs li.activetab {

}

#minitabs li.activetab a, #minitabs li.activetab a:hover {
	color: #FFF;
	background: #1a1a1a;
	background: rgba(40,40,40,0.7);
	border-color: #444;
	border-bottom: 1px solid #202020;
}

#minitabs .activetab a:hover span {
	color: #00C0FF;
}

#minitabs .corners-top {
	display: none;
}

/* UCP navigation menu
----------------------------------------*/
/* Container for sub-navigation list */
#navigation {
	width: 100%;
	padding-top: 36px;
}

#navigation ul {
	list-style:none;
}

/* Default list state */
#navigation li {
	margin: 1px 0;
	padding: 0;
	font-weight: bold;
	display: inline;
}

/* Link styles for the sub-section links */
#navigation a {
	display: block;
	padding: 5px;
	margin: 1px 0;
	text-decoration: none;
	font-weight: bold;
	color: #999;
	background: #212121;
	background: rgba(40,40,40,0.7) linear-gradient(to left, rgba(0,0,0,0.6) 0,rgba(0,0,0,0) 100px);
	border: 1px solid #222;
	border-right: none;
}

#navigation a:hover {
	text-decoration: none;
	color: #00C0FF;
	background-image: none;
}

#navigation #active-subsection a {
	display: block;
	color: #FFF;
	background-image: none;
}

#navigation #active-subsection a:hover {
	color: #00C0FF;
}

/* Preferences pane layout
----------------------------------------*/
#cp-main h2 {
	border-bottom: none;
	padding: 0;
	margin-left: 10px;
	color: #FFF;
}

#cp-main .panel, #cp-main .pm {
	background: #212121;
	background: rgba(40,40,40,0.7) linear-gradient(to top, rgba(0,0,0,0.25) 0,rgba(0,0,0,0) 46px);
}

#cp-main .pm {
	/*background: rgba(49,49,49,0.7);*/
	border: 1px solid #444;
	box-shadow: 0 0 4px 2px rgba(0,0,0,0.6);
}

#cp-main span.corners-top, #cp-menu span.corners-top {
	background-image: none;
}

#cp-main span.corners-top span, #cp-menu span.corners-top span {
	background-image: none;
}

#cp-main span.corners-bottom, #cp-menu span.corners-bottom {
	background-image: none;
}

#cp-main span.corners-bottom span, #cp-menu span.corners-bottom span {
	background-image: none;
}

/* Topicreview */
#cp-main .panel #topicreview span.corners-top, #cp-menu .panel #topicreview span.corners-top {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-top span, #cp-menu .panel #topicreview span.corners-top span {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-bottom, #cp-menu .panel #topicreview span.corners-bottom {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-bottom span, #cp-menu .panel #topicreview span.corners-bottom span {
	background-image: none;
}

/* Friends list */
.cp-mini {
	padding: 5px;
	margin: 10px 15px 10px 5px;
	background: #212121;
	background: rgba(33,33,33,0.75);
	border: 1px solid #444;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,0.6)
}

.cp-mini span.corners-top, .cp-mini span.corners-bottom {
	margin: 0 -5px;
}

dl.mini dt {
	font-weight: bold;
	color: #888;
}

dl.mini dd {
	padding-top: 4px;
}

.friend-online {
	font-weight: bold;
}

.friend-offline {
	font-style: italic;
}

/* PM Styles
----------------------------------------*/
#pm-menu {
	line-height: 2.5em;
}

/* PM panel adjustments */
.reply-all a.left {
	background-position: 3px 60%;
}

.reply-all a.left:hover {
	background-position: 0px 60%;
}

.reply-all {
	font-size: 11px;
	padding-top: 5px;
}

/* PM Message history */
.current {
	color: #FFF !important;
}

/* Defined rules list for PM options */
ol.def-rules {
	padding-left: 0;
}

ol.def-rules li {
	line-height: 180%;
	padding: 1px;
}

/* PM marking colours */
/*.pmlist li.bg1 {
	padding: 0 3px;
}

.pmlist li.bg2 {
	padding: 0 3px;
}*/

.pmlist li dl {
	border-left: 3px solid rgba(0,0,0,0) !important;
}

.pmlist li.pm_message_reported_colour, .pm_message_reported_colour {
	border-left-color: #BC2A4D;
	border-right-color: #BC2A4D;
}

.pmlist li.pm_marked_colour, .pm_marked_colour {
	padding: 0;
	border: solid 3px #FF6600;
	border-width: 0 3px;
}

.pmlist li.pm_marked_colour dl {
	border-left: 3px solid #FF6600 !important;
}

.pmlist li.pm_replied_colour, .pm_replied_colour {
	padding: 0;
	border: solid 3px #A9B8C2;
	border-width: 0 3px;
}

.pmlist li.pm_replied_colour dl {
	border-left: 3px solid #A9B8C2 !important;
}

.pmlist li.pm_friend_colour, .pm_friend_colour {
	padding: 0;
	border: solid 3px #5CFF00;
	border-width: 0 3px;
}

.pmlist li.pm_friend_colour dl {
	border-left: 3px solid #5CFF00 !important;
}

.pmlist li.pm_foe_colour, .pm_foe_colour {
	padding: 0;
	border: solid 3px #AA1111;
	border-width: 0 3px;
}

.pmlist li.pm_foe_colour dl {
	border-left: 3px solid #AA1111 !important;
}

.pm-legend {
	border-left-width: 10px;
	border-left-style: solid;
	border-right-width: 0;
	margin-bottom: 3px;
	padding-left: 3px;
}

/* Avatar gallery */
#gallery label {
	position: relative;
	float: left;
	margin: 10px;
	padding: 5px;
	width: auto;
	background: #161616;
	border: 1px solid #444;
	text-align: center;
}

#gallery label:hover {
	background: #040D1A;
	border-color: #00C0FF;
}
/* Form Styles
---------------------------------------- */

/* General form styles
----------------------------------------*/
fieldset {
	border-width: 0;
	font-family: Verdana, Helvetica, Arial, sans-serif;
	font-size: 1.1em;
}

input {
	font-weight: normal;
	cursor: pointer;
	vertical-align: middle;
	padding: 0 3px;
	font-size: 1em;
	font-family: Verdana, Helvetica, Arial, sans-serif;
}

select {
	font-family: Verdana, Helvetica, Arial, sans-serif;
	font-weight: normal;
	cursor: pointer;
	vertical-align: middle;
	border: 1px solid #7F7F7F;
	padding: 1px;
	background-color: #040d1a;
	font-size: 1em;
	color: #CCC;
}

option {
	padding-right: 1em;
}

option.disabled-option {
	color: #888;
}

textarea {
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	width: 60%;
	padding: 2px;
	font-size: 1em;
	line-height: 1.4em;
}

label {
	cursor: default;
	padding-right: 5px;
	color: #FFF;
}

label input {
	vertical-align: middle;
}

label img {
	vertical-align: middle;
}

/* Definition list layout for forms
---------------------------------------- */
fieldset dl {
	padding: 4px 0;
}

fieldset dt {
	float: left;	
	width: 40%;
	text-align: left;
	display: block;
	color: #888;
}

fieldset dd {
	margin-left: 41%;
	vertical-align: top;
	margin-bottom: 3px;
}

/* Specific layout 1 */
fieldset.fields1 dt {
	width: 15em;
	border-right-width: 0;
}

fieldset.fields1 dd {
	margin-left: 15em;
	border-left-width: 0;
}

fieldset.fields1 {
	background-color: transparent;
}

fieldset.fields1 div {
	margin-bottom: 3px;
}

/* Set it back to 0px for the reCaptcha divs: PHPBB3-9587 */
fieldset.fields1 #recaptcha_widget_div div {
	margin-bottom: 0;
}

/* Specific layout 2 */
fieldset.fields2 dt {
	width: 15em;
	border-right-width: 0;
}

fieldset.fields2 dd {
	margin-left: 16em;
	border-left-width: 0;
}

/* Form elements */
dt label {
	font-weight: bold;
	text-align: left;
}

dd label {
	white-space: nowrap;
	color: #CCC;
}

dd input, dd textarea {
	margin-right: 3px;
}

dd select {
	width: auto;
}

dd textarea {
	width: 85%;
}

/* Hover effects */
fieldset dl:hover dt label {
	color: #00C0FF;
}

fieldset.fields2 dl:hover dt label {
	color: #00C0FF;
}

#timezone {
	width: 95%;
}

* html #timezone {
	width: 50%;
}

/* Quick-login */
div.quick-login-bg {
	display: none;
	position: fixed;
	background: #000000;
	opacity: 0.7;
	/*filter: alpha(opacity=70);*/
	top: 0px;
	left: 0px;
	min-width: 100%;
	min-height: 100%;
	width: 100%;
	height: 100%;
	z-index: 1001;
}
form.quick-login-panel {
	display: none;
	position: fixed;
	top: 50%;
	left: 50%;
	margin: -201px;
	width: 400px;
	background: #1B1B1B url("{T_IMAGESET_PATH}/images/poll-bg.jpg") repeat-x 50% 0;
	border: 5px solid #333;
	border-radius: 3px;
	z-index: 1002;
}
form.quick-login-panel > div {
	background: url("{T_IMAGESET_PATH}/images/poll-left.gif") no-repeat 0 0;
	border: 1px solid #000;
}
form.quick-login-panel > div > div {
	background: url("{T_IMAGESET_PATH}/images/poll-right.gif") no-repeat 100% 0;
	padding: 10px 15px 10px 15px;
	border: 1px solid #575757;
}
fieldset.quick-login {
	margin-top: 5px;
}
fieldset.quick-login input {
	width: auto;
}
fieldset.quick-login input.inputbox {
	margin: 13px 0 0 32px;
	width: 171px;
	height: 18px;
	border-radius: 2px;
	font-size: 1.1em;
}
fieldset.quick-login label {
	white-space: nowrap;
	padding-right: 2px;
	font-size: 1em;
}
form.quick-login-panel h3 {
	text-align: center;
	margin-top: 10px;
}
.quick-login div.username, .quick-login div.password {
	margin: 20px 0;
}
.quick-login div.username div, .quick-login div.password div {
	background: url("{T_IMAGESET_PATH}/images/options-account-bg.gif") no-repeat 50% 100%;
	width: 241px;
	height: 49px;
	margin: 0 auto;
	position: relative;
}
.quick-login div.password div {
	background: url("{T_IMAGESET_PATH}/images/options-email-bg.gif") no-repeat 50% 100%;
}
.quick-login div.username label, .quick-login div.password label {
	height: 20px;
	width: 200px;
	position: absolute;
	top: -6px;
	left: -3px;
	text-transform: uppercase;
	text-indent: -5000px;
}
.quick-login div.username label {
	background: url("{T_IMAGESET_PATH}/{S_USER_LANG}/login-account.gif") no-repeat 0 0;
}
.quick-login div.password label {
	background: url("{T_IMAGESET_PATH}/{S_USER_LANG}/login-password.gif") no-repeat 0 0;
}
.quick-login .controls {
	text-align: center;
}
.quick-login .controls label {
	display: block;
	margin-bottom: 15px;
	padding: 0;
}
.quick-login .button2 {
	margin: 0;
}

/* Display options on viewtopic/viewforum pages  */
fieldset.display-options {
	text-align: center;
	margin: 3px 0 5px 0;
}

fieldset.display-options.right-box {
	text-align: right;
}

fieldset.display-options label {
	white-space: nowrap;
	padding-right: 2px;
}

fieldset.display-options a {
	margin-top: 3px;
}

/* Display actions for ucp and mcp pages */
fieldset.display-actions {
	text-align: right;
	line-height: 2em;
	white-space: nowrap;
	padding-right: 1em;
}

fieldset.display-actions label {
	white-space: nowrap;
	padding-right: 2px;
}

fieldset.sort-options {
	line-height: 2em;
}

/* MCP forum selection*/
fieldset.forum-selection {
	margin: 5px 0 3px 0;
	float: right;
}

fieldset.forum-selection2 {
	margin: 13px 0 3px 0;
	float: right;
}

/* Jumpbox */
fieldset.jumpbox {
	text-align: right;
	margin-top: 15px;
	height: 2.5em;
}

fieldset.quickmod {
	width: 50%;
	float: right;
	text-align: right;
	height: 2.5em;
}

/* Submit button fieldset */
fieldset.submit-buttons {
	text-align: center;
	vertical-align: middle;
	margin: 5px 0;
}

fieldset.submit-buttons input {
	vertical-align: middle;
	padding: 4px 6px;
}

/* Posting page styles
----------------------------------------*/

/* Buttons used in the editor */
#format-buttons {
	margin: 15px 0 5px 0;
}

#format-buttons input, #format-buttons select {
	vertical-align: middle;
}

/* Main message box */
#message-box {
	width: 80%;
}

#message-box textarea {
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
	width: 450px;
	height: 270px;
	min-width: 100%;
	max-width: 100%;
	font-size: 1.2em;
	color: #CCC;
	resize: vertical;
}

/* Emoticons panel */
#smiley-box {
	width: 18%;
	float: right;
}

#smiley-box img {
	margin: 3px;
}

/* Input field styles
---------------------------------------- */
.inputbox {
	background-color: #040d1a;
	border: 1px solid #7F7F7F;
	color: #CCC;
	padding: 2px;
	cursor: text;
}

.inputbox:hover {
	border: 1px solid #11A3EA;
}

.inputbox:focus {
	border: 1px solid #11A3EA;
	color: #FFF;
}

input.inputbox	{ width: 85%; }
input.medium	{ width: 50%; }
input.narrow	{ width: 25%; }
input.tiny		{ width: 125px; }

textarea.inputbox {
	width: 85%;
}

.autowidth {
	width: auto !important;
}

/* Form button styles
---------------------------------------- */
input.button1, input.button2 {
	font-size: 11px;
	font-size: 1.1rem;
}

a.button1, input.button1, input.button3, a.button2, input.button2 {
	width: auto !important;
	padding: 2px 3px;
	border: 1px solid #666;
	border-radius: 2px;
	background-color: #1a1a1a;
	background-image: linear-gradient(to top, #1a1a1a, #3a3a3a);
	box-shadow: inset 0 0 2px 1px #1a1a1a, 0 2px 5px 1px rgba(0,0,0,0.5);
	text-shadow: 1px 2px 1px rgba(0,0,0,0.6);
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	color: #DDD;
}

a.button1, input.button1 {
	font-weight: bold;
}

input.button3 {
	padding: 0;
	margin: 0;
	line-height: 5px;
	height: 12px;
	background-image: none;
	font-variant: small-caps;
}

/* Alternative button */
a.button2, input.button2, input.button3 {
	border: 1px solid #4A4A4A;
	border-radius: 2px;
	background-color: #1a1a1a;
	background-image: linear-gradient(to top, #111, #333);
}

/* <a> button in the style of the form buttons */
a.button1, a.button1:link, a.button1:visited, a.button1:active, a.button2, a.button2:link, a.button2:visited, a.button2:active {
	text-decoration: none;
	color: #DDD;
	padding: 2px 8px;
	line-height: 250%;
	vertical-align: text-bottom;
}

/* Hover states */
a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover {
	border-color: #00C0FF;
	background-position: 0 100%;
	box-shadow: 0 0 2px 1px rgba(255,255,255,0.3);
	color: #FFF;
}

input.button1:active, input.button3:active, input.button2:active {
	background-image: linear-gradient(to bottom, #111, #222);
	box-shadow: inset 0 0 2px 1px #000, 0 2px 5px 1px rgba(0,0,0,0.5);
	border-color: #888;
}

input.disabled {
	font-weight: normal;
	color: #999;
}



/* Topic and forum Search */
.search-box {
	margin-top: 3px;
	margin-left: 5px;
	float: left;
}

.search-box input {
}

input.search {
	background-image: url("{T_IMAGESET_PATH}/images/icons/icon_textbox_search.gif");
	background-repeat: no-repeat;
	background-position: left 1px;
	padding-left: 17px;
}

.full { width: 95%; }
.medium { width: 50%;}
.narrow { width: 25%;}
.tiny { width: 10%;}


/* Custom quick-reply style
---------------------------------------- */

.wow-post-frame1 { background: url("{T_IMAGESET_PATH}/images/post-main-bg.jpg") 50% 7px no-repeat #1b1b1b; max-width: 757px; margin: 0 auto; } 
.wow-post-frame2 { background: url("{T_IMAGESET_PATH}/images/post-out-sides.gif") 50% 0 repeat-y; } 
.wow-post-frame3 { background: url("{T_IMAGESET_PATH}/images/post-out-bot.gif") 50% 100% no-repeat; }
.wow-post-frame4 { background: url("{T_IMAGESET_PATH}/images/post-out-top.gif") 50% 0 no-repeat; padding-bottom: 25px; }

.wow-message-box1 { background: url("{T_IMAGESET_PATH}/images/post-message-box-sides.gif") 0 0 repeat-y; background-size: 100% auto; /*width: 643px;*/ margin: 0 auto; } 
.wow-message-box2 { background: url("{T_IMAGESET_PATH}/images/post-message-box-top.gif") 0 0 no-repeat; background-size: 100% auto; } 
.wow-message-box3 { background: url("{T_IMAGESET_PATH}/images/post-message-box-bot.gif") 0 100% no-repeat; background-size: 100% auto; padding: 15px 19px 27px 15px; }

.wow-util-box1 { background: url("{T_IMAGESET_PATH}/images/post-util-sides.gif") 0 0 repeat-y; background-size: 100% 100%; /*width: 643px;*/ margin: 0 auto; } 
.wow-util-box2 { background: url("{T_IMAGESET_PATH}/images/post-util-top.gif") 0 0 no-repeat; background-size: 100% auto; } 
.wow-util-box3 { background: url("{T_IMAGESET_PATH}/images/post-util-bot.gif") 0 100% no-repeat; background-size: 100% auto; padding: 12px 10px; position: relative; }

#qr_editor_div {
	padding: 0;
	background: none;
	border: none;
	box-shadow: none;
}
#qr_editor_div .inner {
	padding: 10px 0 0 0;
	max-width: 643px;
	margin: 0 auto;
}
#qr_editor_div a.up {
	position: absolute;
	right: 25px;
	top: 20px;
	float: none;
} 
#qr_editor_div fieldset.fields1 div {
	margin-bottom: 0;
} 
#qr_editor_div #message-box {
	width: auto;
	margin:0;
}
#qr_editor_div #message-box textarea { 
	border-radius: 5px; 
	background: #0D1A2D;
	background: #0D1A2D linear-gradient(to bottom, rgba(8,17,38,1) 0,rgba(13,26,45,0) 32px); 
	transition: box-shadow 0.25s ease-in-out 0s; 
}
#qr_editor_div #message-box textarea:focus {
	box-shadow: 0 0 3px 1px #11A3EA;
}
#qr_showeditor_div {
	background: none;
	border: none;
	box-shadow: none;
	padding: 0;
}
#qr_showeditor_div .content {
	background: url("{T_IMAGESET_PATH}/images/banner-decor-bg.png") 50% 0 no-repeat;
	position: relative;
	top: -7px; }
#qr_showeditor_div .content input {
	background: none;
	width: 270px;
	color: #DDD;
	border: none;
	font-size: 15px;
	font-size: 1.5rem;
	font-weight:bold;
	text-shadow: 0px 2px 3px #000;
}

input#pf_pbbnetavatar, label[for=pf_pbbnetavatar] {
	display: none;
}
/* Style Sheet Tweaks

These style definitions are mainly IE specific 
tweaks required due to its poor CSS support.
-------------------------------------------------*/
* html table, * html select, * html input { font-size: 100%; }
* html hr { margin: 0; }

html>body table.table1 { width: 100%; }	/* Reset 100% for opera */

* html ul.topiclist li { position: relative; }
* html .postbody h3 img { vertical-align: middle; }

/* Form styles */
html>body dd label input { vertical-align: text-bottom; }	/* Align checkboxes/radio buttons nicely */

* html input.button1, * html input.button2 {
	padding-bottom: 0;
	margin-bottom: 1px;
}

/* Misc layout styles */
* html .column1, * html .column2 { width: 45%; }

/* Nice method for clearing floated blocks without having to insert any extra markup (like spacer above)
   From http://www.positioniseverything.net/easyclearing.html 
#tabs:after, #minitabs:after, .post:after, .navbar:after, fieldset dl:after, ul.topiclist dl:after, ul.linklist:after, dl.polls:after {
	content: "."; 
	display: block; 
	height: 0; 
	clear: both; 
	visibility: hidden;
}*/

.clearfix, #tabs, #minitabs, fieldset dl, ul.topiclist dl, dl.polls {
	height: 1%;
	overflow: hidden;
}

/* viewtopic fix */
* html .post {
	height: 25%;
	overflow: hidden;
}

/* navbar fix */
* html .clearfix, * html .navbar, ul.linklist {
	height: 4%;
	overflow: hidden;
}

/* Simple fix so forum and topic lists always have a min-height set, even in IE6
	From http://www.dustindiaz.com/min-height-fast-hack */
dl.icon {
	min-height: 35px;
	height: auto !important;
	height: 35px;
}

* html li.row dl.icon dt {
	height: 35px;
	overflow: visible;
}

* html #search-box {
	width: 25%;
}

/* Correctly clear floating for details on profile view */
*:first-child+html dl.details dd {
	margin-left: 30%;
	float: none;
}

* html dl.details dd {
	margin-left: 30%;
	float: none;
}

/* #minitabs fix for IE */
.tabs-container {
	/*zoom: 1;*/
}

#minitabs {
	white-space: nowrap;
	/**min-width: 50%;*/
}

/*.postbody *::-moz-selection, .postbody *::-webkit-selection, .postbody *::selection {
	text-shadow: none;
}*/
/* all included now, will use this later maybe */
/* Game Icons for PBWoW2 */

/* === WoW === */
/*.game-icons-a { }  default and missing value */
.game-icons-a.wow-1 { 			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_human_male.jpg"); }
.game-icons-a.wow-1.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_human_female.jpg"); }
.game-icons-a.wow-2 { 			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_orc_male.jpg"); }
.game-icons-a.wow-2.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_orc_female.jpg"); }
.game-icons-a.wow-3 { 			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_dwarf_male.jpg"); }
.game-icons-a.wow-3.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_dwarf_female.jpg"); }
.game-icons-a.wow-4 { 			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_night-elf_male.jpg"); }
.game-icons-a.wow-4.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_night-elf_female.jpg"); }
.game-icons-a.wow-5 {			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_undead_male.jpg"); }
.game-icons-a.wow-5.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_undead_female.jpg"); }
.game-icons-a.wow-6 { 			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_tauren_male.jpg"); }
.game-icons-a.wow-6.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_tauren_female.jpg"); }
.game-icons-a.wow-7 { 			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_gnome_male.jpg"); }
.game-icons-a.wow-7.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_gnome_female.jpg"); }
.game-icons-a.wow-8 { 			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_troll_male.jpg"); }
.game-icons-a.wow-8.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_troll_female.jpg"); }
.game-icons-a.wow-9 { 			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_goblin_male.jpg"); }
.game-icons-a.wow-9.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_goblin_female.jpg"); }
.game-icons-a.wow-10 { 			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_blood-elf_male.jpg"); }
.game-icons-a.wow-10.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_blood-elf_female.jpg"); }
.game-icons-a.wow-11 { 			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_draenei_male.jpg"); }
.game-icons-a.wow-11.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_draenei_female.jpg"); }
.game-icons-a.wow-12 { 			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_worgen_male.jpg"); }
.game-icons-a.wow-12.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_worgen_female.jpg"); }
.game-icons-a.wow-13 { 			background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_pandaren_male.jpg"); }
.game-icons-a.wow-13.female { 	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/race_pandaren_female.jpg"); }

/*.game-icons-b { }  default and missing value */
.game-icons-b.wow-1 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/class_warrior.jpg"); }
.game-icons-b.wow-2 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/class_paladin.jpg"); }
.game-icons-b.wow-3 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/class_hunter.jpg"); }
.game-icons-b.wow-4 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/class_rogue.jpg"); }
.game-icons-b.wow-5 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/class_priest.jpg"); }
.game-icons-b.wow-6 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/class_death-knight.jpg"); }
.game-icons-b.wow-7 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/class_shaman.jpg"); }
.game-icons-b.wow-8 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/class_mage.jpg"); }
.game-icons-b.wow-9 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/class_warlock.jpg"); }
.game-icons-b.wow-10 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/class_monk.jpg"); }
.game-icons-b.wow-11 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wow/class_druid.jpg"); }

/*.game-icons-c { }  default and missing value */
.game-icons-c.wow-1 { background-image: url("{T_IMAGESET_PATH}/images/icons/wow/faction_1.gif"); }
.game-icons-c.wow-2 { background-image: url("{T_IMAGESET_PATH}/images/icons/wow/faction_2.gif"); }
.game-icons-c.wow-3 { background-image: url("{T_IMAGESET_PATH}/images/icons/wow/faction_3.gif"); }


/* === Diablo === */
.game-icons-a.diablo-1 { 		background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/barbarian_male.png"); }
.game-icons-a.diablo-1.female { background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/barbarian_female.png"); }
.game-icons-a.diablo-2 { 		background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/demonhunter_male.png"); }
.game-icons-a.diablo-2.female { background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/demonhunter_female.png"); }
.game-icons-a.diablo-3 { 		background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/monk_male.png"); }
.game-icons-a.diablo-3.female { background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/monk_female.png"); }
.game-icons-a.diablo-4 { 		background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/witchdoctor_male.png"); }
.game-icons-a.diablo-4.female { background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/witchdoctor_female.png"); }
.game-icons-a.diablo-5 {		background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/wizard_male.png"); }
.game-icons-a.diablo-5.female { background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/wizard_female.png"); }
.game-icons-a.diablo-6 {		background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/crusader_male.png"); }
.game-icons-a.diablo-6.female { background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/crusader_female.png"); }

.game-icons-b.diablo-1 { background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/templar.png"); }
.game-icons-b.diablo-2 { background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/scoundrel.png"); }
.game-icons-b.diablo-3 { background-image: url("{T_IMAGESET_PATH}/images/icons/diablo/enchantress.png"); }


/* === Heroes of the Storm === */
.game-icons-a.hots-1 {	background-image: url("{T_IMAGESET_PATH}/images/icons/hots/pony.png"); }
.game-icons-a.hots-2 {	background-image: url("{T_IMAGESET_PATH}/images/icons/hots/dono.png"); }
.game-icons-a.hots-3 {	background-image: url("{T_IMAGESET_PATH}/images/icons/hots/dono.png"); }

.game-icons-b.hots-1 {	background-image: url("{T_IMAGESET_PATH}/images/icons/hots/pony.png"); }
.game-icons-b.hots-2 {	background-image: url("{T_IMAGESET_PATH}/images/icons/hots/dono.png"); }
.game-icons-b.hots-3 {	background-image: url("{T_IMAGESET_PATH}/images/icons/hots/dono.png"); }

.game-icons-c.hots-1 {	background-image: url("{T_IMAGESET_PATH}/images/icons/hots/pony.png"); }
.game-icons-c.hots-2 {	background-image: url("{T_IMAGESET_PATH}/images/icons/hots/dono.png"); }
.game-icons-c.hots-3 {	background-image: url("{T_IMAGESET_PATH}/images/icons/hots/dono.png"); }


/* === Wildstar === */
.game-icons-a.wildstar-1 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/race_human.gif"); }
.game-icons-a.wildstar-2 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/race_cassian.gif"); }
.game-icons-a.wildstar-3 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/race_granok.gif"); }
.game-icons-a.wildstar-4 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/race_draken.gif"); }
.game-icons-a.wildstar-5 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/race_aurin.gif"); }
.game-icons-a.wildstar-6 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/race_chua.gif"); }
.game-icons-a.wildstar-7 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/race_mordesh.gif"); }
.game-icons-a.wildstar-8 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/race_mechari.gif"); }

.game-icons-b.wildstar-1 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/class_warrior.png"); }
.game-icons-b.wildstar-2 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/class_esper.png"); }
.game-icons-b.wildstar-3 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/class_spellslinger.png"); }
.game-icons-b.wildstar-4 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/class_stalker.png"); }
.game-icons-b.wildstar-5 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/class_medic.png"); }
.game-icons-b.wildstar-6 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/class_engineer.png"); }

.game-icons-c.wildstar-1 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/faction_exile.png"); }
.game-icons-c.wildstar-2 {	background-image: url("{T_IMAGESET_PATH}/images/icons/wildstar/faction_dominion.png"); }

/* Custom CSS for PBWoW 2 

You can customize whatever you want.
Many of these rules are for PBWoW.com specifically,
my personal preference so to speak */

/* Comment-out the fields that you DO want to display */
.wow-info-frame .rank, 
.wow-info-frame .special-rank, 
.wow-info-frame .numberposts, 
/*.wow-info-frame .joined,*/
/*.wow-info-frame .guild,*/
.wow-info-frame .pbguild, 
.wow-info-frame .pblevel, 
.wow-info-frame .pbrace, 
.wow-info-frame .pbgender, 
.wow-info-frame .pbclass, 
.wow-info-frame .pbarmorycharlink, 
.wow-info-frame .pbarmoryguildlink, 
.wow-info-frame .pbdclass, 
.wow-info-frame .pbdgender, 
.wow-info-frame .pbdfollower,
.wow-info-frame .pbwsrace, 
.wow-info-frame .pbwsclass, 
.wow-info-frame .pbwsgender,
.wow-info-frame .pbbnethost,
.wow-info-frame .pbbnetrealm,
.wow-info-frame .pbbnetname,
.wow-info-frame .pbbnetavatar { 
	display: none; 
}

.donate-button {
	background: url('{T_IMAGESET_PATH}/images/donate.jpg') no-repeat 0 0;
	width: 300px;
	height: 220px;
	padding: 0;
	margin: 0;
}

.donate-button:hover {
	background-position: 0 -220px;
}

.headerbar .icon-custom1 {
	background-image: url('{T_IMAGESET_PATH}/images/icons/unused/horde.png');
	background-position: 1px 70%;
	background-repeat: no-repeat;
	padding: 1px 0 0 18px;
}

.headerbar .icon-custom2 {
	background-image: url('{T_IMAGESET_PATH}/images/icons/unused/alliance.png');
	background-position: 1px 70%;
	background-repeat: no-repeat;
	padding: 1px 0 0 18px;
}
/* PBWoW Tribute style specific markup */

body {
	background-image: url("{T_THEME_PATH}/images/tribute2.jpg");
}

#page-body {
	box-shadow: 0 3px 12px 8px rgba(0,0,0,0.65);	
}

.headerbar { 
	background: rgba(0,0,0,0.75);
}

/* =Media queries
-------------------------------------------------------------- */

/* Small devices. */
@media screen and (max-width: 859px) {
	/* inherit from master */
}

@media screen and (max-width: 999px) {
	body {
		background-image: url("{T_THEME_PATH}/images/tribute2-small.jpg");
	}
}

@media screen and (min-width: 1000px) {
	#logo-wrap {
		min-height: 255px;
	}
	#logo {
		margin-top: 20px !important;
	}
	#wrapper {
		min-height: 700px;
	}
	#video-background {
		/*height: 600px;*/
		left: 50%;
		position: absolute;
		top: 0;
		z-index: -1000;
	}
	#video-element1 {
		background-image: none;
		position: absolute;
		top: 144px;
		right: 499px;
	}
	#video-element2 {
		background-image: none;
		position: absolute;
		top: 160px;
		left: 427px;
	}
	#video-element3 {
		background-image: none;
		position: absolute;
		top: -73px;
		left: -259px;
	}
}";s:10:"theme_path";s:14:"pbwow2_tribute";s:10:"theme_name";s:14:"PBWoW2_Tribute";s:11:"theme_mtime";s:10:"1418483082";s:11:"imageset_id";s:1:"2";s:13:"imageset_name";s:6:"PBWoW2";s:18:"imageset_copyright";s:19:"&copy; PayBas, 2013";s:13:"imageset_path";s:6:"pbwow2";s:13:"template_path";s:14:"pbwow2_tribute";}}