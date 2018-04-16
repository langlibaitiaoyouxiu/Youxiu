<?php
use common\services\UrlServices;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css//sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Game paradise后台登录</h3>
                    </div>
                    <div class="panel-body">
                        <form  action="<?php echo  UrlServices::AdminUrl('index/login_do')?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="手机号" name="login_name"  >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="密码" name="login_pwd" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">记住密码
										
                                    </label>
									 
                                </div>
								
                                <!-- Change this to a button or input when using this as a form -->
                               <input type="submit" value="登录" class="btn btn-lg btn-success btn-block">								<div style="text-align:right;">
									<a href="register.html" class="btn ">没有账号密码？点击注册</a>
								</div>
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
