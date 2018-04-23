<?php 

use common\services\UrlServices;
use common\composers\BaseController;
$session = BaseController::session();
 ?>
 <link rel="stylesheet" type="text/css" href="<?=UrlServices::HomeUrl('/layui/css/layui.css')  ?>">
 <script type="text/javascript" src="<?=UrlServices::HomeUrl('/layui/layui.js')  ?>"></script>
 <script type="text/javascript" src="<?=UrlServices::HomeUrl('/layui/layui.all.js')  ?>"></script>
 <script type="text/javascript" src="<?=UrlServices::HomeUrl('/js/jquery.js')  ?>"></script>
 		<center>
 	<div style="margin-top: 30px; height: 430px;width: 50%; border:1px #ccc solid"  >

 		<div style="height: 40px;width: 100%;text-align: left;background-color: #ccc;line-height:40px"><font style="color: #666;margin-left: 10px;">确认订单</font></div>
 	
 	<table style="margin-top: 15px;">
 		
<tr>
	

	<th>代练人</th>
	<th>用户名称</th>
	<th>价格</th>
	<th>状态</th>	
	
	
		<form action="<?=UrlServices::HomeUrl('order')  ?>" method='post'>
</tr>
	
	<tr>
	
		<td><?=$session['dl_name']  ?></td>
		<td><?=$session['user']['user_name']  ?></td>
		<td><?=$session['price']  ?></td>	
		<td>未付款</td>
		<input type="hidden" name="user_id" value="<?=$session['user']['user_id']  ?>">
		<input type="hidden" name="take_name" value="<?=$session['dl_name']  ?>">
		<input type="hidden" name="game_price" value="<?=$session['price']  ?>">
	</tr>
	<tr>
		<td><select name="pay_type">
			<option>请选择支付方式</option>
			<option value="1" selected="true">支付宝</option>
			<option value="2">微信</option>

		</select></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
		<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>

 			<input value="付款" name="" type="submit" style="height:30px;width:50px;">

 			<input type="reset" name="" value="重置" style="height:30px;width:50px;">
		</td>
	</tr>
	</form>
 			</table>
 </div>
 
	 	</center>	

<script type="text/javascript">
		$('[type=submit]').click(function()
		{
			if($('#leve').attr('value')&& $('#sele').attr('value'))
			{
				layer.alert('请选择要达到的段位',{anim:6});
			}
		})
</script>	
 
