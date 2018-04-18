﻿<?php 
use common\services\UrlServices;

 ?>

					<div class="page-content">
							<div class="row">
							

									<div class="col-xs-12">
									
									<form class="form-horizontal" role="form" active="<?= UrlServices::AdminUrl('gamelist') ?>"  method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 游戏名称 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="游戏名称" class="col-xs-10 col-sm-5" name="game_name" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2" > 排序 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2" placeholder="排序" class="col-xs-10 col-sm-5"  name = "sort"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 主图 </label>

										<div class="col-sm-9">
											<input type="file" id="form-field-2" placeholder="主图" class="col-xs-10 col-sm-5" name="mai_ming" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 热门游戏 </label>

										<div class="col-sm-9">
										是	<input type="radio"     name="is_hot" value="1"  checked/>
										否	<input type="radio"    name="is_hot" value="0"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 是否新品游戏 </label>

										<div class="col-sm-9">
										是	<input type="radio"     name="is_new" value="1"  checked/>
										否	<input type="radio"    name="is_new" value="0"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 简介 </label>

										<div class="col-sm-9">
											<textarea id="form-field-2" placeholder="简介" class="col-xs-10 col-sm-5"  name="desc_ribe"> </textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 游戏二维码 </label>

										<div class="col-sm-9">
											<input type="file" id="form-field-2" placeholder="二维码" class="col-xs-10 col-sm-5"  name="code" />
										</div>
									</div>

									<div class="space-4"></div>
						
							
										<div class="col-md-offset-3 col-md-9">
											<input class="btn btn-info" type="submit"/ value="添加">
											
											

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</div>
									

									<div class="hr hr-24"></div>



								</form>
									</div><!-- /span -->
								</div><!-- /row -->

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

			
					