<?php
namespace frontend\controllers;

use Yii;
use common\composers\BaseController;
use common\models\LoginForm;
use app\models\User;
use app\models\Order;
use app\models\GameList;
use app\models\GameLeveling;
use app\models\GameStrateg;
use app\models\GameRule;
use app\models\GameCharge;
use common\services\UrlServices;
use yii\data\Pagination;



/**
 * Site controller
 */
class HomeController extends BaseController
{
	public $layout = 'public';
	
	//首页
	public function actionIndex()
	{
		$use = new User();
		$strateg = new GameStrateg;
		$gameleveling = new GameLeveling();
		$where['is_leveling'] = 1;

		
		//代练展示
		$user['user'] = $use ->find()->where($where)->limit(6)->all();
		//代练游戏展示
		$user['data'] = $gameleveling->find()->limit(3)->all();
		//攻略展示
		$user['desc'] = $strateg->find()->limit(6)->all();
	    //攻略展示
		$user['list'] = $strateg->find()->all();
		//热门游戏
		$user['hot'] = (new GameList)->find()->where(['is_hot'=>'1'])->limit(3)->all();
		//新品游戏
		$user['new'] = (new GameList)->find()->where(['is_new'=>'1'])->limit(3)->all();
		return $this->render('index',$user);
	}

	//登陆
	public function actionLogin()
	{
		if ($this->isPost()) {

			$user = new User();

			$data = $this->post();

			$name = $data['user_name'];
			
			$pwd  = md5($data['user_pwd']);

			$res = $this->login('user_name','user_pwd',$name,$pwd,$user);

			if($res == "成功")
			{
				$this->alertJump('登陆成功','index');
			}
			else
			{

				$this->alertJump('登陆失败','login');
			}
	        
		}else{
			return $this->render('login');
		} 
		
	}

	//注册
	public function actionRegister()
	{
		
		return $this->render('register');
	}

	//退出登陆
	public function actionOut()
	{
		$this->Closesession();
		$this->alertJump('正在退出');
	}

	//热门游戏展示
	public function actionHotgame()
	{
		$gamelist = new GameList();
		$where['is_hot'] = 1;
		//游戏展示
		$res["hot"] = $gamelist->find()->where($where)->limit(3)->all();
		//新品游戏展示
		$res["new"] = $gamelist->find()->where(['is_new'=>1])->orderBy("sort ASC")->limit(3)->all();
		return $this->render('hotgame',$res);
	}

	//代练通道
	public function actionLeveing()
	{

		$game = new User();
		$where['is_leveling'] = 1;
		//代练展示
		$res["data"] = $game->find()->where($where)->orderBy("user_id ASC")->limit(3)->all();
		//代练展示
		$res['list'] = $game->find()->where($where)->orderBy("user_id DESC")->limit(3)->all();
		return $this->render('leveing',$res);
	}

	//代练详情
	public function actionLevedata()
	{	
		$session = $this->session();
		$id = $this->get('id');
		$id = isset($id) ? $id : "";
		
		if($session['user']['user_id']==$id)
		{
			$this->alertJump('您不可以找自己代练','leveing');
		}else if($id == '')
		{

			$this->alertJump('网络异常，请尝试重新进入','leveing');
		}

		$game = new User();
		$where['user_id'] = $id;
		$res['data'] = $game->findone($where);
		$session->set('dl_id',$res['data']['user_id']);
		$session->set('dl_name',$res['data']['user_name']);
		return $this->render('levedata',$res);
	}



	//确认下单
	public function actionQorder()
	{
		$session = $this->session();
		if($this->isPost())
		{
			$data = $this->post();
			if($data['sele'] == "未选择"  || $data['leve'] == "未选择")
			{
			
				$this->alertJump('亲您选择您要代练的段位','lookfor');
			}
			else
			{

				$sele = $data['sele'];
				$leve = $data['leve'];
				$num = $sele.",".$leve;
				$where['charge_standard'] = $num; 
				$user = (new GameCharge)->findone($where);
				if($user == '')
				{
					$this->alertJump('您选择的规则不合法','lookfor');
				}
				else
				{
					$session->set('price',$user['charge_price']);
					$this->alertJump('下单成功','order');
				}
			}
				

		
		}
		else
		{

			return $this->render('qorder');
		}
	}

	//找他代练
	public function actionLookfor()
	{
		if($this->isPost())
		{
			$this->post();
		
		}
		else
		{
		
			//规则列表
			$data['data'] = (new GameRule)->find()->all();
			return $this->render('lookfor',$data);
		}
		
	}

