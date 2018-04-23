<?php 

use common\services\UrlServices;
 ?>
 <link rel="stylesheet" type="text/css" href="<?=UrlServices::HomeUrl('/layui/css/layui.css')  ?>">
 <script type="text/javascript" src="<?=UrlServices::HomeUrl('/layui/layui.js')  ?>"></script>
 <script type="text/javascript" src="<?=UrlServices::HomeUrl('/layui/layui.all.js')  ?>"></script>
 <script type="text/javascript" src="<?=UrlServices::HomeUrl('/js/jquery.js')  ?>"></script>
 		<center>
 	<div style="margin-top: 30px; height: 430px;width: 50%; border:1px #ccc solid"  >

 		<div style="height: 40px;width: 100%;text-align: left;background-color: #ccc;line-height:40px"><font style="color: #666;margin-left: 10px;">找他代练</font></div>
 	
 	<table style="margin-top: 15px;">
 		
<tr>
	
	<td>
	您的段位：	
	</td>


	<td></td>
	<td>
		<form action="<?=UrlServices::HomeUrl('qorder')  ?>" method='post'>
		<select class="select" id="select" name="sele">
 		<option value="未选择">请选择段位</option>
 		<?php foreach ($data as $key => $value): ?>
 				<option value="<?=$value['game_charge_id'] ?>"><?=$value['name'] ?></option>
 		<?php endforeach ?>
 		</select>
		</td>
		
	</tr>

	<tr style="margin-top: px;">
		<td>
		要代练段位：	
		</td>

		<td></td>
		<td> 	
 		<select class="leve" id="leve" name="leve">
 			<option value="未选择">请选择要达到的段位</option>
 			<?php foreach ($data as $key => $value): ?>
 				<option value="<?=$value['game_charge_id'] ?>"><?=$value['name'] ?></option>
 		<?php endforeach ?>
 		</select>
 		</td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
<tr>
	<td>
 			<input value="提交" name="" type="submit" style="height:30px;width:50px;"></td>

 		<td>	<input type="reset" name="" value="重置" style="height:30px;width:50px;"></td>

<td>
	
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
 
