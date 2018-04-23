<?php 
use common\services\UrlServices;
 ?>
					<div class="page-content">
							<div class="row">
							

									<div class="col-xs-12">
									
									<form class="<?=UrlServices::AdminUrl('gamecharge') ?>" role="form"  method= 'post'>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 代练游戏 </label>

										<div class="col-sm-9">
												<select  name="dgame_id">
													<?php foreach ($leveling as $key => $value): ?>
														
																<option value="<?=$value['dgame_id']  ?>"><?=$value['leve_ling_name']  ?></option>
													<?php endforeach ?>
															
															</select>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 规则 </label>

										<div class="col-sm-9">
											<select  name="rule_id">
												<?php foreach ($data as $key => $value): ?>
															<option value="<?=$value['game_charge_id']  ?>"><?=$value['name']  ?></option>
													
												<?php endforeach ?>
																
															</select>
															<select name="n_rule">
												<?php foreach ($data as $key => $value): ?>
															<option value="<?=$value['game_charge_id']  ?>"><?=$value['name']  ?></option>
													
												<?php endforeach ?>
																
															</select>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 价格 </label>

										<div class="col-sm-9">
											<input type="number" id="form-field-1" placeholder="请输入价格" class="col-xs-10 col-sm-5" name="charge_price" />
										</div>
									</div>
								
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input class="btn btn-info" type="submit" value="添加">
						
										

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置信息
											</button>
										</div>
									</div>


								</form>
									</div><!-- /span -->
								</div><!-- /row -->

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				