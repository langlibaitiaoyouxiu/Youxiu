<?php
use common\services\UrlServices;
?>
					<div class="page-content">


								<div class="row">
									<div class="col-xs-12">
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重新获取
											</button>
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>

														<th>编号</th>
														<th>用户名</th>
														<th>状态</th>
                                                        <th>操作</th>
													</tr>
												</thead>

                                                <tbody>
                                                <?php foreach($data as $k=>$v):?>
                                                    <tr>
                                                    <td><?=$v['dgame_id']?></td>
                                                    <td><?=$v['leve_ling_name']?></td>
                                                    <td><?php if($v['leveling_status'] == 0) { ?>
                                                   非异常
                                                   <?php  }else{ ?>
                                                   异常
                                                    <?php }?></td>
                                                    <td><a href="<?=UrlServices::AdminUrl('levelinggamedel')?>?id=<?=$v['dgame_id']?>">删除</a>
                                                    	
                                                    	
                                                    </tr>
                                                <?php endforeach?>
                                                </tbody>
											</table>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				