
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
													
														<th>游戏ID</th>
														<th>游戏名称</th>
														<th>排序</th>
														<th>主图</th>
														<th>二维码</th>
														<th>游戏简介</th>
														<th>是否新游</th>
														<th>是否热门</th>
														<th>好评</th>
														<th>中评</th>
														<th>差评</th>
														<th>操作</th>
													</tr>
												</thead>

												<tbody>
													<?php foreach ($data as $key => $value): ?>
															<tr>
													

														<td><?=$value['game_id'];  ?></td>
														<td><?=$value['game_name'];  ?></td>
														<td><?=$value['sort'];  ?></td>
														<td><img src="<?=UrlServices::AdminUrl('/').$value['mai_ming']  ?>"></td>
														<td><img src="<?=UrlServices::AdminUrl('/').$value['code']  ?>"></td>
														<td><?=$value['desc_ribe'];  ?></td>
														<td><?php if($value['is_new'] == '1') echo "是";else echo "否"  ?></td>
														<td><?php if($value['is_hot'] == '1') echo "是";else echo "否"  ?></td>
														<td><?=$value['good']  ?></td>
														<td><?=$value['commonly']  ?></td>
														<td><?=$value['negative']  ?></td>
														<td><a href="<?=UrlServices::AdminUrl('gamedel')  ?>?id=<?=$value['game_id'];  ?>">删除</a>
															<a href="<?=UrlServices::AdminUrl('gamesave')  ?>?id=<?=$value['game_id'];  ?>">修改</a>
														</td>

													</tr>
													<?php endforeach ?>
												
													
																										<tr>
													
												</tbody>
											</table>
											<center>
												<?=
													LinkPager::widget([
													      'pagination' => $pages,
													    ]);?>
													    </center>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
