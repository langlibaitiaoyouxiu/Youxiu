<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\services\UrlServices;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>Game Paradise|中国网络游戏代练代打高端服务商!  </title>

<meta name="keywords" content="游戏代练,网游代练,代练工作室,lol代练" />
<meta name="description" content="Game Paradise论坛-提供游戏、网游、手游、代练、游戏代练工作室加盟等高端服务、是一个值得收藏的论坛! " />
<meta name="generator" content="Discuz! X3.2" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="http://www.dailianzj.com/" />
<link rel="stylesheet" type="text/css" href="data/cache/style_6_common.css?xa6" />
<link rel="stylesheet" type="text/css" href="data/cache/style_6_forum_index.css?xa6" />
<link rel="stylesheet" href="<?=UrlServices::HomeUrl('css/index.css')  ?>" />
<script type="text/javascript">var STYLEID = '6', STATICURL = 'static/', IMGDIR = 'static/image/common', VERHASH = 'xa6', charset = 'gbk', discuz_uid = '0', cookiepre = 'XXCv_2132_', cookiedomain = '', cookiepath = '/', showusercard = '1', attackevasive = '0', disallowfloat = 'newthread', creditnotice = '1|威望|,2|金钱|,3|贡献|,4|元宝|', defaultstyle = '', REPORTURL = 'aHR0cDovL3d3dy5kYWlsaWFuemouY29tLw==', SITEURL = 'http://www.dailianzj.com/', JSPATH = 'data/cache/', CSSPATH = 'data/cache/style_', DYNAMICURL = '';</script>
<script src="data/cache/common.js?xa6" type="text/javascript"></script>
<meta name="application-name" content="Game Paradise" />
<meta name="msapplication-tooltip" content="Game Paradise" />
<meta name="msapplication-task" content="name=网站首页;action-uri=http://www.dailianzj.com;icon-uri=http://www.dailianzj.com/static/image/common/bbs.ico" />
<script src="data/cache/forum.js?xa6" type="text/javascript"></script>
<script src="data/cache/portal.js?xa6" type="text/javascript"></script>
    <script src="template/wic_simple/static/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var jq=jQuery.noConflict();
    </script>
    <script src="template/wic_simple/static/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script> 
    <script language='javascript' type="text/javascript"> 
function ResumeError() { 
return true; 
} 
window.onerror = ResumeError; 
</script>
</head>
<body id="nv_forum" class="pg_index" onkeydown="if(event.keyCode==27) return false;">
	<div id="append_parent"></div><div id="ajaxwaitid"></div>
<div id="toptb" class="cl">
<div class="wp">

<div class="y">
<a id="switchblind" href="javascript:;" onClick="toggleBlind(this)" title="开启辅助访问" class="switchblind">开启辅助访问</a>

</div>
                <div class="wic_login y">
        
        <a href="<?=UrlServices::HomeUrl('login')  ?>">登录</a>
    <span class="pipe">|</span> 
    <a href="<?=UrlServices::HomeUrl('register')  ?>">立即注册</a> 
                </div>
</div>
</div>

<div id="qmenu_menu" class="p_pop blk" style="display: none;">
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=register" class="xi2 xw1">立即注册</a>
</div>
<div id="fjump_menu" class="btda"></div></div><div class="wic_header">
            <div class="wic_header_top cl">
                <div class="wp">
                                        <div class="wic_logo z">
                        <h2><a href="<?= UrlServices::HomeUrl('index')  ?>" title="Game paradise" style='font-size: 40px;' >Game paradise
                        </a></h2>
                    </div>
                    <div class="wic_search y">
                        <div id="scbar" class="cl">
<form id="scbar_form" method="post" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="search.php?searchsubmit=yes" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="0a3ec9e8" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="0" />
<input type="hidden" name="srhlocality" value="member::register" />
<table cellspacing="0" cellpadding="0">
<tr>
<td class="scbar_icon_td"></td>
<td class="scbar_txt_td"><input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" x-webkit-speech speech /></td>
<td class="scbar_type_td"><a href="javascript:;" id="scbar_type" class="xg1" onclick="showMenu(this.id)" hidefocus="true">搜索</a></td>
<td class="scbar_btn_td"><button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc" value="true"><strong class="xi2">搜索</strong></button></td>
<td class="scbar_hot_td">
<div id="scbar_hot">
<strong class="xw1">热搜: </strong>

<a href="search.php?mod=forum&amp;srchtxt=%BB%EE%B6%AF&amp;formhash=0a3ec9e8&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" class="xi2" sc="1">活动</a>



<a href="search.php?mod=forum&amp;srchtxt=%BD%BB%D3%D1&amp;formhash=0a3ec9e8&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" class="xi2" sc="1">交友</a>



<a href="search.php?mod=forum&amp;srchtxt=discuz&amp;formhash=0a3ec9e8&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" class="xi2" sc="1">discuz</a>

