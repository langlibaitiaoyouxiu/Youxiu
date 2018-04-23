<?php
use common\services\UrlServices;
use yii\widgets\LinkPager;

?>
					<div class="page-content">

								<form class="form-horizontal" role="form" active="<?= UrlServices::AdminUrl('strateglist') ?>"  method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-xs-12">
									
						<input type="text" id="form-field-2" placeholder="攻略名称" class="col-xs-10 col-sm-5"  name = "name" value="<?=isset($name)?$name : ""  ?>" />
									
											<input class="btn btn-info" type="submit" value="搜索" style="height: 30px;line-height: 13px;">
												
												
											</form>
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>

														<th>ID</th>
														<th>代练游戏名称</th>
														<th>攻略名称</th>
														<th>攻略内容</th>
                                                        <th>操作</th>
													</tr>
												</thead>

                                                <tbody>
                                                <?php foreach($data as $k=>$v):?>
                                                    <tr>
                                                    <td><?=$v['strateg_id']?></td>
                                                    <td><?=$v['leve_ling_name']?></td>
                                                    <td><?=$v['strateg_name']?></td>
                                                    <td><textarea>
                                                    	<?=$v['game_desc']?>
                                                    </textarea></td>
                                                    <td><a href="<?=UrlServices::AdminUrl('strategdel')?>?id=<?=$v['game_id']?>">删除</a>
                                                    	
                                                    	
                                                    </tr>
                                                <?php endforeach?>
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

				