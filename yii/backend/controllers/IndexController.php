<?php
namespace backend\controllers;

use Yii;
use common\composers\BaseController;
use common\models\LoginForm;
use common\services\UrlServices;
use backend\models\Admin;
use app\models\Gamelist;

/**
 * Site controller
 */
class IndexController extends BaseController
{
	public  $layout = 'public';

	/*验证权限*/
	// public function beforeAction($index)
	// {
	// 	$session = $this->session();
	// 	if($session['user'] == '')
	// 	{
	// 		$this->alertJump('非法操作');
	// 	}
		
	// }


	//首页
	public function actionIndex()
	{

		return $this->render('index');

	}

	//登陆
	public function actionLogin()
	{
		return $this->renderPartial('login');
 
	}
	public function actionLogin_do()
	{
	 	$admin = new Admin();

	 	$name = $this->post('login_name');

	 	$pwd = md5($this->post('login_pwd'));

	 	$res = $this->login('login_name','login_pwd',$name,$pwd,$admin);
	 	if($res == "成功")
	 	{

	 		 BaseController::alertJump('登录成功','index');
	 	}
	 	else
	 	{

	 		BaseController::alertJump('登录失败','login');

	 	}
	 	

	}
	
	//游戏列表
	public function actionGamelist()
	{
		
		$data['data'] = (new Gamelist)->find()->all();
		
		return $this->render('game_list',$data);

	}

	//游戏添加
	public function actionGameadd()
	{
		$gamelist = new Gamelist();
		if($this->isPost())
		{
			$data = $this->post();
			$data['mai_ming'] = $this->do_upload('mai_ming');
			$data['code'] = $this->do_upload('code');
			$gamelist->attributes = $data;
			if($gamelist->save(0))
			{
				
				$this->alertJump('添加成功','gamelist');
			}
			else
			{
				
				$this->alertJump('添加失败','gamelist');
			}
		}
		else
		{

			return $this->render('game_add');
		}

	}

	//游戏删除
	public function actionGamedel($id)
	{
		$where['game_id'] = $id;
		
		$res = (new Gamelist)->findone($where)->delete();
		
		if($res)
		{
			
			$this->alertJump('删除成功','gamelist');
		}
		else
		{

			$this->alertJump('删除失败','gamelist');
		}

	}

	//游戏修改
	public function actionGamesave($id)
	{
		$gamelist = new Gamelist;
		if($this->isPost())
		{
			$data = $this->post();
			$where['game_id'] = $id;
			$res = $gamelist->findone($where);
			unset($res['game_id']);
			

			$res->attributes = $data;
			
			if($res->save(0))
			{

				$this->alertJump('修改成功','gamelist');
			}
			else

				$this->alertJump('修改失败','gamelist');
			{

				$this->alertJump('修改成功','gamelist');
			}
		}
		else
		{

			$where['game_id'] = $id;
		
			$res['user'] = $gamelist->findone($where);

			return $this->render('game_save',$res);
		}
		

	}

	//用户列表
	public function actionUserlist()
	{
		return $this->render('user_list');

	}

	public function actionAddaccount()
	{
		return $this->render('addaccount');

	}

	//代练游戏添加
	public function actionLeveinggameadd()
	{
		return $this->render('leveing_game_add');

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
