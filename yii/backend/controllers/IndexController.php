<?php
namespace backend\controllers;

use Yii;
use common\composers\BaseController;
use common\models\LoginForm;
use common\services\UrlServices;
use backend\models\Admin;
use app\models\Gamelist;
use app\models\Log;
/**
 * Site controller
 */
class IndexController extends BaseController
{
	public  $layout = 'public';

	/*验证权限*/
	// public function beforeAction($action)
	// {
	// 	$session = $this->session();
	// 	$res = $this->action->uniqueId;
	// 	if($res == "index/index" && $session['user'] == '')
	// 	{

	// 		$this->alertJump('非法操作');
	// 	}
		
		
		
	// }


	//首页
	public function actionIndex()
	{
			$session = $this->session();
		$res = $this->action->uniqueId;
		if($session['user'] == '')
		{

			$this->alertJump('非法操作');
		}
		return $this->render('index');

	}

	//登陆
	public function actionLogin()
	{
		return $this->renderPartial('login');
 
	}
	public function actionLogin_do()
	{

		$session = $this->session();

		$log = new Log();

	 	$admin = new Admin();

	 	$name = $this->post('login_name');

	 	$pwd = md5($this->post('login_pwd'));

	 	$res = $this->login('login_name','login_pwd',$name,$pwd,$admin);

	 	if($res == "成功")
	 	{

	 		 $log->date_time = time();
	 		 $log->admin_id = $session['user']['admin_id'];
	 		 $log->log_desc = "登陆";
	 		 $log->save(0);
	 		 BaseController::alertJump('登录成功','index');
	 	}
	 	else
	 	{

	 		 $log->date_time = time();
	 		 $log->admin_id = $session['user']['admin_id'];
	 		 $log->log_desc = "登陆失败";
	 		 $log->save(0);

	 		BaseController::alertJump('登录失败','login');

	 	}

	}
	

	

	public function actionAddaccount()
	{
		return $this->render('addaccount');

	}

	
	public function actionChange()
	{
		return $this->render('change');

	}
	public function actionCopy()
	{
		return $this->render('copy');

	}
	public function actionMoney()
	{
		return $this->render('money');

	}
	public function actionNotice()
	{
		return $this->render('notice');

	}
	public function actionRecharge()
	{
		return $this->render('recharge');
	}


	public function actionRefresh()
	{
		return $this->render('refresh');

	}
	public function actionRegister()
	{
		return $this->render('register');

	}




	//退出
	public function actionOut()
	{

		$this->Closesession();
		

		$this->alertJump('退出成功','login');
		

	}
}
