

<div class="p_pop h_pop" id="mn_userapp_menu" style="display: none"></div><div id="mu" class="cl">
</div></div>
<script src="template/wic_simple/static/js/nv.js" type="text/javascript"></script>

<div id="wp" class="wp">
<div id="ct" class="ptm wp w cl">
<div class="nfl" id="main_succeed" style="display: none">
<div class="f_c altw">
<div class="alert_right">
<p id="succeedmessage"></p>
<p id="succeedlocation" class="alert_btnleft"></p>
<p class="alert_btnleft"><a id="succeedmessage_href">如果您的浏览器没有自动跳转，请点击此链接</a></p>
</div>
</div>
</div>
<div class="mn" id="main_message">
<div class="bm">
<div class="bm_h bbs">
<span class="y">
<a href="member.php?mod=register" class="xi2">没有帐号？<a href="member.php?mod=register">立即注册</a></a>
</span>
<h3 class="xs2">登录</h3>
</div>
<div>

<div id="main_messaqge_LJSXx">
<div id="layer_login_LJSXx">
<h3 class="flb">
<em id="returnmessage_LJSXx">
</em>
<span></span>
</h3>
<form method="post" autocomplete="off" name="login" id="loginform_LJSXx" class="cl" onsubmit="pwdclear = 1;ajaxpost('loginform_LJSXx', 'returnmessage_LJSXx', 'returnmessage_LJSXx', 'onerror');return false;" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;loginhash=LJSXx">
<div class="c cl">
<input type="hidden" name="formhash" value="0a3ec9e8" />
<input type="hidden" name="referer" value="/" />
<div class="rfm">
<table>
<tr>
<th>
<span class="login_slct">
<select name="loginfield" style="float: left;" width="45" id="loginfield_LJSXx">
<option value="username">用户名</option>
<option value="email">Email</option>
</select>
</span>
</th>
<td><input type="text" name="username" id="username_LJSXx" autocomplete="off" size="30" class="px p_fre" tabindex="1" value="" /></td>
<td class="tipcol"><a href="member.php?mod=register">立即注册</a></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th><label for="password3_LJSXx">密码:</label></th>
<td><input type="password" id="password3_LJSXx" name="password" onfocus="clearpwd()" size="30" class="px p_fre" tabindex="1" /></td>
<td class="tipcol"><a href="javascript:;" onclick="display('layer_login_LJSXx');display('layer_lostpw_LJSXx');" title="找回密码">找回密码</a></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th>安全提问:</th>
<td><select id="loginquestionid_LJSXx" width="213" name="questionid" onchange="if($('loginquestionid_LJSXx').value > 0) {$('loginanswer_row_LJSXx').style.display='';} else {$('loginanswer_row_LJSXx').style.display='none';}">
<option value="0">安全提问(未设置请忽略)</option>
<option value="1">母亲的名字</option>
<option value="2">爷爷的名字</option>
<option value="3">父亲出生的城市</option>
<option value="4">您其中一位老师的名字</option>
<option value="5">您个人计算机的型号</option>
<option value="6">您最喜欢的餐馆名称</option>
<option value="7">驾驶执照最后四位数字</option>
</select></td>
</tr>
</table>
</div>
<div class="rfm" id="loginanswer_row_LJSXx"  style="display:none">
<table>
<tr>
<th>答案:</th>
<td><input type="text" name="answer" id="loginanswer_LJSXx" autocomplete="off" size="30" class="px p_fre" tabindex="1" /></td>
</tr>
</table>
</div>


<div class="rfm ">
<table>
<tr>
<th></th>
<td><label for="cookietime_LJSXx"><input type="checkbox" class="pc" name="cookietime" id="cookietime_LJSXx" tabindex="1" value="2592000"  />自动登录</label></td>
</tr>
</table>
</div>

<div class="rfm mbw bw0">
<table width="100%">
<tr>
<th>&nbsp;</th>
<td>
<button class="pn pnc" type="submit" name="loginsubmit" value="true" tabindex="1"><strong>登录</strong></button>
</td>
<td>
<a href="javascript:;" onclick="ajaxget('member.php?mod=clearcookies&formhash=0a3ec9e8', 'returnmessage_LJSXx', 'returnmessage_LJSXx');return false;" title="清除痕迹" class="y">清除痕迹</a></td>
</tr>
</table>
</div>

<div class="rfm bw0  mbw">
<hr class="l" />
<table>
<tr>
<th>快捷登录:</th>
<td>

<a href="http://www.dailianzj.com/connect.php?mod=login&op=init&referer=%2F&statfrom=login" target="_top" rel="nofollow"><img src="static/image/common/qq_login.gif" class="vm" /></a>

</td>
</tr>
</table>
</div>
</div>
</form>
</div>
<div id="layer_lostpw_LJSXx" style="display: none;">
<h3 class="flb">
<em id="returnmessage3_LJSXx">找回密码</em>
<span></span>
</h3>
<form method="post" autocomplete="off" id="lostpwform_LJSXx" class="cl" onsubmit="ajaxpost('lostpwform_LJSXx', 'returnmessage3_LJSXx', 'returnmessage3_LJSXx', 'onerror');return false;" action="member.php?mod=lostpasswd&amp;lostpwsubmit=yes&amp;infloat=yes">
<div class="c cl">
<input type="hidden" name="formhash" value="0a3ec9e8" />
<input type="hidden" name="handlekey" value="lostpwform" />
<div class="rfm">
<table>
<tr>
<th><span class="rq">*</span><label for="lostpw_email">Email:</label></th>
<td><input type="text" name="email" id="lostpw_email" size="30" value=""  tabindex="1" class="px p_fre" /></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th><label for="lostpw_username">用户名:</label></th>
<td><input type="text" name="username" id="lostpw_username" size="30" value=""  tabindex="1" class="px p_fre" /></td>
</tr>
</table>
</div>

<div class="rfm mbw bw0">
<table>
<tr>
<th></th>
<td><button class="pn pnc" type="submit" name="lostpwsubmit" value="true" tabindex="100"><span>提交</span></button></td>
</tr>
</table>
</div>
</div>
</form>
</div>
</div>

<div id="layer_message_LJSXx" class="f_c blr nfl" style="display: none;">
<h3 class="flb" id="layer_header_LJSXx">
</h3>
<div class="c"><div class="alert_right">
<div id="messageleft_LJSXx"></div>
<p class="alert_btnleft" id="messageright_LJSXx"></p>
</div>
</div>

<script type="text/javascript" reload="1">
var pwdclear = 0;
function initinput_login() {
document.body.focus();
if($('loginform_LJSXx')) {
$('loginform_LJSXx').username.focus();
}
simulateSelect('loginfield_LJSXx');
}
initinput_login();

function clearpwd() {
if(pwdclear) {
$('password3_LJSXx').value = '';
}
pwdclear = 0;
}
</script></div></div></div></div>
</div>
	</div>


