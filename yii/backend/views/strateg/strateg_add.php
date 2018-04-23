<?php 
use common\services\UrlServices;

 ?>
    <script type="text/javascript" charset="utf-8" src="/utf8-php/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/utf8-php/ueditor.all.min.js"> </script>
<script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>

					<div class="page-content">
							<div class="row">
							

									<div class="col-xs-12">
									
					<form class="form-horizontal" role="form" active="<?= UrlServices::AdminUrl('strategadd') ?>"  method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 游戏名称 </label>

										<div class="col-sm-9">
											<select name="game_id">

												<?php foreach ($data as $key => $value): ?>
													<option value="<?=$value['dgame_id']  ?>"><?=$value['leve_ling_name']  ?></option>
												<?php endforeach ?>
											</select>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2" > 攻略名称 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2" placeholder="攻略名称" class="col-xs-10 col-sm-5"  name = "strateg_name"/>
										</div>
									</div>

									


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 简介 </label>

										<div class="col-sm-9">
		
											<textarea id="content" name="game_desc" >
												
											</textarea>
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

			
					
   <script type="text/javascript">
        UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:200})
    </script>