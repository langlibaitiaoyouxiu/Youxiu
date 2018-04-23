<?php
namespace backend\controllers;

use Yii;
use common\composers\BaseController;
use common\models\LoginForm;
use common\services\UrlServices;
use backend\models\Admin;
use app\models\GameleveLing;
use app\models\log;
use yii\db\Query;
class LevelingController extends BaseController
{
    public $layout = 'public';


    //代练游戏添加
    public function actionLevelinggameadd()
    {
        $gameleveling = new GameleveLing();
        $session = $this->session();
        $log = new Log();
    	if($this->isPost())
    	{

	       
            $gameleveling->attributes = $this->post();  

           if($gameleveling->save(0))
	        {


             $log->date_time = time();
             $log->admin_id = $session['user']['admin_id'];
             $log->log_desc = "代练游戏添加成功";
             $log->save(0); 
	          $this->alertJump('添加成功','levelinggamelist');
	        }
             else 
            {

             $log->date_time = time();
             $log->admin_id = $session['user']['admin_id'];
             $log->log_desc = "代练游戏添加失败";
             $log->save(0);
	          $this->alertJump('添加失败','levelinggameadd');
	        }

        }
        else
        {

            return $this->render('leveling_game_add');
        }   

    	                        
    }
       
    

    //代练游戏列表
    public function actionLevelinggamelist()
    {

        if($this->isPost())
        {

        }
        else
        {
            $user['data'] = (new GameleveLing)->find()->all();
            
            return $this->render('leveling_game_list',$user);
        }
    }

    //代练游戏删除
    public function actionLevelinggamedel($id)
    {
        $log = new Log();
        $session = $this->session();
        $where['dgame_id'] = $id;
        
        $res = (new GameleveLing)->findone($where)->delete();
        
        if($res)
        {
             $log->date_time = time();
             $log->admin_id = $session['user']['admin_id'];
             $log->log_desc = "代练游戏删除";
             $log->save(0);
            
            $this->alertJump('删除成功','levelinggamelist');
        }
        else
        {
            $log->date_time = time();
             $log->admin_id = $session['user']['admin_id'];
             $log->log_desc = "代练游戏删除失败";
             $log->save(0);
            $this->alertJump('删除失败','levelinggamelist');
        }

    }

}