	//订单
	public function actionOrder()
	{
		$session = $this->session();
		$order = new Order();

		if($this->isPost())
		{
			$data = $this->post();
			$data['create_time'] = time();
			$data['order_num'] = rand('000',9999);
			$data['status'] = 1;
			$order->attributes = $data;
			if($order->save(0))
			{
				$this->alertJump('付款成功','order');
			}
			else
			{

				$this->alertJump('付款失败','order');
			}
		}
		else
		{

			return $this->render('order');
		}
	}
	//游戏攻略
	public function actionRaiders()
	{
		$where = $this->post('id');
		$strateg = new GameStrateg();
		$leve = new GameleveLing();
		$name = $this->post('name');

		if($name == "" )
		{
			
			$query = $strateg->find();  
			
		}
		else
		{
			$query = $strateg->find()->andwhere(['or',['like',"strateg_name",$name]]);  
		}
		//分页加搜索
        $countQuery =  $query; 
        $pageSize = 8;  
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);  
        $data = $query->offset($pages->offset)
        	->select('*')
            ->limit($pages->limit)
            ->andwhere(['or',['like',"strateg_name",$name]])  
            ->all();  

		return $this->render('raiders',['data'=>$data,'pages'=>$pages]);
	}

	//游戏详情
	public function actionDetails()
	{
		$where['game_id'] = $this->get('id');
		//游戏详细信息
		$data['data'] = (new GameList)->findone($where);
		//游戏对应攻略信息
		$data['strateg'] = (new GameStrateg)->find()->where($where)->all();
		return $this->render('details',$data);
	}

	//攻略详情
	public function actionStrateg()
	{

		$where = $this->get('id');
		$data['data'] = (new GameStrateg)->findone($where);
		return $this->render('strateg',$data);
	}

	//关于我们
	public function actionAbout()
	{

		return $this->render('about');
	}

	//个人中心
	public function actionUser()
	{	
			$session = $this->session();
		if ($session['user']['user_name'] == '') 
		{
			return $this->alertJump('请先登陆','login');
		}else{
			$order = new Order();
			$user = new User();
			$id = $session['user']['user_id'];
			$where = 'user_id='.$id;
	     	//订单详情
	     	$data = $order->find()->where($where)->asArray()->all();
	     	$name=$session['user']['user_name'];	  		
	  		//代练信息
	  		$wheretwo = "take_name='$name'";
	  		$arr = $order->find()
	  					->select('*,user.user_name')
	  					->leftjoin('user','`order`.`user_id` = `user`.`user_id`')
	  					->where($wheretwo)
	  					->asArray()
	  					->all();	  		
			//个人资料
			$user1 = $user->find()->where($where)->asArray()->one();
			$data2 = array(
					'data'=>$user1,
					'data1'=>$data,
					'arr'=>$arr,
				);
			return $this->render('user',$data2);
		}
	}

	//个人资料修改
	public function actionUsave()
	{
		$session = $this->session();
		$user = new User;
		$where['user_id'] = $session['user']['user_id'];
		$res = $user->findone($where);
		$data = $this->post();
		$data['save_time'] = time();
		$fileInfo=$_FILES['user_img'];
		if ($fileInfo['error'] == '0') {
			$data['user_img'] = $this->do_upload('user_img');
		}
		$res->attributes = $data;
		if($res->save(0))
		{
			$this->alertJump('修改成功','user');
		}
		else
		{
			$this->alertJump('修改失败','user');
		}

		
	}

		//修改密码
	public function actionTighten()
	{
		$session = $this->session();
		$user = new User;
		$data = $this->post();
		$old = md5($data['old']);
		$pwd = $session['user']['user_pwd'];
		if ($data === []) {
			$this->alertJump('请填写信息','user');
		}else if($old != $pwd){
			$this->alertJump('请输入正确的旧密码','user');
		}else{
			$where['user_id'] = $session['user']['user_id'];
			$res = $user->findone($where);
			$arr['user_pwd'] = md5($data['new']);
			$res->attributes = $arr;
			if($res->save(0))
			{
				$this->alertJump('修改成功','user');
			}
			else
			{
				$this->alertJump('修改失败','user');
			}
		}
		
	}

	//注册方法
    public function actionAdd(){
    	$session = $this->session();
    	$user = new User();
    	$data = $this->post();
    	$data['create_time'] = time();
    	$data['user_pwd'] = md5($data['user_pwd']);
    	$user->attributes = $data;  
		if($user->save(0)){
			$session->set('user',$data);
			$this->alertJump('注册成功','index');
		}else{
			$this->alertJump('注册失败','register');
		}
    }

        //审核
    public function actionTeg()
    {
    	if($this->post('id')=="")
    	{
    		$this->alertJump('请登录','login');
    	}
    	$where['user_id'] = $this->post('id');
    	$data = (new User)->findone($where);
    	$data->is_leveling = '2';
    	if($data->save(0))
    	{
    		$this->alertJump('您的提交正在审核，我们会联系工作人员尽快和您进行切磋。{如果您赢过了我们的工作人员，那么就可以成为代练了','user');
    	}else
    	{
    		$this->alertJump('失败','user');
    	}
    }


}