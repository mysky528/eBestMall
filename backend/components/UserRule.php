<?php
/**
 * 修改用户规则
 * Created by PhpStorm.
 * User: Shadow
 * Date: 2016/10/15
 * Time: 0:45
 */

namespace backend\components;

use Yii;

class UserRule extends \yii\rbac\Rule{
    public function execute($user, $item, $params)
    {
        if (Yii::$app->controller->action->id !== 'update' && Yii::$app->controller->action->id !== 'delete' || Yii::$app->user->id == $params['id']){
            return true;
        }
        return false;
    }
}