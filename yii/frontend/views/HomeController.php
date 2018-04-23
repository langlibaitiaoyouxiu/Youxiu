<?php
namespace frontend\controllers;

use Yii;
use common\composers\BaseController;
use common\models\LoginForm;
use frontend\models\User;
use frontend\models\Game;
use common\services\UrlServices;


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
	public function actionLogin_do()
	{	

		$user = new User();
		
		if($this->isPost())
		{


			$name = $this->post('user_name');

	 		$pwd = $this->post('user_pwd');

	 		$res= $this->login('user_name','user_pwd',$name,$pwd,$user);
	 		
	 		if($res == "成功")
	 		{

	 		 $this->alertJump('登录成功','index');
	 		}
	 		else
	 		{

	 		 $this->alertJump('登录失败','index.php/home/login');

	 		}

		}
		else
		{
			//展示页面
			return $this->render('index/home/login');
		}
 
	}

	//注册
	public function actionRegister()
	{
		
		return $this->render('register');
	}
	//注册账号
    public function actionAdd(){
        $user_name = $_POST['user_name'];
        $user_pwd = $_POST['user_pwd'];
        $user_mobile = $_POST['user_mobile'];
        $email = $_POST['email'];
        $str = ['user_name'=>$user_name,'user_pwd'=>$user_pwd,'user_mobile'=>$user_mobile,'email'=>$email];
        $res = Yii::$app->db->createCommand()->insert('user',$str)->execute();
        if($res) {
            echo "<script>alert('注册成功');location.href='login'</script>";
        } else {
            echo "<script>alert('注册失败');location.href='home/register'</script>";
        }
    }

	//热门游戏展示
	public function actionHotgame()
	{
		// var_dump(UrlServices::HomeUrl('index.php/home'));die;
		 $game = new Game();
		 $all = $game->find()->where(['is_hot'=>'1'])->asArray()->all();
		return $this->render('hotgame',['data'=>$all]);
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