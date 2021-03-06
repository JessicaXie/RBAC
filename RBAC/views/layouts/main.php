<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!--导航条-->
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">RBAC</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页 <span class="sr-only">(current)</span></a></li>
            </ul>
            <p class="navbar-text navbar-right">Hi：******</p>
        </div>
    </div>
</nav>
<!--导航条-->

<!--菜单栏和内容区域-->
<div class="container-fluid">
    <div class="col-sm-2 col-md-2 col-lg-2 sidebar">
        <ul class="nav nav-sidebar">
            <li >权限演示页面</li>
            <li><a href="javascript:void(0)">测试页面一</a></li>
            <li><a href="javascript:void(0)">测试页面二</a></li>
            <li><a href="javascript:void(0)">测试页面三</a></li>
            <li><a href="javascript:void(0)">测试页面四</a></li>
            <li>系统设置</li>
            <li><a href="javascript:void(0)">用户管理</a></li>
            <li><a href="javascript:void(0)">角色管理</a></li>
            <li><a href="javascript:void(0)">权限管理</a></li>
        </ul>
    </div>
    <div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2 col-lg-10 col-lg-offset-2">
        <?=$content;?>
        <hr/>
        <footer>
            <p class="pull-left">@JessicaXie</p>
            <p class="pull-right">RBAC的yii2.0.12WEB权限管理    <a href="javascript:void(0)">rbac.yii.com</a></p>
        </footer>
    </div>

</div>


<!--菜单栏和内容区域-->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
