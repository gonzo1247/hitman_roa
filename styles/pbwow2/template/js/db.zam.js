var zamTooltip=new function(){var v,w,q,x,z;function m(a,b){var c=a.ownerDocument&&a.ownerDocument.defaultView&&a.ownerDocument.defaultView.getComputedStyle&&a.ownerDocument.defaultView.getComputedStyle(a,null),d=c&&c.getPropertyValue(b?"height":"width")||"";return d=d&&-1<d.indexOf(".")?parseFloat(d)+parseInt(c.getPropertyValue(b?"padding-top":"padding-left"))+parseInt(c.getPropertyValue(b?"padding-bottom":"padding-right"))+parseInt(c.getPropertyValue(b?"border-top-width":"border-left-width"))+parseInt(c.getPropertyValue(b?
"border-bottom-width":"border-right-width")):b?a.offsetHeight:a.offsetWidth}function G(a){for(var b=document.getElementsByTagName("body")[0],c=a.offsetLeft,d=a.offsetTop;a.offsetParent;){c+=a.offsetParent.offsetLeft;d+=a.offsetParent.offsetTop;if(a==b)break;a=a.offsetParent}return{x:c,y:d}}function H(a){var b=0,c=0;a||(a=window.event);if(a.pageX||a.pageY)b=a.pageX,c=a.pageY;else if(a.clientX||a.clientY)b=a.clientX+document.body.scrollLeft+document.documentElement.scrollLeft,c=a.clientY+document.body.scrollTop+
document.documentElement.scrollTop+8;return{x:b,y:c}}function I(){if("complete"!=document.readyState&&"loaded"!=document.readyState)setTimeout(I,50);else{if(!document.getElementById("headjs")){var a=document.createElement("div");a.id="headjs";a.style.position="absolute";a.style.left=0;a.style.right=0;a.style.top=0;a.style.zIndex=999999999;document.body.insertBefore(a,document.body.childNodes[0])}document.addEventListener?(document.addEventListener("mouseover",zamTooltip.mouseOver,!0),document.addEventListener("mousemove",
zamTooltip.mouseOut,!0)):(document.attachEvent("onmouseover",zamTooltip.mouseOver),document.attachEvent("onmousemove",zamTooltip.mouseOut));(!n||"object"==typeof zam_tooltips)&&zamTooltip.preload()}}function A(a){if(a.className&&-1<a.className.indexOf("zam-icon"))return a;if(a.parentNode.className&&-1<a.parentNode.className.indexOf("zam-icon"))return a.parentNode;var a=a.childNodes,b;for(b in a)if(a[b].className&&-1<a[b].className.indexOf("zam-icon"))return a[b];return!1}function B(a,b){if("A"!=a.nodeName||
0==a.href.length&&0==a.rel.length||-1!=a.href.indexOf("#")&&a.href.replace(/#.*/,"").replace(/&h=[0-9]+/,"")==location.href.replace(/#.*/,"").replace(/&h=[0-9]+/,"")||-1!=a.rel.indexOf("nott"))return!1;if(n&&!a.href.match(P)){var c=!1,d;for(d in o)d.match(/^[0-9]+$/)&&a.getAttribute("data-"+o[d])&&(c=!0);if(!c)return!1}var g;if(!n&&0==a.rel.indexOf("tt:")&&(g=Q(a.rel.replace(/^tt:/,"")))){"string"!=typeof b&&(h=g,s=b);(c=A(a))?(l=c,p=1):p=l=0;if("list"==b)return!1;if("return"==b)return g;C(g)}else if(g=
R(a.href)){"string"!=typeof b&&(h=g,s=b);(c=A(a))?(l=c,p=1):p=l=0;if("list"==b||"return"==b)return g.target=a,g;C(g)}else if(g=D(a)){"string"!=typeof b&&(h=g,s=b);(c=A(a))?(l=c,p=1):p=l=0;if("list"==b||"return"==b)return g.target=a,g;C(g)}else return!1;a.zamEvents||(a.title&&(a.title=""),a.zamEvents=1,a.onmousemove=J,a.onmouseout=function(){h=0;var a=document.getElementById("headtt");a&&a.parentNode.removeChild(a);l=0});return!0}function C(a){if(a.usingName&&f[a.site]&&f[a.site][a.lang]&&f[a.site][a.lang][a.dataType]){var b=
f[a.site][a.lang][a.dataType],c;for(c in b)if(b[c].name&&r(b[c].name)==r(t(a.id))){E(b[c]);return}F(a)}else!a.usingName&&f[a.site]&&f[a.site][a.lang]&&f[a.site][a.lang][a.dataType]&&f[a.site][a.lang][a.dataType][a.id]&&("forums"!=a.dataType||!a.reply&&f[a.site][a.lang][a.dataType][a.id][1]||f[a.site][a.lang][a.dataType][a.id][a.reply])?E(a):F(a)}function E(a){a="forums"==a.dataType?f[a.site][a.lang][a.dataType][a.id][a.reply?a.reply:1]:f[a.site][a.lang][a.dataType][a.id];h.usingName?h.site==a.site&&
h.lang==a.lang&&h.dataType==a.dataType&&r(h.id)==r(a.name)&&"Unavailable"!=a.html.substring(0,11)&&zamTooltip.renderTooltip(a.html):h.site==a.site&&h.lang==a.lang&&h.dataType==a.dataType&&h.id==a.id&&("forums"!=h.dataType||!h.reply&&!a.reply||h.reply&&a.reply&&h.reply==a.reply)&&"Unavailable"!=a.html.substring(0,11)&&zamTooltip.renderTooltip(a.html)}function J(a){"undefined"==typeof a&&(a=s);var b=document.getElementById("headtt");if(b){if(l){var c=G(l);b.style.top=c.y-m(b,1)+"px";b.style.left=c.x+
l.offsetWidth+"px";b.style.right="auto";a=K(a,b);if(a.x||a.y)if(a.y&&(b.style.top=c.y+l.offsetHeight+"px"),a.x)b.style.left="auto",b.style.right=L().r-c.x+"px",a.y||(b.style.top=c.y-m(b,1)+"px")}else{c=H(a);document.body.style.marginTop&&(c.y-=parseInt(document.body.style.marginTop));var d=m(b,1);d||(b.style.display="block",d=m(b,1));b.style.top=c.y-d-v+"px";b.style.left=c.x+w+"px";b.style.right="auto";a=K(a,b);if(a.x||a.y)if(a.y&&(b.style.top=c.y+v+17+"px"),a.x)b.style.left="auto",b.style.right=
a.x+w+"px"}b.style.display="block"}}function K(a,b){var c=0,d=0,g=L();if(l){var f=G(l);f.y-m(b,1)<g.t&&(d=1);f.x+l.offsetWidth+m(b)+1>g.r&&(c=1);return{x:c,y:d}}f=H(a);f.y-m(b,1)-6<g.t&&(d=1);f.x+m(b)+7>g.r&&(c=g.r-f.x);return{x:c,y:d}}function F(a,b){if(a.id&&("forums"==a.dataType||j[a.site]&&j[a.site].get&&j[a.site].get[a.dataType])){var c=document.createElement("script");c.type="text/javascript";if("forums"==a.dataType){var d=a.reply?a.id+":"+a.reply:a.id;c.src=b?a.host+j.general.get.forum.group+
d:a.host+j.general.get.forum.single+d}else c.src=b?a.host+j[a.site].get[a.dataType].group.replace(/LANGREP/,a.lang)+a.id:a.host+j[a.site].get[a.dataType].single.replace(/LANGREP/,a.lang)+a.id;document.head?document.head.appendChild(c):document.body.appendChild(c)}}function R(a){if(M){var b=a.match(/#m(sg)?(\d+)/),c=0;if(!b||0==b[2]){var b=a.match(/(mid)\=(\d+)/),d=a.match(/#(\d+)$/);d&&(c=d[1])}if(b&&b[2]&&(d=a.match(/^(http:\/\/([^\/\.]+)\.([^\/]+\.)?(allakha)?zam\.com)\//))){var g={host:d[1],site:d[2],
lang:"en",dataType:"forums",id:b[2]};if(c)g.reply=c;else if((a=a.match(/&p=([0-9]+)/))&&1!=a[1])g.reply=(a[1]-1)*N+2;return g}}a=a.replace(/#.*/,"");for(g in u)if(g.match(/^[0-9]+$/)&&j[u[g]]&&(c=a.match(j[u[g]].normal),b=!0,!c&&j[u[g]].extra&&(c=a.match(j[u[g]].extra),b=!1),c)){if("db"==c[3]||"itemraw"==c[3])c[3]="en";-1<a.indexOf("source=lucy")&&(c[4]="lucy");g={host:q[c[2]],site:c[2],lang:c[3],dataType:c[4],id:c[5]};b&&!O(g)&&(g.id=t(g.id),g.usingName=1);return g}(c=a.match(j.general.wiki))||(c=
a.match(j.general.wikiEdit));return c&&(a=c[6].replace(" ","_").toLowerCase().split("_"))&&a[0]&&a[1]&&x[a[0]]&&x[a[0]][a[1]]?g={host:c[1],site:c[2],lang:"en",dataType:x[a[0]][a[1]],id:t(c[7].replace(/_/g," ")),usingName:1}:!1}function D(a){var b,c,d;for(d in o)if(d.match(/^[0-9]+$/)&&(b=a.getAttribute("data-"+o[d]))){var g=z[o[d]]?z[o[d]]:o[d];if(c=b.match(S[g]))return"lucy"==g&&"item"==c[1]&&(c[1]="id"),a={game:o[d],data:b,host:q[g],site:g,lang:"en",dataType:c[1],id:c[2]},b=!0,"rift"==a.site&&"stc"==
a.dataType&&(b=!1),b&&!O(a)&&(a.id=t(a.id),a.usingName=1),a}return!1}function Q(a){var a=a.split("&"),b={},c;for(c in a)if("string"==typeof a[c]){var d=a[c].split("=");d[0]&&d[1]&&(b[d[0]]=d[1])}return b&&b.id&&b.type?(b.dataType=b.type,b.lang||(b.lang="en"),b.site||(b.site=window.location.href.replace(/https?:\/\/([^\/\.]+)\..*/,"$1")),b):!1}function O(a){return!0==j[a.site].idCheckResult&&a.id.match(j[a.site].idCheck)||!1==j[a.site].idCheckResult&&!a.id.match(j[a.site].idCheck)?!0:!1}function t(a){return a.replace(/%20/g,
" ").replace(/\+/g," ").replace(/%27/g,"'").replace(/%2C/g,",").replace(/^ +/,"").replace(/ +$/,"")}function r(a){return a.toLowerCase().replace(/^\s\s*/,"").replace(/\s\s*$/,"")}function L(){var a=document.body.scrollLeft,b=document.body.scrollTop;0==a&&(a=window.pageYOffset?window.pageXOffset:document.body.parentElement?document.body.parentElement.scrollLeft:0);0==b&&(b=window.pageYOffset?window.pageYOffset:document.body.parentElement?document.body.parentElement.scrollTop:0);return{l:a,t:b,r:a+
(window.innerWidth?window.innerWidth:document.body.clientWidth),b:b+(window.innerHeight?window.innerHeight:document.body.clientHeight)}}var P=/^https?:\/\/.*\.(zam|allakhazam)\.com\//;z={eq:"everquest"};q={everquest:"http://everquest.allakhazam.com",eq2:"http://eq2.zam.com",ffxi:"http://ffxi.allakhazam.com",ffxiv:"http://ffxiv.zam.com",lotro:"http://lotro.allakhazam.com",lucy:"http://everquest.allakhazam.com",rift:"http://rift.zam.com",war:"http://war.allakhazam.com"};x={eq2:{item:"item"},ffxi:{item:"item"},
ffxiv:{ability:"ability",item:"item",guildleve:"guildleve",local:"localleve"},rift:{ability:"ability",achievement:"achievement",item:"item",quest:"quest",mob:"npc",recipe:"recipe",collection:"collection"},war:{item:"item"}};var u="everquest,eq2,ffxi,ffxiv,lotro,lucy,rift,war".split(","),o="eq,eq2,ffxi,ffxiv,lotro,lucy,rift,war".split(","),j={general:{wiki:/^(http:\/\/([^\/\.]+)\.([^\/]+\.)?(allakha)?zam\.com)\/(wiki)\/([^\:]+)\:([^\/\?]+)/,wikiEdit:/^(http:\/\/([^\/\.]+)\.([^\/]+\.)?(allakha)?zam\.com)\/(wiki)\.html\?e=([^\:]+)\:([^\/\?]+)/,
get:{forum:{single:"/fcluster/msgmo.pl?id=",group:"/fcluster/msgmo.pl?ids="},wiki:{single:"/fcluster/msgmo.pl?id=",group:"/fcluster/msgmo.pl?ids="}}},everquest:{normal:/^(http:\/\/(everquest)\.[^\/]+)\/(db)\/[^\/\.]+\.html\?.*(item)=([^&;]+)/,idCheck:/[^0-9]/,idCheckResult:!1,get:{item:{single:"/cluster/ihtml.pl?zamtt=1&item=",group:"/cluster/ihtml.pl?zamtt=1&items="},lucy:{single:"/cluster/ihtml.pl?zamtt=1&source=lucy&item=",group:"/cluster/ihtml.pl?zamtt=1&source=lucy&items="}}},eq2:{normal:/^(http:\/\/(eq2)\.[^\/]+)\/(db)\/[^\/\.]+\.html\?.*eq2(item)=([^&;]+)/,
idCheck:/^[0-9a-f]{32,32}$/,idCheckResult:!0,get:{item:{single:"/db/tooltip.html?item=",group:"/db/tooltip.html?items="}}},ffxi:{normal:/^(http:\/\/(ffxi)\.[^\/]+)\/(db)\/[^\/\.]+\.html\?.*f(item)=([^&;]+)/,idCheck:/[^0-9]/,idCheckResult:!1,get:{item:{single:"/cluster/fitem.pl?zamtt=1&id=",group:"/cluster/fitem.pl?zamtt=1&ids="}}},ffxiv:{normal:/^(http:\/\/(ffxiv)\.[^\/]+)\/(db|en|de|fr|ja)\/[^\/\.]+\.html\?.*ffxiv(item|guildleve|localleve|ability)=([^&;]+)/,idCheck:/[^0-9]/,idCheckResult:!1,get:{item:{single:"/LANGREP/tooltip.html?item=",
group:"/LANGREP/tooltip.html?items="},guildleve:{single:"/LANGREP/tooltip.html?guildleve=",group:"/LANGREP/tooltip.html?guildleves="},localleve:{single:"/LANGREP/tooltip.html?localleve=",group:"/LANGREP/tooltip.html?localleves="},ability:{single:"/LANGREP/tooltip.html?ability=",group:"/LANGREP/tooltip.html?abilities="}}},lotro:{normal:/^(http:\/\/(lotro)\.[^\/]+)\/(db)\/[^\/\.]+\.html\?.*lotr(item)=([^&;]+)/,idCheck:/[^0-9]/,idCheckResult:!1,get:{item:{single:"/cluster/ihtml.pl?zamtt=1&item=",group:"/cluster/ihtml.pl?zamtt=1&items="}}},
lucy:{normal:/^(http:\/\/(lucy)\.[^\/]+)\/(itemraw)\.html\?.*(id)=([^&;]+)/,idCheck:/[^0-9]/,idCheckResult:!1,get:{id:{single:"/cluster/ihtml.pl?zamtt=1&for=lucy&item=",group:"/cluster/ihtml.pl?zamtt=1&for=lucy&items="}}},rift:{normal:/^(http:\/\/(rift)\.[^\/]+)\/(db|en)\/(item|ability|achievement|collection|npc|quest|recipe)\/([^\/]+)/,idCheck:/[^0-9A-F-]/,idCheckResult:!1,extra:/^(http:\/\/(rift)\.[^\/]+)\/(db|en)\/(stc).html\?riftstc=([A-Za-z0-9\._-]+)/,get:{item:{single:"/LANGREP/tooltip.html?item=",
group:"/LANGREP/tooltip.html?items="},ability:{single:"/LANGREP/tooltip.html?ability=",group:"/LANGREP/tooltip.html?abilities="},achievement:{single:"/LANGREP/tooltip.html?achievement=",group:"/LANGREP/tooltip.html?achievements="},collection:{single:"/LANGREP/tooltip.html?collection=",group:"/LANGREP/tooltip.html?collections="},npc:{single:"/LANGREP/tooltip.html?npc=",group:"/LANGREP/tooltip.html?npcs="},quest:{single:"/LANGREP/tooltip.html?quest=",group:"/LANGREP/tooltip.html?quests="},recipe:{single:"/LANGREP/tooltip.html?recipe=",
group:"/LANGREP/tooltip.html?recipes="},stc:{single:"/LANGREP/tooltip.html?stc=",group:"/LANGREP/tooltip.html?stcs="}}},war:{normal:/^(http:\/\/(war)\.[^\/]+)\/(db)\/[^\/\.]+\.html\?.*war(item|quest)=([^&;]+)/,idCheck:/[^0-9]/,idCheckResult:!1,get:{item:{single:"/cluster/iover.pl?zamtt=1&id=",group:"/cluster/iover.pl?zamtt=1&ids="},quest:{single:"/cluster/qover.pl?zamtt=1&id=",group:"/cluster/qover.pl?zamtt=1&ids="}}}},S={everquest:/^(item)=(.*)/,eq2:/^(item)=(.*)/,ffxi:/^(item)=(.*)/,ffxiv:/^(item|guildleve|localleve|ability)=(.*)/,
lotro:/^(item)=(.*)/,lucy:/^(item)=(.*)/,rift:/^(item|ability|achievement|collection|npc|quest|recipe|stc)=(.*)/,war:/^(item|quest)=(.*)/},n="undefined"==typeof ZAM?1:0,M=0,N=50;(function(){if(!n){for(var a="",b=document.cookie.split(";"),c=0;c<b.length;c++){for(var d=b[c];" "==d.charAt(0);)d=d.substring(1,d.length);0==d.indexOf("msgMo=")&&(a=d.substring(6,d.length))}"false"!=a&&(M=1,N=50)}})();var T=n?"//zam.zamimg.com":ZAM.staticUrl();(function(){if(!n){var a=(window.location+"").replace(/http:\/\/([^\/]+)\/?.*/,
"$1").split(".");if(4==a.length)for(var b in q)q[b]=q[b].replace(/(http:\/\/[^\.]+\.)/,"$1"+a[1]+".")}})();v=w=6;var y=0;(function(){var a=navigator.userAgent.toLowerCase().match(/msie ([0-9]+)/);a&&(y=a[1],9>y&&(v=w=12))})();var s="",f={},h=0,l=0,p=0;this.init=function(){if(document.body)if(y&&8>y&&"complete"!=document.readyState&&"loaded"!=document.readyState)setTimeout(zamTooltip.init,20);else{var a=document.createElement("link");a.rel="stylesheet";a.type="text/css";a.href=T+"/c/tooltips.css?5";
document.head?document.head.appendChild(a):document.body.appendChild(a);I()}else setTimeout(zamTooltip.init,20)};this.preload=function(){var a=!n&&document.getElementById("col-main")?document.getElementById("col-main"):document.body,a=a.getElementsByTagName("a"),b={},c;for(c in a){var d=B(a[c],"list");d&&(b[d.site]||(b[d.site]={}),b[d.site][d.lang]||(b[d.site][d.lang]={}),b[d.site][d.lang][d.dataType]||(b[d.site][d.lang][d.dataType]={}),"forums"==d.dataType?(b[d.site][d.lang][d.dataType][d.id]||(b[d.site][d.lang][d.dataType][d.id]=
{}),d.reply?b[d.site][d.lang][d.dataType][d.id][d.reply]={id:d.id,reply:d.reply,host:d.host}:b[d.site][d.lang][d.dataType][d.id][1]={id:d.id,host:d.host}):b[d.site][d.lang][d.dataType][d.id]={id:d.id,host:d.host})}var g,a=[],f;for(f in b)for(var h in b[f])for(var e in b[f][h])if("forums"!=e){a=[];for(c in b[f][h][e])if(b[f][h][e][c].id)a.push(b[f][h][e][c].id),g=b[f][h][e][c].host;else if("forums"==e)for(var i in b[f][h][e][c])"object"==typeof b[f][h][e][c][i]&&(g=b[f][h][e][c][i].host,b[f][h][e][c][i].reply?
a.push({id:c,reply:b[f][h][e][c][i].reply}):a.push({id:c}));d={host:g,site:f,lang:h,dataType:e};if("forums"==e){var k="";for(c in a)"object"==typeof a[c]&&(k=a[c].reply?k+(a[c].id+":"+a[c].reply+","):k+(a[c].id+","));d.id=k.replace(/,$/,"")}else d.id=a.join(",");F(d,1)}};this.modifyLinks=function(a,b,c){if("object"==typeof zam_tooltips){var d=zam_tooltips;if(d.colorlinks||d.iconizelinks||d.renamelinks||d.renamespecifiedlinks)for(var g=0,h=!n&&document.getElementById("col-main")?document.getElementById("col-main"):
document.body,h=h.getElementsByTagName("a"),j=0;j<h.length;j++)if(!(200<g||"object"!=typeof h[j])&&h[j]){var e=B(h[j],"return");if(e&&"yes"!=e.target.getAttribute("data-zam-modified")&&e.site==a&&e.lang==b&&e.dataType==c){e.target.setAttribute("data-zam-modified","yes");var i=!1;if(e.usingName){if(f[e.site]&&f[e.site][e.lang]&&f[e.site][e.lang][e.dataType]){var k=f[e.site][e.lang][e.dataType],l;for(l in k)k[l].name&&r(k[l].name)==r(t(e.id))&&(i=k[l])}}else f[e.site]&&f[e.site][e.lang]&&f[e.site][e.lang][e.dataType]&&
(i=f[e.site][e.lang][e.dataType][e.id]);if(i){if("forums"==c){if(!d.renameforumlinks)continue;e.reply?i[e.reply]&&(i=i[e.reply]):i[1]&&(i=i[1]);if(!i)continue}g++;if((d.renamelinks||d.renamespecifiedlinks&&"yes"==e.target.getAttribute("data-zamrename"))&&i.name&&e.target.innerHTML)e.target.innerHTML=i.name;d.colorlinks&&i.linkColor&&(e.target.className+=" "+i.linkColor);if(d.iconizelinks&&i.icon){var m;-1<i.icon.indexOf("<a")?(k=document.createElement("div"),k.innerHTML=i.icon,k=k.childNodes[0],i=
k.getElementsByTagName("a")[0],i.href=e.target.href,(m=D(e.target))&&k.setAttribute("data-"+m.game,m.data),i.setAttribute("data-zam-modified","yes")):(k=document.createElement("a"),k.href=e.target.href,(m=D(e.target))&&k.setAttribute("data-"+m.game,m.data),k.setAttribute("data-zam-modified","yes"),k.innerHTML=i.icon);e.target.parentNode.insertBefore(k,e.target)}}}}}};this.mouseOver=function(a){for(var b=a.target?a.target:a.srcElement,c=0;null!=b&&5>c&&!B(b,a);)b=b.parentNode,++c};this.mouseOut=function(a){s=
a};this.store=function(a){a.lang||(a.lang="en");f[a.site]||(f[a.site]={});f[a.site][a.lang]||(f[a.site][a.lang]={});f[a.site][a.lang][a.dataType]||(f[a.site][a.lang][a.dataType]={});"forums"==a.dataType?(f[a.site][a.lang][a.dataType][a.id]||(f[a.site][a.lang][a.dataType][a.id]={}),a.reply?f[a.site][a.lang][a.dataType][a.id][a.reply]=a:f[a.site][a.lang][a.dataType][a.id][1]=a):f[a.site][a.lang][a.dataType][a.id]=a;E(a)};this.renderTooltip=function(a){var b=p?' class="hide-icon"':"";document.getElementById("headjs").innerHTML=
'<div id="headtt"'+b+' style="display:none;position:absolute;z-index:99999999999">'+a+"</div>";J()}};zamTooltip.init();
