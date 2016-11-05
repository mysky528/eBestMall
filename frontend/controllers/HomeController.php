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

class HomeController extends IndexController {

    public function actionIndex(){
        if (Yii::$app->user->isGuest) {
            echo "请登录";die;

        }
        $this->layout = 'main-home';
        return $this->render("index");
        //return $this->renderPartial("index");

    }
}