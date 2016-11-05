<?php
/**
 * Created by PhpStorm.
 * User: Shadow
 * Q Q : 1527200768
 * Date: 2016/11/5
 * Time: 14:42
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<!--Begin Header Begin-->
<div class="soubg" style="display: none">
    <div class="sou">
        <span class="fr">
        	<span class="fl"><a href="Login.html">你好，请登录</a>&nbsp; <a href="Regist.html" style="color:#ff4e00;">免费注册</a></span>
            <span class="fl">&nbsp;|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="<?= Yii::$app->homeUrl; ?>images/s_tel.png" align="absmiddle" /></a></span>
        </span>
    </div>
</div>
<!--End Header End-->

<div class="top">
    <div class="logo"><a href="<?= Yii::$app->homeUrl; ?>"><img src="<?= Yii::$app->homeUrl; ?>images/logo.png" /></a></div>
</div>

<!--Begin Login Begin-->
<div class="log_bg">
    <div class="login">
        <div class="log_img"><img src="<?= Yii::$app->homeUrl; ?>images/l_img.png" width="611" height="425" /></div>
        <div class="log_c">
            <?php $form = ActiveForm::begin(['id' => 'login-form','fieldConfig'=>['template'=>'{input}']]); ?>
                <table border="0" style="width:370px; font-size:14px; margin-top:30px;" cellspacing="0" cellpadding="0">
                    <tr height="50" valign="top">
                        <td width="55">&nbsp;</td>
                        <td>
                            <span class="fl" style="font-size:24px;">登录</span>
                            <span class="fr">还没有商城账号，<a href="Regist.html" style="color:#ff4e00;">立即注册</a></span>
                        </td>
                    </tr>
                    <tr height="70">
                        <td>用户名</td>
                        <td>
<!--                            <input type="text" value="" name="username" class="l_user" />-->
                            <?= $form->field($model, 'username')->textInput(['class' => 'l_user'],['autofocus' => true]) ?>
                        </td>
                    </tr>
                    <tr height="70">
                        <td>密&nbsp; &nbsp; 码</td>
                        <td>
<!--                            <input type="password" value="" name="password" class="l_pwd" />-->
                            <?= $form->field($model, 'password')->passwordInput(['class' => 'l_pwd']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td style="font-size:12px; padding-top:20px;">
                	<span style="font-family:'宋体';" class="fl">
<!--                            <input type="checkbox" name="rememberMe" checked /></label><label class="r_txt">请保存我这次的登录信息</label>-->
                            <?= $form->field($model, 'rememberMe')->checkbox([
                                'id' => 'remember-me',
                                'class' => 'r_rad',
                                'template' => '{input}<label class="r_txt" for="remember-me">请保存我这次的登录信息</label>',
                            ]) ?>
                    </span>
                            <span class="fr"><a href="#" style="color:#ff4e00;">忘记密码</a></span>
                        </td>
                    </tr>
                    <tr height="60">
                        <td>&nbsp;</td>
                        <td>
<!--                            <input type="submit" value="登录" class="log_btn" />-->
                            <?= Html::submitButton('登录', ['class' => 'log_btn', 'name' => 'login-button']) ?>

                        </td>
                    </tr>
                </table>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<!--End Login End-->
<!--Begin Footer Begin-->
<div class="btmbg">
    <div class="btm">
        备案/许可证编号：贵ICP备00000000号 www.hongyuvip.com   Copyright © 2015-2018 eBestMall商城 All Rights Reserved. 复制必究 , Technical Support: HongYuKeJi <br />
        <img src="<?= Yii::$app->homeUrl; ?>images/b_1.gif" width="98" height="33" /><img src="<?= Yii::$app->homeUrl; ?>images/b_2.gif" width="98" height="33" /><img src="<?= Yii::$app->homeUrl; ?>images/b_3.gif" width="98" height="33" /><img src="<?= Yii::$app->homeUrl; ?>images/b_4.gif" width="98" height="33" /><img src="<?= Yii::$app->homeUrl; ?>images/b_5.gif" width="98" height="33" /><img src="<?= Yii::$app->homeUrl; ?>images/b_6.gif" width="98" height="33" />
    </div>
</div>
<!--End Footer End -->
