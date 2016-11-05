<?php
/**
 * Created by PhpStorm.
 * User: Shadow
 * Q Q : 1527200768
 * Date: 2016/11/6
 * Time: 1:31
 */

use yii\helpers\Html;

$this->title = '欢迎登录';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="top">
    <div class="logo"><a href="<?= Yii::$app->homeUrl; ?>"><img src="<?= Yii::$app->homeUrl; ?>images/logo.png" /></a></div>
</div>
<!--Begin Login Begin-->
<div class="log_bg">

    <div class="login">
        <div class="log_img"><img src="<?= Yii::$app->homeUrl; ?>images/l_img.png" width="611" height="425" /></div>
        <div class="log_c">
            <form>
                <table border="0" style="width:370px; font-size:14px; margin-top:30px;" cellspacing="0" cellpadding="0">
                    <tr height="50" valign="top">
                        <td width="55">&nbsp;</td>
                        <td>
                            <span class="fl" style="font-size:24px;">登录</span>
                            <span class="fr">还没有商城账号，<a href="<?= \yii\helpers\Url::toRoute(['member/regist']); ?>" style="color:#ff4e00;">立即注册</a></span>
                        </td>
                    </tr>
                    <tr height="70">
                        <td>用户名</td>
                        <td><input type="text" value="" class="l_user" /></td>
                    </tr>
                    <tr height="70">
                        <td>密&nbsp; &nbsp; 码</td>
                        <td><input type="password" value="" class="l_pwd" /></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td style="font-size:12px; padding-top:20px;">
                	<span style="font-family:'宋体';" class="fl">
                    	<label class="r_rad"><input type="checkbox" /></label><label class="r_txt">请保存我这次的登录信息</label>
                    </span>
                            <span class="fr"><a href="#" style="color:#ff4e00;">忘记密码</a></span>
                        </td>
                    </tr>
                    <tr height="60">
                        <td>&nbsp;</td>
                        <td><input type="submit" value="登录" class="log_btn" /></td>
                    </tr>
                </table>
            </form>
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