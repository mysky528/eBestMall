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

class MemberController extends IndexController {

    public function actionIndex(){
        $this->layout = 'main-home';
        return $this->render("index");
    }

    public function actionLogin(){
        $this->layout = 'main-index';
        return $this->render("login");
    }

    public function actionRegist(){
        $this->layout = 'main-index';
        return $this->render("regist");
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}