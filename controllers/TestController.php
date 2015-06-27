<?php 
namespace app\controllers;
use Yii;
use yii\web\Controller;

class TestController extends Controller
{
	public function actionIndex()
	{
		$session = Yii::$app->session;
		$session->open();
		// if($session->isActive){
		// 	var_dump('111');
		// }
		$session->set('language','china');
		echo $session->get('language');
		// $session->remove('language');
		
	}
}
