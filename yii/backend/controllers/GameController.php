<?php
namespace backend\controllers;

use Yii;
use common\composers\BaseController;
use common\models\LoginForm;
use common\services\UrlServices;
use backend\models\Admin;
use app\models\Gamelist;
use app\models\Log;
use app\models\GameRule;
use app\models\GameLeveLing;
use app\models\GameCharge;
use yii\data\Pagination;
/**
 * Site controller
 */
class GameController extends BaseController
{
	public  $layout = 'public';

	//游戏列表
	public function actionGamelist()
	{
		
		$gamelist = new Gamelist();

		$query = $gamelist->find();  
        $countQuery = clone $query; 
        $pageSize = 3;  
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);  
        $data = $query->offset($pages->offset) 
            ->limit($pages->limit)  
            ->all();  
	
		return $this->render('game_list',['data'=>$data,'pages'=>$pages,]);

	}

	//游戏添加
	public function actionGameadd()
	{
		$log = new Log();
		$session = $this->session();
		$gamelist = new Gamelist();
		$session = $this->session();

		if($this->isPost())
		{
			$data = $this->post();
			$data['mai_ming'] = $this->do_upload('mai_ming');
			$data['code'] = $this->do_upload('code');
			$gamelist->attributes = $data;
			if($gamelist->save(0))
			{
			 $log->date_time = time();
	 		 $log->admin_id = $session['user']['admin_id'];
	 		 $log->log_desc = "游戏添加";
	 		 $log->save(0);
				
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
		$log = new Log();
		$session = $this->session();
		$where['game_id'] = $id;
		
		$res = (new Gamelist)->findone($where)->delete();
		
		if($res)
		{
			 $log->date_time = time();
	 		 $log->admin_id = $session['user']['admin_id'];
	 		 $log->log_desc = "游戏删除";
	 		 $log->save(0);
			
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
		$log = new Log();
		$session = $this->session();
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
				 $log->date_time = time();
	 			 $log->admin_id = $session['user']['admin_id'];
	 			 $log->log_desc = "游戏修改";
	 			 $log->save(0);
				$this->alertJump('修改成功','gamelist');
			}
			else
			{

				 $log->date_time = time();
	 			 $log->admin_id = $session['user']['admin_id'];
	 			 $log->log_desc = "修改失败";
	 			 $log->save(0);
				$this->alertJump('修改失败','gamelist');
			}

	
		
		}
		else
		{

			$where['game_id'] = $id;
		
			$res['user'] = $gamelist->findone($where);

			return $this->render('game_save',$res);
		}
		

	}

  //代练收费规则添加
	public function actionGamecharge()
	{
		$game = new GameRule();
		$leveling_game = new GameLeveLing();
		$charge = new GameCharge();
		$session = $this->session();
		$log = new Log();
		if($this->isPost())
		{
			$data = $this->post();
			$one = $data['rule_id'];
			$two = $data['n_rule'];
			$rule = $one.','.$two;
			$charge->dgame_id = $data['dgame_id'];
			$charge->charge_standard = $rule;
			$charge->charge_price = $data['charge_price'];
			if($charge->save(0))
			{
				 $log->date_time = time();
	 			 $log->admin_id = $session['user']['admin_id'];
	 			 $log->log_desc = "代练收费规则添加";
	 			 $log->save(0);
				$this->alertJump('添加成功','gamecharge');
			}
			else
			{
				 $log->date_time = time();
	 			 $log->admin_id = $session['user']['admin_id'];
	 			 $log->log_desc = "代练收费规则添加失败";
	 			 $log->save(0);

				$this->alertJump('添加失败','gamecharge');
			}
		}
		else
		{

			
			$data['leveling'] = $leveling_game->find()->all();
			$data['data'] = $game->find()->all();
			return $this->render('game_charge',$data);
		}
			
	}

}