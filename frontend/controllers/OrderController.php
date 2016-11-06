<?php
/**
 * Created by PhpStorm.
 * User: Shadow
 * Q Q : 1527200768
 * Date: 2016/11/5
 * Time: 20:07
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class OrderController extends Controller {

    public function actionIndex(){
        $this->layout = 'main-home';
        return $this->render("index");
    }

    public function actionCheck(){
        return $this->render("check");
    }

    public function actionPay(){
        try{
            $orderid = Yii::$app->request->get('order_id');
            $paymethod = Yii::$app->request->get('paymethod');
            if(empty($orderid) || empty($paymethod)){
                throw new \Exception();
            }
            if($paymethod == 'alipay'){
                return;
            }
        }catch (\Exception $e){}

        return $this->redirect(['order/index']);
    }
}