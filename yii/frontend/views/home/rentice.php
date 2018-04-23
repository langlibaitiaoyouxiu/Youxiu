<?php 

use common\services\UrlServices;
 ?>

<center>
	<table>
		<tr>
			<td>
				<img src="<?=UrlServices::HomeUrl('/images/u=1529909167,4153364015&fm=27&gp=0.jpg');  ?>"/>
			</td>
			<td>
				价格:
				<input type="text" placeholder="300RMB" readonly="">
			</td>
		</tr>
		<tr>
			<td>
				<a href="<?=UrlServices::HomeUrl('qorder');?>">确认下单</a>
			</td>
		</tr>
	</table>
</center>