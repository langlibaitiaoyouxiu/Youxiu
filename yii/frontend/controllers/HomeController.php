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
	public function actionIndex()
	{
		return $this->render('index');
	}
}