</div>
</td>
</tr>
</table>
</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li><li><a href="javascript:;" rel="user">用户</a></li></ul>
<script type="text/javascript">
initSearchmenu('scbar', '');
</script>
                    </div>
                </div>   
            </div>
            <div id="wic_hd" class="wic_header_bottom cl">
                <div class="wp">
                    <div class="wic_nav z cl">
                        <ul>
                    <li id="mn_N6666" ><a href="<?= UrlServices::HomeUrl('index')  ?>" hidefocus="true"  >首页</a></li>
                    <li id="mn_Nbde2" ><a href="<?= UrlServices::HomeUrl('hotgame')  ?>" hidefocus="true"  >热门游戏</a></li>
                    <li id="mn_Nd76b" ><a href="<?= UrlServices::HomeUrl('leveing')  ?>" hidefocus="true"  >代练通道</a></li>
                    <li id="mn_N6042" ><a href="<?= UrlServices::HomeUrl('raiders')  ?>" hidefocus="true"  >游戏攻略</a></li>
                    <li id="mn_Nef7e" ><a href="<?= UrlServices::HomeUrl('about')  ?>" hidefocus="true"  >关于我们</a></li>
                    <li id="mn_Nae26" ><a href="<?= UrlServices::HomeUrl('user')  ?>" hidefocus="true"  >用户中心</a></li>                                                    
                 </ul>
                                            </div>
                   
                </div>
            </div>
<?php $this->beginBody() ?>




   <?= $content ?>





   <?php $this->endBody() ?>
   <script>fixed_top_nv();</script>
   <script type="text/javascript">var cookieLogin = Ajax("TEXT");cookieLogin.get("connect.php?mod=check&op=cookie", function() {});</script>

<script type="text/javascript">(function(){var bdcs = document.createElement('script');bdcs.type = 'text/javascript';bdcs.async = true;bdcs.src = "http://znsv.baidu.com/customer_search/api/js?sid=16828058538646233243" + '&plate_url=' + encodeURIComponent(window.location.href) + '&t=' + Math.ceil(new Date()/3600000) + '&callback=znForDz';var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(bdcs, s);})();</script>
<script src="source/plugin/baidusubmit/template/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
var bdjq = jQuery.noConflict(true);

function znForDz(siteConfig){
    bdjq(function(){
        var zn = 'http://zhannei.baidu.com/cse/search?s=16828058538646233243';
        if (siteConfig && siteConfig.resultUrl){
            zn = 'http://' + siteConfig.resultUrl + '/cse/search?s=16828058538646233243'
        }
        var btn = bdjq("#scbar_btn");
        if (btn.length == 0) {
            btn = bdjq('button[name="searchsubmit"]');
        }
        if (btn.length == 0) {
            btn = bdjq('input[name="searchsubmit"]');
        }
        if (btn.length == 0) {
            btn = bdjq('#scbar_form input[type="submit"]');
        }
        if (btn.length == 0) {
            btn = bdjq('#scbar_form button');
        }            
        if (btn.length > 0) {
            btn.click(function(event){
                var mod = bdjq('#scbar_mod').val() || bdjq('form input[name="mod"]').val()
                var st = '';
                var txt = bdjq('#scbar_txt').val() || bdjq('form input[name="srchtxt"]').val();
                var user = '1';
                if (mod === 'user' && user === '1'){
                    st = 2;
                    window.open(zn + "&q=" + encodeURIComponent(txt) + "&fst=" + st + "&partner=discuz");
                    event.preventDefault();
                } else if (mod === 'forum'){
                    window.open(zn + "&q=" + encodeURIComponent(txt) + "&partner=discuz");
                    event.preventDefault();            
                }

            });
        }
        var hot = bdjq('#scbar_hot a')
            if (hot.length > 0){
                hot.click(function(event){
                var txt = bdjq(this).text();
                window.open(zn + "&q=" + encodeURIComponent(txt) + "&partner=discuz");
                event.preventDefault();
            });
        }
    });
}               
</script>               <div id="ft" class="wp"></div>
<div class="wic_footer cl">
    	<div class="wp">
            <div id="flk" class="y">
                <p>
                                        <a href="http://www.dailianzj.com/forum.php?mod=misc&action=showdarkroom" >小黑屋</a><span class="pipe">|</span><a href="http://www.dailianzj.com/forum.php?mobile=yes" >手机版</a><span class="pipe">|</span>                            <strong><a href="http://www.dailianzj.com/" target="_blank">Game Paradise</a></strong>
                    ( <a href="http://www.miitbeian.gov.cn/" target="_blank">辽ICP备17002186号-1</a> )                                        <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?eea042ea174bbfcd6a64e2d0a9e705b5";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>                </p>
                <p class="xs0">
                    GMT+8, 2018-4-15 10:44                    <span id="debuginfo">
                    , Processed in 0.048011 second(s), 14 queries
                        .
                                        </span>
                </p>
            </div>
            <div id="frt">
                <p>Powered by <strong><a href="http://www.discuz.net" target="_blank">Discuz!</a></strong> <em>X3.2</em></p>
                <p class="xs0">&copy; 2013-2017 <a href="http://www.dailianzj.com" target="_blank">Game Paradise|中国网络游戏代练代打高端服务商!</a></p>
            </div>
                                </div>
</div>
<script src="home.php?mod=misc&ac=sendmail&rand=1523760257" type="text/javascript"></script>
<div id="scrolltop">
<span hidefocus="true"><a title="返回顶部" onclick="window.scrollTo('0','0')" class="scrolltopa" ><b>返回顶部</b></a></span>
</div>
<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
			<div id="discuz_tips" style="display:none;"></div>
			<script type="text/javascript">
				var tipsinfo = '27309817|X3.2|0.6||0||0|7|1523760257|9db32c7ec4a45c2d2b81d0c58c68a953|2';
			</script>
			<script src="http://discuz.gtimg.cn/cloud/scripts/discuz_tips.js?v=1" type="text/javascript" charset="UTF-8"></script><script type="text/javascript">
			if($('debuginfo')) {
				$('debuginfo').innerHTML = '. This page is cached  at 10:44:17  .';
			}
			</script>
<?php $this->endPage() ?>