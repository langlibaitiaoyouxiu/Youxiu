<?php
use common\services\UrlServices;

?>


				<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="icon-remove"></i>
									</button>

									<i class="icon-ok green"></i>

									欢迎使用
									<strong class="green">
										Game Paradise系统
									<small>(v1.2)</small>
									</strong>
									,这里为你提供更更全面的游戏信息管理.	
							  </div>
								
									<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
				<script type="text/javascript" src="/js/jQuery.js"></script>
					<script type="text/javascript" src="/js/jqplot.js"></script>
					<script type="text/javascript">
					$(document).ready(function() {
						var data = [[1,2,3,4,5,6,7,8,9],[3,6,8,1,11,22,4,21,6]];
						var data_max = 30; //Y轴最大刻度
						var line_title = ["A","B"]; //曲线名称
						var y_label = "这是Y轴"; //Y轴标题
						var x_label = "这是X轴"; //X轴标题
						var x = [1,2,3,4,5,6,7,8,9]; //定义X轴刻度值
						var title = "这是标题"; //统计图标标题
						j.jqplot.diagram.base("chart1", data, line_title, "这是统计标题", x, x_label, y_label, data_max, 1);
						j.jqplot.diagram.base("chart2", data, line_title, "这是统计标题", x, x_label, y_label, data_max, 2);
					});
					</script>
					</head>
					<body>
						<div id="chart1"></div>
						<div id="chart2"></div>
					<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
						
		</div>





