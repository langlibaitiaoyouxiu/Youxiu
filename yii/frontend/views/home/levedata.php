<?php 

use common\services\UrlServices;
use common\composers\BaseController;
$session = BaseController::session();
if($session['user']==[])
{
	BaseController::alertJump('您未登录，请先登陆','login');
}
 ?>
 <link rel="stylesheet" type="text/css" href="<?=UrlServices::HomeUrl('/layui/css/layui.css')  ?>">
 <script type="text/javascript" src="<?=UrlServices::HomeUrl('/layui/layui.js')  ?>"></script>
 <script type="text/javascript" src="<?=UrlServices::HomeUrl('/layui/layui.all.js')  ?>"></script>
 <script type="text/javascript" src="<?=UrlServices::HomeUrl('/js/jquery.js')  ?>"></script>
 	<div style="margin-top: 40px; height: 430px" >
 		<center>
 			<h1><?=$data['user_name']  ?></h1>
	 		<table style="">
						
		 			<tr>

		 				<td>

		 					<img src="<?=UrlServices::HomeUrl('/images/touxiang.gif');?>" style="width: 120px;"/>

		 				</td>

		 				<td>&nbsp;&nbsp;&nbsp;</td>

		 				<td>

		 					<textarea name="" id="" cols="80" rows="3" style="text-align: left; line-height: 26px;" disabled="none"><?=$data['user_desc']  ?></textarea>
		 					<div>


		 		<a href="<?=UrlServices::HomeUrl('lookfor');?>" style="float: right;" class="leve">找他代练</a>
		 					</div>
		 				</td>
		 			</tr>
					<tr>
						<td><br><br></td>
					</tr>
				
	 		</table>
	 	</center>		
 </div>
 <script type="text/javascript">
 	
 		$('.bth').click(function()
 		{
 			layer.alert("正在跳转",{anim:1});
 		})
 			$('.level').click(function()
 		{
 			layer.alert("正在跳转",{anim:1});
 		})
 </script>