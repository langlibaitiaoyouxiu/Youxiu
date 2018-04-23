<?php
use common\services\UrlServices;
?>
<div class="page-content">
							<div class="row">
									<div class="col-xs-12">
									<form method="post" action="<?=UrlServices::AdminUrl('levelinggameadd')?>"  >
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 代练游戏名 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="leve_ling_name" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 状态 </label>
                                       非异常	<input type="radio" name="gamestatus" value="1"  checked/>
                                        异常    <input type="radio" name="gamestatus" value="0"/>
										<div class="col-sm-9">

										</div>
									</div>
										<div class="col-md-offset-3 col-md-9">

												<i class="icon-ok bigger-40"></i>
<!--                                                <input class="btn btn-info" style="width:80px" type= submit" value="增加">-->
                                            <input type="submit" value="添加" class="btn btn-info">
											&nbsp; &nbsp; &nbsp;
                                            <i class="icon-ok bigger-40"></i>
                                            <input class="btn btn-info" style="width:80px" type= submit" value="重置">
										</div>
									<div class="hr hr-24"></div>
								</form>
									</div><!-- /span -->
								</div><!-- /row -->

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

			
					
