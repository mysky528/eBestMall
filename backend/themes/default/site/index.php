<?php

/* @var $this yii\web\View */

$this->title = '概览';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?= Yii::$app->params['name'] ?></h1>

        <p class="lead">基于MVC架构，前端采用Bootstrap框架，后端采用Yii2.0框架。</p>

        <p><a class="btn btn-lg btn-success" href="#">即将到来</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>快速</h2>

                <p>Yii 只加载您需要的功能。它具有强大的缓存支持。它明确的设计能与 AJAX 一起高效率的工作。</p>

                <p><a class="btn btn-default" href="#">详细 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>安全</h2>

                <p>Yii 的标准是安全的。它包括了输入验证，输出过滤，SQL 注入和跨站点脚本的预防。</p>

                <p><a class="btn btn-default" href="#">详细 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>专业</h2>

                <p>Yii 可帮助您开发清洁和可重用的代码。它遵循了 MVC模式，确保了清晰分离逻辑层和表示层。</p>

                <p><a class="btn btn-default" href="#">详细 &raquo;</a></p>
            </div>
        </div>

    </div>
</div>

