<?php
namespace backend\controllers;

use Yii;
use common\composers\BaseController;
use common\models\LoginForm;
use common\services\UrlServices;
use backend\models\Admin;
use yii\db\Query;
use app\models\GameleveLing;
use app\models\log;
use app\models\User;
use app\models\Order;
use yii\data\Pagination;

/**
 * Site controller
 */

class UserController extends BaseController
{

    public $layout = 'public';

    //用户列表
    public function actionUserlist()
    {
        $user = new User();
        $session = $this->session();
        $query = $user->find(); 
        //分页加搜索
        $countQuery =  $query; 
        $pageSize = 3;  
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);  
        $data = $query->offset($pages->offset)
            ->select('*')
            ->limit($pages->limit)
            ->all();  
        

        return $this->render('user_list',['data'=>$data,'pages'=>$pages]);
      

    }



    //用户修改页面
    public function actionUserupdate(){
        $user_id = $_GET['user_id'];
        //绑定单个防注入参数
        $one = \Yii::$app->db->createCommand("SELECT * FROM user where user_id=:user_id")->bindValue(":user_id", $user_id)->queryOne();
        return $this->render("user_update", ["one" => $one]);
    }
    //用户修改方法
    public function actionUsersave(){
        $arr = Yii::$app->request->post();
        $user_id =$_POST['user_id'];
        $db = \Yii::$app->db->createCommand()->update('user', ['user_name' => $arr['user_name'], 'user_pwd' => $arr['user_pwd'], 'user_mobile' => $arr['user_mobile'],'nick_name'=>$arr['nick_name'],'card_id'=>$arr['card_id'], 'user_id=:user_id', [':user_id'=>$user_id]])->execute();
//        var_dump($db);die;
        if ($db) {
            return $this->redirect('user_list');
        } else {
            return $this->redirect('user_list');
        }
    }

    //代练审核
    public function actionExamine()
    {
        $log = new Log();
        $session = $this->session();
        $user = new User();
        $id = $this->get('id');
        $id = isset($id) ? $id : '';
        if($id!='')
        {
        
            $where['user_id'] = $id;
            $res = $user->findone($where);
            $res->is_leveling = '1';
            if($res->save(0))
            {
                 $log->date_time = time();
                 $log->admin_id = $session['user']['admin_id'];
                 $log->log_desc = "审核通过";
                 $log->save(0);
                $this->alertJump('审核通过','examine');
            }
            else
            {
                 $log->date_time = time();
                 $log->admin_id = $session['user']['admin_id'];
                 $log->log_desc = "审核错误";
                 $log->save(0);
                $this->alertJump('审核失败','examine');
            }
        }
        $where = [
                'is_leveling'=>'2',
                
        ];
        // $res['data'] = $user->find()->where($where)->all();
        // return $this->render('examine',$res);

        $query = $user->find()->where($where); 
        
        //分页加搜索
        $countQuery =  $query; 
        $pageSize = 3;  
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);  
        $data = $query->offset($pages->offset)
            ->select('*')
            ->where($where)
            ->limit($pages->limit)
            ->all();  

        return $this->render('examine',['data'=>$data,'pages'=>$pages]);
    }

    //取消代练申请
    public function actionIsexamine($id)
    {
         $log = new Log();
        $user = new User();
        $session = $this->session();
        $id = isset($id) ? $id : '';
        if($id!='')
        {
       
            $where['user_id'] = $id;
            $res = $user->findone($where);
            $res->is_leveling = '0';
            if($res->save(0))
            {
             
                 $log->date_time = time();
                 $log->admin_id = $session['user']['admin_id'];
                 $log->log_desc = "取消审核资格";
                 $log->save(0);
                $this->alertJump('已取消','examine');
            }
            else
            {
                 $log->date_time = time();
                 $log->admin_id = $session['user']['admin_id'];
                 $log->log_desc = "取消审核资格失败";
                 $log->save(0);

                $this->alertJump('取消失败','examine');
            }
        }
    }

    //冻结账号
    public function actionFrozen()
    {   
            $log = new Log();
            $session = $this->session();
            $id = $this->get('id');
            $where['user_id'] = $id;
            $user = (new User)->findone($where);
            $user->status = 4;
            if($user->save(0))
            {
                 $log->date_time = time();
                 $log->admin_id = $session['user']['admin_id'];
                 $log->log_desc = "冻结成功";
                 $log->save(0);
                $this->alertJump('冻结成功','userlist');
            }
            else
            {
                 $log->date_time = time();
                 $log->admin_id = $session['user']['admin_id'];
                 $log->log_desc = "冻结失败";
                 $log->save(0);
                $this->alertJump('冻结失败','userlist');

            }
    }

    //日志列表
    public function actionLog()
    {
        $log = new Log();
        $query = $log->find(); 
        
        //分页加搜索
        $countQuery =  $query; 
        $pageSize = 6;  
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);  
        $data = $query->offset($pages->offset)
            ->select('*')
            ->leftJoin('admin','admin.admin_id = log.admin_id')
            ->limit($pages->limit)
            ->Asarray()
            ->all(); 
             return $this->render('log',['data'=>$data,'pages'=>$pages]);
    }

    //订单列表
    public function actionOrder()
    {
        $log = new Log();
        $order = new Order; 
        $session = $this->session();
        $query = $order->find();
        $countQuery =  $query; 
        $pageSize = 3;  
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);  
        $data = $query->offset($pages->offset)
            ->select('*')
            ->leftJoin('user','user.user_id = order.user_id')
            ->limit($pages->limit)
            ->Asarray()
            ->all(); 
    
          return $this->render('order',['data'=>$data,'pages'=>$pages]);   
    }
}