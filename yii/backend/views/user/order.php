
<?php 
use common\services\UrlServices;
use yii\widgets\LinkPager;
 ?>
 <style type="text/css">
 	img
 	{
 		width: 100px;
 		height: 100px;
 	}

 </style>
					<div class="page-content">


								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
													
														<th>订单ID</th>
														<th>操作时间</th>
														<th>用户名称</th>
														<th>代练人名称</th>
														<th>价格</th>	
													
													</tr>
												</thead>

												<tbody>
													<?php 
													$res = [];
													foreach ($data as $key => $value): ?>


													
													
															<tr>
													

														<td><?=$value['order_id'];  ?></td>
														<td><?=date('Y-m-d H:i:s',$value['create_time']);  ?></td>
														<td><?=$value['user_name']  ?></td>
														<td><?=$value['take_name'];  ?></td>
														<td><?=$value['game_price']  ?></td>
														<?php $res[] =  $value['game_price'] ?>
													</tr>
													<?php endforeach ?> 
													
												</tbody>
											</table>
													
												
													<div>
													总收入	<input type="" name="" id="price" value="<?=array_sum($res)?>" readonly="true">
														
															<center>
												<?=LinkPager::widget([
													      'pagination' => $pages,
													    ]);
													?>
													</div>
														
													</center>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
				<script type="text/javascript" src="<?=UrlServices::HomeUrl('/js/jQuery.js')  ?>"></script>
				<script type="text/javascript">
					$(function()
					{
						$('#sum').click(function()
						{

						})
					})
				</script>
