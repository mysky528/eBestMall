<?php
/**
 * Created by PhpStorm.
 * User: Shadow
 * Q Q : 1527200768
 * Date: 2016/11/5
 * Time: 3:24
 */

namespace common\components;

class Helper
{
    /*
     * $arr = array('1','2','3');
     * Yii::$app->helper->p($arr);
     */
    public function p ($arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '<pre>';
    }
}