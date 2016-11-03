<?php
/**
 * Created by PhpStorm.
 * User: Shadow
 * Q Q : 1527200768
 * Date: 2016/11/3
 * Time: 17:36
 */

namespace console\controllers;
use backend\models\AdminUser;
//use common\models\User;

class InitController extends \yii\console\Controller {
    /**
     * Create init user
     */
    public function actionAdmin()
    {
        echo "Create a new user ...\n";                  // 提示当前操作
        $username = $this->prompt('User Name:');        // 接收用户名
        $email = $this->prompt('Email:');               // 接收Email
        $password = $this->prompt('Password:');         // 接收密码
        $model = new AdminUser();                            // 创建一个新用户
        $model->username = $username;                   // 完成赋值
        $model->email = $email;
        $model->created_at = time();
        $model->updated_at = time();
        $model->setPassword($password);
        $model->generateAuthKey();
        if (!$model->save())                            // 保存新的用户
        {
            foreach ($model->getErrors() as $error)     // 如果保存失败，说明有错误，那就输出错误信息。
            {
                foreach ($error as $e)
                {
                    echo "$e\n";
                }
            }
            return 1;                                   // 命令行返回1表示有异常
        }
        return 0;                                       // 返回0表示一切OK
    }
}