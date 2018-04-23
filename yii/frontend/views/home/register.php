<?php
use common\services\UrlServices;
?>

<div class="p_pop h_pop" id="mn_userapp_menu" style="display: none"></div><div id="mu" class="cl">
</div></div>
<script src="template/wic_simple/static/js/nv.js" type="text/javascript"></script>

<div id="wp" class="wp">
<script type="text/javascript">
var strongpw = new Array();
strongpw[0] = 1;
strongpw[1] = 2;
strongpw[2] = 3;
var pwlength = 0;
</script>

<script src="data/cache/register.js?xa6" type="text/javascript"></script>

<div id="ct" class="ptm wp cl">
<div class="nfl" id="main_succeed" style="display: none">
<div class="f_c altw">
<div class="alert_right">
<p id="succeedmessage"></p>
<p id="succeedlocation" class="alert_btnleft"></p>
<!-- <p class="alert_btnleft"><a id="succeedmessage_href">如果您的浏览器没有自动跳转，请点击此链接</a></p> -->
</div>
</div>
</div>
<div class="mn">

<div class="bm" id="main_message">

<div class="bm_h bbs" id="main_hnav">
<span class="y">
<!--<a href="?mod=logging&amp;action=login&amp;referer=http%3A%2F%2Fwww.dailianzj.com%2Fmember.php%3Fmod%3Dregister" onclick="showWindow('login', this.href);return false;" class="xi2"></a>--><a href="home/login">已有帐号？现在登录</a>
</span>
<h3 id="layer_reginfo_t" class="xs2"><a href="register.php">立即注册</a></h3>
</div>

<p id="returnmessage4"></p>

<form method="post" action="<?=UrlServices::HomeUrl('add')?>" autocomplete="off" name="register" id="registerform" >
	<div id="layer_reg" class="bm_c">
		<input type="hidden" name="regsubmit" value="yes" />
		<input type="hidden" name="formhash" value="0a3ec9e8" />
		<input type="hidden" name="referer" value="http://www.dailianzj.com/member.php?mod=register" />
		<input type="hidden" name="activationauth" value="" />
		<div class="mtw">
			<div id="reginfo_a">
				<div class="rfm">
					<table>
				        <th>
				<!--        <td><a href="plugin.php?id=huanxun_invite" style="color:#FF0000;font-weight:700;" target="_blank">还没有邀请码？点击此处购买</a></td>-->
				       </th>
				    </table>
				</div>
    			<div class="rfm">
					<table>
					<!--<tr>-->
					<!--<th><span class="rq">*</span><label for="invitecode">邀请码:</label></th>-->
					<!--<td><input type="text" id="invitecode" name="invitecode" autocomplete="off" size="25" onblur="checkinvite()" tabindex="1" class="px" required /></td>-->
					<!--<td class="tipcol"><i id="tip_invitecode" class="p_tip"></i><kbd id="chk_invitecode" class="p_chk"></kbd></td>-->
					<!--</tr>-->
					</table>
				</div>
				<div class="rfm">
					<table>
						<tr>
							<th><span class="rq">*</span><label for="JECg1W">用户名:</label></th>
							<td><input type="text" id="JECg1W" name="user_name" class="px" tabindex="1" value="" autocomplete="off" size="25" maxlength="15" required /></td>
							<td class="tipcol"><i id="tip_JECg1W" class="p_tip">用户名由 3 到 15 个字符组成</i><kbd id="chk_JECg1W" class="p_chk"></kbd></td>
						</tr>
					</table>
				</div>

<div class="rfm">
	<table>
		<tr>
			<th><span class="rq">*</span><label for="Idn6jS">密码:</label></th>
			<td>
				<input type="password" id="Idn6jS" name="user_pwd" size="25" tabindex="1" class="px" required />
			</td>
			<td class="tipcol">
				<i id="tip_Idn6jS" class="p_tip">请填写密码</i>
				<kbd id="chk_Idn6jS" class="p_chk"></kbd>
			</td>
		</tr>
	</table>
</div>

<div class="rfm">
	<table>
		<tr>
			<th><span class="rq">*</span><label for="qeAHKE">你的手机号</label></th>
			<td>
				<input type="text" id="qeAHKE" name="user_mobile" size="25" tabindex="1" value="" class="px" required />
			</td>
			<td class="tipcol">
				<i id="tip_qeAHKE" class="p_tip">你的手机号</i>
				<kbd id="chk_qeAHKE" class="p_chk"></kbd>
			</td>
		</tr>
	</table>
</div>
<div class="rfm">
	<table>
		<tr>
			<th><span class="rq">*</span><label for="E7pJHU">邮箱</label></th>
			<td>
				<input type="text" id="E7pJHU" name="email" autocomplete="off" size="25" tabindex="1" class="px" value="" required /><br /><em id="emailmore">&nbsp;</em></td>
		<td class="tipcol"><i id="tip_E7pJHU" class="p_tip">请输入正确的邮箱地址</i><kbd id="chk_E7pJHU" class="p_chk"></kbd></td>
		</tr>
	</table>
</div>
<span id="secqaa_qSwY3Gf3"></span>		
<script type="text/javascript" reload="1">updatesecqaa('qSwY3Gf3', '<div class="rfm"><table><tr><th><span class="rq">*</span><sec>: </th><td><sec><br /><sec></td></tr></table></div>', 'member::register');</script>
</div>
</div>
</div>
<div id="layer_reginfo_b">
<div class="rfm mbw bw0">
<table width="100%">
<tr>
<th>&nbsp;</th>
<td>
<span id="reginfo_a_btn">
    <input type="submit" value="提交"class="pn pnc">
</span>
</td>
<td></td>
</tr>
</table>
</div>
<div class="rfm bw0  mbw">
<hr class="l" />
<table>
<tr>
<th>快捷登录:</th>
<td>

<a href="http://www.dailianzj.com/connect.php?mod=login&op=init&referer=http%3A%2F%2Fwww.dailianzj.com%2Fmember.php%3Fmod%3Dregister&statfrom=login" target="_top" rel="nofollow"><img src="static/image/common/qq_login.gif" class="vm" /></a>

</td>
</tr>
</table>
</div>
</div>
</form>



</div>
<div id="layer_regmessage"class="f_c blr nfl" style="display: none">
<div class="c"><div class="alert_right">
<div id="messageleft1"></div>
<p class="alert_btnleft" id="messageright1"></p>
</div>
</div>

<div id="layer_bbrule" style="display: none">
<div class="c" style="width:700px;height:350px;overflow:auto"><br />
<br />
<br />
</div>
<p class="fsb pns cl hm">
<button class="pn pnc" onclick="$('agreebbrule').checked = true;hideMenu('fwin_dialog', 'dialog');"><span>同意</span></button>
<button class="pn" onclick="location.href='http://www.dailianzj.com/'"><span>不同意</span></button>
</p>
</div>

<script type="text/javascript">
var ignoreEmail = false;
addFormEvent('registerform', 1);
function showBBRule() {
showDialog($('layer_bbrule').innerHTML, 'info', '代练之家 网站服务条款');
$('fwin_dialog_close').style.display = 'none';
}
</script>
</div></div>
</div>	</div>



