<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\DefaultAsset;

DefaultAsset::register($this);
$this->title = Yii::$app->params['name_title'];
$this->registerMetaTag(['name' => 'keywords', 'content' => 'eBestMall, 网上商城, 网店系统, 多用户商城, 分销系统, B2B2C商城系统, 微信分销系统, 行业ERP']);
$this->registerMetaTag(['name' => 'description', 'content' => 'eBestMall是国内电子商务系统及服务解决方案新创品牌.为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。'], 'description');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
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
