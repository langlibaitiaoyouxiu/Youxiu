<?php 

use common\services\UrlServices;
 ?>
		<script type="text/javascript" src="<?=UrlServices::HomeUrl('js/jquery-1.11.3.js')  ?>" ></script>
<script type="text/javascript" src="<?=UrlServices::HomeUrl('js/index.js')  ?>" ></script>
		<div id="TabMain">
		    <div class="tabItemContainer">
		        <li><a class="tabItemCurrent">个人资料</a></li>
		        <li><a>修改密码</a></li>
		        <li><a>成为代练/代练信息展示</a></li>
		        <li><a>订单详情</a></li>
		        <li><a>代练信息展示</a></li>
		    </div>
		    <div class="tabBodyContainer">
		        <div class="tabBodyItem tabBodyCurrent">
		        	<form action="<?= UrlServices::HomeUrl('user')  ?>" method="post" accept-charset="utf-8">
			            <img src="<?=UrlServices::HomeUrl('/images/u=1529909167,4153364015&fm=27&gp=0.jpg');  ?>" class="head_img"/>

			            <button class="revise">头像修改</button>
			            <p class="user_name">
			            	<span class="username">昵称</span>
			            	<input type="text" placeholder="请输入昵称" class="user_in"/>
			            </p>
			            <p class="user_email">
			            	<span class="email">邮箱</span>
			            	<input type="text" placeholder="请输入邮箱" class="user_in"/>
			            </p>
			            <p class="user_phone">
			            	<span class="phone">手机号</span>
			            	<input type="text" placeholder="请输入手机号" class="user_in"/>
			            </p>
			            <p class="user_ID">
			            	<span class="card">身份证号</span>
			            	<input type="text" placeholder="请输入身份证号" class="user_in"/>
			            	<span class="warn">(申请代练必须实名认证)</span>
			            </p>
			            <p class="user_names">
			            	<span class="name">真实姓名</span>
			            	<input type="text" placeholder="请输入真实姓名" class="user_in"/>
			            </p>
			            <button class="sure_change">确定修改</button>
			            <button class="reset">重置</button>
		            </form>
		        </div>
		        <div class="tabBodyItem" align="center">
		        	<form action="<?= UrlServices::HomeUrl('user')  ?>" method="get" accept-charset="utf-8">
			        	<table style="font-size: 15px; margin-top: 50px;">
			        		<tr>
			        			<td colspan="" rowspan="" headers="">手机号</td>
			        			<td colspan="" rowspan="" headers="">
			        				<input type="text" placeholder="请输入手机号" class="user_in"/>
			        			</td>
			        			<td colspan="" rowspan="" headers="">
			        				<button type="sure">点击发送</button>
			        			</td>
			        		</tr>
			        		<tr>
			        			<td colspan="" rowspan="" headers="">验证码</td>
			        			<td colspan="" rowspan="" headers="">
			        				<input type="text" placeholder="请输入验证码" class="user_in"/>
			        			</td>
			        			<td colspan="" rowspan="" headers=""></td>
			        		</tr>
			        		<tr>
			        			<td colspan="2" rowspan="" headers="">
			        				<a href="" title="">手机号码暂时不能用</a>
			        			</td>
			        			<td colspan="" rowspan="" headers=""></td>
			        		</tr>
			        		<tr>
			        			<td colspan="3" rowspan="" headers="" align="center">
			        				<button type="">确认</button>
			            			<button type="">重置</button>
			            		</td>
			        		</tr>
			        	</table>
		        	</form>
		        </div>
		        <div class="tabBodyItem">
		            <p style="font-size: 24px; color: red; font-weight: 20px; ">
		            	请仔细阅读以下协议
		            </p>
		            <div style="text-align:left; font-size: 16px; margin: 50px 100px;">
		            	<p>
			            	1．本代练服务为双方自愿，您必须遵守本工作室承接代练服务相关规定。
			            </p>
			            <p>
			            	2．当接到订单时，您必须在二十四个小时内上线；否则视为一次警告，（累计三次警告，将革除您代练一职）。
			            </p>
			            <p>
			            	3．为保障您的帐号100%安全，您必须妥善保管好购买代练服务人员的账号。（注：如果个人名义盗取其他人账号，您的账号将会永久封禁，严重者将要付其法律责任）。
			            </p>
		            </div>
		            <p>
		            	<input type="checkbox" name="is_set">
		            	我同意
		            </p>
		            <p>
		            	<button type="button" class="apply">申请</button>
		            	<button type="button">取消</button>
		            </p>
		        </div>
		        <script src="<?=UrlServices::HomeUrl('js/jquery.1.12.js')  ?>" type="text/javascript"></script>
		        <script>
		        	
		        	$('.apply').click(function(){
		        		var check = $("input[type='checkbox']").prop('checked');
		        		if (check) {
							alert("提示  : 您的提交正在审核，我们会联系工作人员尽快和您进行切磋。{如果您赢过了我们的工作人员，那么就可以成为代练了）")
						}
					})
				</script>
		        <div class="tabBodyItem" align="center">
		            <table style="font-size: 15px; margin-top: 50px;" border="2" >
		            	<caption></caption>
		            	<thead>
		            		<tr>
		            			<th>订单编号</th>
		            			<th>代练用户</th>
		            			<th>代练人</th>
		            			<th>金额</th>
		            			<th>下单时间</th>
		            			<th>状态</th>
		            			<th>操作</th>
		            		</tr>
		            	</thead>
		            	<tbody>
		            		<tr>
		            			<td>data</td>
		            			<td>data</td>
		            			<td>data</td>
		            			<td>data</td>
		            			<td>data</td>
		            			<td>data</td>
		            			<td>
		            				<a href="" title="">删除</a>
		            				<a href="" title="">修改</a>
		            			</td>
		            		</tr>
		            	</tbody>
		            </table>
		        </div>
		        <div class="tabBodyItem">
		            <p>很抱歉，您还不是代练！！！</p>
		            <div style="display: none;">
		            	<table style="font-size: 15px; margin-top: 50px;" border="2" >
			            	<caption></caption>
			            	<thead>
			            		<tr>
			            			<th>订单编号</th>
			            			<th>代练用户</th>
			            			<th>代练人</th>
			            			<th>金额</th>
			            			<th>下单时间</th>
			            			<th>状态</th>
			            			<th>操作</th>
			            		</tr>
			            	</thead>
			            	<tbody>
			            		<tr>
			            			<td>data</td>
			            			<td>data</td>
			            			<td>data</td>
			            			<td>data</td>
			            			<td>data</td>
			            			<td>data</td>
			            			<td>
			            				<a href="" title="">删除</a>
			            				<a href="" title="">修改</a>
			            			</td>
			            		</tr>
			            	</tbody>
		            	</table>
		            </div>
		        </div>
		    </div>
		</div>
		
		
		

