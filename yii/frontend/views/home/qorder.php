<?php 

use common\services\UrlServices;
 ?>

<center style="margin-top: 40px;">
	<form action="<?=UrlServices::HomeUrl('qorder');?>" method="post">
		<table >
			<h1 style="font-size: 26px;">生成订单</h1>
			<tr>
				<td>
					代练姓名
				</td>
				<td>
					<input type="text" placeholder="小明" readonly="">
				</td>
			</tr>
			<tr>
				<td>
					当前段位
				</td>
				<td>
					<input type="text" placeholder="铂金" readonly="">
				</td>
			</tr>
			<tr>
				<td>
					价格
				</td>
				<td>
					<input type="text" placeholder="300RMB" readonly="">
				</td>
			</tr>
			<tr>
				<td>选择支付方式</td>
				<td>
					<input type="checkbox" name="zhi">支付宝
				</td>
			</tr>
		</table>
		<div>
			<button>确认</button>
			<button>重新选择</button>
		</div>
	</form>
</center>