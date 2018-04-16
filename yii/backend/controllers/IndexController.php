<?php
namespace backend\controllers;

use Yii;
use common\composers\BaseController;
use common\models\LoginForm;
use common\services\UrlServices;
use backend\models\Admin;

/**
 * Site controller
 */
class IndexController extends BaseController
{
	public function actionIndex()
	{
		// var_dump(UrlServices::AdminUrl('index'));die;
		return $this->render('index');

	}

	public function actionLogin()
	{
		return $this->render('login');

	}
	public function actionLogin_do()
	{
	 	$admin = new Admin();

	 	$name = $this->post('login_name');

	 	$pwd = $this->post('login_pwd');

	 	$a= $this->login('login_name',$name,$admin,$pwd);
	 	if($a=="成功")
	 	{

	 		 BaseController::alertJump('登录成功','index');
	 	}
	 	else
	 	{

	 		BaseController::alertJump('登录失败','login');

	 	}

		
	}

	public function actionRelease()
	{
		return $this->render('release');

	}

	public function actionAccount()
	{
		return $this->render('account');

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
	public function actionRecord()
	{
		return $this->render('record');

	}
	public function actionRefresh()
	{
		return $this->render('refresh');

	}
	public function actionRegister()
	{
		return $this->render('register');

	}


}
