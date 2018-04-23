<?php 

use common\services\UrlServices;
use common\composers\BaseController;
$session = BaseController::session();
if($session['user'] == [])
{
	$this->alertJump('请您登陆','login');
}
 ?>
}

<script type="text/javascript" src="<?=UrlServices::HomeUrl('/js/jquery-1.11.3.js')  ?>" ></script>
<script type="text/javascript" src="<?=UrlServices::HomeUrl('/js/index.js')  ?>" ></script>
<script type="text/javascript" src="<?=UrlServices::HomeUrl('/layui/layui.all.js')  ?>" ></script>
<script type="text/javascript" src="<?=UrlServices::HomeUrl('/layui/layui.js')  ?>" ></script>
<link rel="stylesheet" href="<?=UrlServices::HomeUrl('/css/index.css')  ?>" />
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

		        	<form action="<?=UrlServices::HomeUrl('usave')  ?>" method="post" enctype="multipart/form-data" onsubmit="return fun_submit()">
		        		 <?php if($data['user_img'] == ""){ ?>
							<div class="head_img" style=" border: 1px #ccc solid; text-align: center;line-height: 30px;" >
								您为上传头像，请点击右边按钮上传
							</div>
		        		<?php }else{ ?>
			            	<img src="<?=UrlServices::HomeUrl('/').$data['user_img'];?>" class="head_img"/>
		        		<?php } ?>
						<input type="file"  class="revise"  name="user_img"  value="头像上传" id="image"/>
			            <p class="user_name">
			            	<span class="username">昵称</span>
			            	<input type="text" value="<?php echo $data['nick_name'];?>" name="nick_name" class="user_in" id="name" onblur="fun_name()"/><span id="color_name"></span>
			            </p>
			            <p class="user_phone">
			            	<span class="phone">手机号</span>
			            	<input type="text" value="<?php echo $data['user_mobile'];?>" name="user_mobile" class="user_in" id="tell" onblur="fun_tell()"/><span id="color_tell"></span>
			            </p>
			            <p class="user_ID">
			            	<span class="card">身份证号</span>
			            	<input type="text" value="<?php echo $data['card_id'];?>" name="card_id" class="user_in" id="sf" onblur="fun_sf()"/>
			            	<span class="warn">(申请代练必须实名认证)</span><span id="color_sf"></span>
			            </p>
			            <p class="user_names">
			            	<span class="name">真实姓名</span>
			            	<input type="text" value="<?php echo $data['real_name'];?>" name="real_name" id="realname" onblur="only()" class="user_in"/><span id="real_name"></span>
			            </p>
			            <!-- <button class="sure_change" type="bunmit">确定修改</button> -->
			            <input class="sure_change" type="image" src="<?=UrlServices::HomeUrl('images/sure.png');?>"/>
			            <input class="reset" type="image" src="<?=UrlServices::HomeUrl('images/reset.png');?>"/>
			            <!-- <button class="reset">重置</button> -->
		            </form>
		        </div>
		        <script type="text/javascript">
		        	function fun_submit()
					{
					  if(fun_name()&  fun_sf() & fun_tell() & only())
					  {
					  	return true;
					  }
					  else
					  {
					  	return false;
					  }
					}
		        	//验证昵称
		        	function fun_name()
					{
					   var name= document.getElementById('name').value
					   var patt=/^[\u4e00-\u9fa5]{2,10}$/
					   if(!patt.test(name))
					  {
					  	document.getElementById('color_name').innerHTML="<font color='red'>不能为空，必须是2到10个中文汉字</font>";
					  	return false;
					  }
					  else
					  {
					  	document.getElementById('color_name').innerHTML="<font color='green'>√</font>";
					  	return true;
					  }
					}
					//验证真实姓名
					function only()
					{
					   var name= document.getElementById('realname').value
					   var patt=/^[\u4e00-\u9fa5]{2,10}$/
					   if(!patt.test(name))
					  {
					  	document.getElementById('real_name').innerHTML="<font color='red'>不能为空，必须是2到10个中文汉字</font>";
					  	return false;
					  }
					  else
					  {
					  	document.getElementById('real_name').innerHTML="<font color='green'>√</font>";
					  	return true;
					  }
					}
					//验证手机号
					function fun_tell()
					{
					   var tell= document.getElementById('tell').value
					   var patt=/^1[3578]\d{9}$/
					   if(!patt.test(tell))
					  {
					  	document.getElementById('color_tell').innerHTML="<font color='red'>不能为空,必须是11位纯数字,以13 15 17 18开头</font>";
					  	return false;
					  }
					  else
					  {
					  	document.getElementById('color_tell').innerHTML="<font color='green'>√</font>";
					  	return true;
					  }  
					}
					//验证身份
					function fun_sf()
					{
					   var sf= document.getElementById('sf').value
					   var patt=/^(\d{15}|\d{17}x|\d{18})$/i

					   if(!patt.test(sf))
					  {
					  	document.getElementById('color_sf').innerHTML="<font color='red'>不能为空,15或18纯数字组成，18位最后一位可以是X</font>";
					  	return false;
					  }
					  else
					  {
					  	document.getElementById('color_sf').innerHTML="<font color='green'>√</font>";
					  	return true;
					  }

					}
		        </script>
		        <div class="tabBodyItem">
		        	<form action="<?= UrlServices::HomeUrl('tighten')  ?>" method="post" accept-charset="utf-8" onsubmit="return ti_submit()">
			        	<p class="user_phone1">
			            	<span class="card">旧密码</span>
			            	<input type="text" placeholder="请输入旧密码" name="old" id="old" class="user_in"/>
			            </p>
						<p class="user_code">
			            	<span class="card">新密码</span>
			            	<input type="text" placeholder="请输入新密码" name="new" id="new_id" onblur="new_pwd()" class="user_in"/><span id="new_in"></span>
			            </p>
			            <p class="user_prompt">
			            </p>
						<button  class="sure_change1">确定</button>
			            <button class="reset1">重置</button>
		        	</form>
		        </div>
				<script type="text/javascript">
		        	function ti_submit()
					{
					  if(new_pwd())
					  {
					  	return true;
					  }
					  else
					  {
					  	return false;
					  }
					}

					//验证新密码
					function new_pwd()
					{
					   var new_id= document.getElementById('new_id').value
					   var patt=/^[a-zA-Z0-9_-]{4,16}$/
					   if(!patt.test(new_id))
					  {
					  	document.getElementById('new_in').innerHTML="<font color='red'>不能为空,4-16位字符、数字</font>";
					  	return false;
					  }
					  else
					  {
					  	document.getElementById('new_in').innerHTML="<font color='green'>√</font>";
					  	return true;
					  }  
					}
				</script>

				<form action="<?= UrlServices::HomeUrl('teg')  ?>" method="post" onsubmit="return f_submit()">
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
			            	<input type="hidden" name="id" value="<?=$session['user']['user_id'] ?>">
			            	<input type="checkbox" name="is_set" id="set" checked="checked">
			            	我同意
			            </p>
			            <p>
			            	<input type="submit" class="apply" value="申请">
			            	<button type="button">取消</button>
			            </p>
			        </div>
		        </form>
		        <script>
		        	function f_submit() {
		        		var obtain = $("input[type='checkbox']").prop('checked');
		        		if (obtain === 'false') {
		        				return false;
		        		}else{		        	
				        	$('.apply').click(function(){
				        		var check = $("input[type='checkbox']").prop('checked');
				        		if (check) {						
				        			layer.open({
										title: '提示',
							  			content: '您的提交正在审核，我们会联系工作人员尽快和您进行切磋。{如果您赢过了我们的工作人员，那么就可以成为代练了}',
							  			anim: 1
							  		})
								}else{
									return;
								}
							})
						}
			        }
				</script>
		        <div class="tabBodyItem" align="center">
		            <table class="table">
		            	<thead>
		            		<tr>
		            			<th>订单编号</th>
		            			<th>代练用户</th>
		            			<th>代练人</th>
		            			<th>金额</th>
		            			<th>下单时间</th>
		            			<th>状态</th>
		            		</tr>
		            	</thead>
		            	<tbody>
		            		<?php foreach ($data1 as $key => $val) {?>
								<tr>
			            			<td><?php echo $val['order_num']?></td>
			            			<td><?=$session['user']['user_name'];?></td>
			            			<td><?php echo $val['take_name']?></td>
			            			<td><?php echo $val['game_price']?></td>
			            			<td><?php echo $val['create_time']?></td>
					            	<td><?php if($val['status'] == 1)
										{
											echo '<font  color="red" >接单中</font>';
										}else 
										{
											echo "已完成";
										} ?>
					            	</td>
			            		</tr>
							<?php } ?>
		            	</tbody>
		            </table>
		        </div>
		        <div class="tabBodyItem" align="center">
		        	<?php if ($session['user']['is_leveling'] == '1') { ?>
		        		<table class="table">
			            	<thead>
			            		<tr>
			            			<th>订单编号</th>
			            			<th>代练用户</th>
			            			<th>代练人</th>
			            			<th>金额</th>
			            			<th>下单时间</th>
			            			<th>状态</th>
			            		</tr>
			            	</thead>
			            	<tbody>
			            		<?php foreach ($arr as $key => $value) {?>
									<tr>
				            			<td><?php echo $value['order_num']?></td>
				            			<td><?php echo $value['user_name']?></td>
				            			<td><?php echo $value['take_name']?></td>
				            			<td><?php echo $value['game_price']?></td>
				            			<td><?php echo $value['create_time']?></td>
						            	<td><?php if($value['status'] == 1)
											{
												echo '<font  color="red" >接单中</font>';
											}else 
											{
												echo "已完成";
											} ?>
						            	</td>
				            		</tr>
								<?php } ?>
			            	</tbody>
			            </table>
		        	<?php } else{ ?>
		        		<p>很抱歉，您还不是代练！！！</p>
		        	<?php } ?>
		        </div>
		    </div>
		</div>