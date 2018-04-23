
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
														<th>日志ID</th>
														<th>操作时间</th>
														<th>操作人</th>
														<th>具体操作</th>
													
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

														<td><?=$value['log_id'];  ?></td>
														<td><?=date('Y-m-d H:i:s',$value['date_time']);  ?></td>
														<td><?=$value['login_name']  ?></td>
														<td><?=$value['log_desc'];  ?></td>
														

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
