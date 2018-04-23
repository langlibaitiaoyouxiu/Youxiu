<?php 

use common\services\UrlServices;
 ?>
 <link rel="stylesheet" type="text/css" href="<?=UrlServices::HomeUrl('/layui/css/layui.css')  ?>">
 <script type="text/javascript" src="<?=UrlServices::HomeUrl('/layui/layui.js')  ?>"></script>
 <script type="text/javascript" src="<?=UrlServices::HomeUrl('/layui/layui.all.js')  ?>"></script>
 <script type="text/javascript" src="<?=UrlServices::HomeUrl('/js/jquery.js')  ?>"></script>
 		<center>
 	<div style="margin-top: 30px; height: 100%;width: 80%; border:1px #ccc solid"  >

 		<div style="height: 40px;width: 100%;text-align: left;background-color: #ccc;line-height:40px"><font style="color: #666;margin-left: 10px;">攻略详情</font></div>
 		<h1 style="font-weight: 5px;font-size: 18px;"><?=$data['strateg_name']  ?></h1>
 	<?=$data['game_desc'] ?>

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
 
