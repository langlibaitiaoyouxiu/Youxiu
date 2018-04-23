<?php
use common\services\UrlServices;
?>
					<div class="page-content">
							<div class="row">
							

									<div class="col-xs-12">
                                        <center>
                                            <form class="form-horizontal" role="form" >
                                                <font color="blue" size="5px"><a href="<?=UrlServices::AdminUrl('index/index')?>">首页</a></font>
                                                &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                                                <font color="blue" size="5px"><a>审核代练</a></font>
                                                    <table border=" 1">
                                                        <th>姓名</th>
                                                        <th>信息完善</th>
                                                        <th>是否审核</th>
                                                        <th>备注</th>
                                                        <?php foreach($data as $k=>$v):?>
                                                            <tr>
                                                                <td><?=$v['user_name']?></td>
                                                                <td><?=$v['status']?></td>
                                                                <td><?=$v['is_leveling']?></td>
                                                                <td>0未审核  1审核</td>
                                                            </tr>
                                                        <?php endforeach?>
                                                    </table>
                                            </form>
                                        </center>

<!--									<div class="form-group">-->
<!--										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 用户名 </label>-->
<!---->
<!--										<div class="col-sm-9">-->
<!--											<input type="text" id="form-field-1" placeholder="用户名" class="col-xs-10 col-sm-5" />-->
<!--										</div>-->
<!--									</div>-->
<!---->
<!--									<div class="space-4"></div>-->
<!---->
<!--									<div class="form-group">-->
<!--										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 密码 </label>-->
<!---->
<!--										<div class="col-sm-9">-->
<!--											<input type="password" id="form-field-2" placeholder="密码" class="col-xs-10 col-sm-5" />-->
<!--										</div>-->
<!--									</div>-->
<!---->
<!--									<div class="space-4"></div>-->
<!---->
<!--									<div class="form-group">-->
<!--														<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 房源 </label>-->
<!---->
<!--														<div class="col-sm-9">-->
<!--															<select >-->
<!--																<option value="">&nbsp;</option>-->
<!--																<option value="TC">住宅</option>-->
<!--																<option value="GJ">商铺</option>-->
<!--																<option value="XL">写字楼</option>-->
<!--																<option value="HT">别墅</option>-->
<!--															</select>-->
<!--															<select >-->
<!--																<option value="">&nbsp;</option>-->
<!--																<option value="TC">已发布</option>-->
<!--																<option value="GJ">代发布</option>-->
<!--																<option value="XL">已过期</option>-->
<!--															</select>-->
<!--															-->
<!--															<select >-->
<!--																<option value="">&nbsp;</option>-->
<!--																<option value="TC">出售</option>-->
<!--																<option value="GJ">出租</option>-->
<!--															</select>-->
<!--													    </div>-->
<!---->
<!---->
<!--									</div>-->
<!--									-->
<!--									<div class="form-group">-->
<!--										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 房源编号 </label>-->
<!---->
<!--										<div class="col-sm-9">-->
<!--											<input type="text" id="form-field-1" placeholder="房源编号" class="col-xs-10 col-sm-5" />-->
<!--										</div>-->
<!--									</div>-->
<!--									<div class="hr hr-24"></div>-->
<!---->
<!---->
<!---->
<!--								-->
<!--									<div class="clearfix form-actions">-->
<!--										<div class="col-md-offset-3 col-md-9">-->
<!--											<button class="btn btn-info" type="button">-->
<!--												<i class="icon-ok bigger-110"></i>-->
<!--												复制房源-->
<!--											</button>-->
<!---->
<!--											&nbsp; &nbsp; &nbsp;-->
<!--											<button class="btn" type="reset">-->
<!--												<i class="icon-undo bigger-110"></i>-->
<!--												重置信息-->
<!--											</button>-->
<!--										</div>-->
<!--									</div>-->
<!---->


									</div><!-- /span -->
								</div><!-- /row -->

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				