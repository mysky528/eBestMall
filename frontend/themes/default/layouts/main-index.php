<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="renderer" content="webkit">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> - <?= Yii::$app->params['name'] ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>
</body>

<?= Html::jsFile('js/iepng.js', ['condition' => 'IE 6']) ?>

<?= Html::jsFile('//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js', ['condition' => 'IE 6']) ?>

</html>
<?php $this->endPage() ?>
