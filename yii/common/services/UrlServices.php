<?php
namespace common\services;
	/**
	* 
	*/

use yii;
use yii\helpers\Url;
use common\composers\BaseController;

class UrlServices
{
	
	//前台路径	
	public static  function HomeUrl($path,$param=[])
	{
		$url = Url::toRoute(array_merge([$path],$param));

		$config_param = Yii::$app->params['url']['home'];
		return $config_param.$url;
	}

	//后台路径
	public  static function AdminUrl($path,$param=[])
	{
		$url = Url::toRoute(array_merge([$path],$param));
		$config_param = Yii::$app->params['url']['admin'];
		return $config_param.$url;
	}

}
