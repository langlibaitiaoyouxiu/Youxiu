<?php
namespace frontend\controllers;

use Yii;
use common\composers\BaseController;
use common\models\LoginForm;


/**
 * Site controller
 */
class HomeController extends BaseController
{
	public $layout = 'public';
	
	//首页
	public function actionIndex()
	{
		
		return $this->render('index');
	}

	//登陆
	public function actionLogin()
	{

		return $this->render('login');
	}

	//注册
	public function actionRegister()
	{

		return $this->render('register');
	}

	//热门游戏展示
	public function actionHotgame()
	{

		return $this->render('hotgame');
	}

	//代练通道
	public function actionLeveing()
	{

		return $this->render('leveing');
	}

	//游戏攻略
	public function actionRaiders()
	{

		return $this->render('raiders');
	}

	//关于我们
	public function actionAbout()
	{

		return $this->render('about');
	}

	//个人中心
	public function actionUser()
	{

		return $this->render('user');
	}

}