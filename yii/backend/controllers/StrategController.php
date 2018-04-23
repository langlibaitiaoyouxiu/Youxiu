<?php
namespace backend\controllers;

use Yii;
use common\composers\BaseController;
use common\models\LoginForm;
use common\services\UrlServices;
use backend\models\Admin;
use app\models\Gamelist;
use app\models\GameStrateg;
use app\models\GameleveLing;
use yii\data\Pagination;
use app\models\Log;
/**
 * Site controller
 */
class StrategController extends BaseController
{
	public $layout = 'public';
	public function actionStrateglist()
	{
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
        $pageSize = 3;  
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);  
        $data = $query->offset($pages->offset)
        	->select('*')
        	->leftjoin('game_leve_ling','game_strateg.game_id = game_leve_ling.dgame_id')
            ->limit($pages->limit)
            ->andwhere(['or',['like',"strateg_name",$name]])  
            ->Asarray()
            ->all();  
 
		return $this->render('strateg_list',['data'=>$data,'pages'=>$pages,'name'=>$name]);
	}

	//攻略添加
	public function actionStrategadd()
	{
		$log = new Log();
		$session = $this->session();
		$strateg = new GameStrateg();
		if($this->isPost())
		{

			$data = $this->post();
			
			 $strateg->game_id = $data['game_id'];
			 $strateg->game_desc = $data['game_desc'];
			 $strateg->strateg_name = $data['strateg_name'];

			if($strateg->save(0))
			{	

				$log->date_time = time();
            	$log->admin_id = $session['user']['admin_id'];
             	$log->log_desc = "攻略添加";
             	$log->save(0);
				$this->alertJump('添加成功','strategadd');
			}
			else
			{	
				$log->date_time = time();
                $log->admin_id = $session['user']['admin_id'];
                $log->log_desc = "攻略添加失败";
                $log->save(0);
				$this->alertJump('添加失败','strategadd');
			}
		}
		else
		{
			$user['data'] = (new GameleveLing)->find()->all();
			return $this->render('strateg_add',$user);
		}
	}

	//攻略移除
	public function actionStrategdel($id)
	{
		$log = new Log();

		$session = $this->session();
		
		$where['strateg_id'] = $id;
		
		$res = GameStrateg::findone($where)->delete();

		if($res) 
		{	
			 $log->date_time = time();
             $log->admin_id = $session['user']['admin_id'];
             $log->log_desc = "攻略删除成功";
             $log->save(0);
			$this->alertJump('删除成功','strateglist');
		}
		else
		{
			 $log->date_time = time();
             $log->admin_id = $session['user']['admin_id'];
             $log->log_desc = "攻略删除失败";
             $log->save(0);
			$this->alertJump('删除失败','strateglist');
		}
	}


		
}