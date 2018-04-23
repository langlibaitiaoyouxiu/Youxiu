
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
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>用户ID</th>
														<th>用户名称</th>
														<th>用户昵称</th>
														<th>是否是代练</th>
														<th>用户手机号码</th>
														<th>违规记录</th>
														<th>操作</th>
													
										
													</tr>
												</thead>

												<tbody>
													<?php foreach ($data as $key => $value): ?>
															<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td><?=$value['user_id'];  ?></td>
														<td><?=$value['user_name'];  ?></td>
														<td><?=$value['nick_name'];  ?></td>
														<td><?=$value['is_leveling'];  ?></td>
														<td><?=$value['user_mobile'];  ?></td>
														<td><?php if($value['status'] == 4)
														{
															echo "已冻结";
														}
														else
														{
															echo $value['status'];
														};  ?></td>
														<td><a href="<?=UrlServices::AdminUrl('frozen')  ?>?id=<?=$value['user_id'];  ?> ">冻结</a>

														</td>
													
														

													</tr>
													<?php endforeach ?>
												
													
																										<tr>
													
												</tbody>
											</table>
												<?=LinkPager::widget([
													      'pagination' => $pages,
													    ]);
													?>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
