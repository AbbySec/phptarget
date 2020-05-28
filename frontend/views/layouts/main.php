<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
$this->title = '大学生网络文化节/计算机文化节';
$this->registerCssFile('@web/css/preload.min.css');
$this->registerCssFile('@web/css/plugins.min.css');
$this->registerCssFile('@web/css/style.light-blue-500.min.css');
$this->registerCssFile('@web/css/width-boxed.min.css');
$this->registerCssFile('@web/css/button.css');
$this->registerCssFile('@web/css/style.css');
$this->registerCssFile('@web/css/many.css',['depends'=>['frontend\assets\AppAsset']]);
//$this->registerCssFile('./css/bootstrap.min.css');
$this->registerJsFile('@web/static/analytics.js',['depends'=>['frontend\assets\AppAsset']]);
$this->registerJsFile('@web/static/plugins.min.js',['depends'=>['frontend\assets\AppAsset']]);
$this->registerJsFile('@web/static/app.min.js',['depends'=>['frontend\assets\AppAsset']]);
$this->registerJsFile('@web/static/configurator.min.js',['depends'=>['frontend\assets\AppAsset']]);
//$this->registerJsFile('./static/bootstrap.min.js');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 360渲染  -->
    <meta name="renderer" content="webkit|ie-stand|ie-comp">
    <!--以防万一如果不能用webkit 用最高版本的ie -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="ms-header ms-header-primary">
    <div class="container container-full">
        <div class="ms-title">
            <a href="<?=Url::to('@web')?>">
                <h1 class="animated fadeInRight animation-delay-6">大学网络文化节/计算机文化节</h1>
            </a>
        </div>
        <!-- 导航栏右边的小按钮 -->
        <div class="header-right">
            <?php
            if(Yii::$app->user->isGuest){
            ?>
            <a href="<?= Url::toRoute('user/login') ?>" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8">
                <i class="glyphicon glyphicon-user menu-right-logo"></i>
            </a>
            <?php
            }
            else
            {
                ?>
                <a href="<?= Url::toRoute('user/logout') ?>" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8">
                    <i class="glyphicon glyphicon-log-out menu-right-logo"></i>
                </a>
            <?php
            }
            ?>
            <form class="search-form animated zoomInDown animation-delay-9">
                <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q">
                <label for="search-box">
                    <i class="glyphicon glyphicon-search menu-right-logo"></i>
                </label>
            </form>
        </div>
    </div>
</header>

<!-- 导航栏 -->
<nav class="navbar navbar-static-top yamm ms-navbar ms-navbar-primary">
    <div class="container container-full">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="" alt="" class="logo-small">
                <span class="ms-title">网络文化节/计算机文化节
              </span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown active">
                    <a href="<?=Url::toRoute('site/index')?>" class="animated fadeIn animation-delay-4" data-hover="首页" role="button" aria-haspopup="true" aria-expanded="false" data-name="homepage">首页
                        <i class="glyphicon glyphicon-chevron-down menu-logo"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle animated fadeIn animation-delay-5" data-toggle="dropdown" data-hover="dropdown" data-name="page" aria-expanded="false">网络文化节
                        <i class="glyphicon glyphicon-chevron-down menu-logo"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                        <li class="dropdown"><a href="<?=Url::toRoute('movie/intro')?>">微电影比赛介绍</a></li>
                        <li class="dropdown"><a href="<?=Url::toRoute('photo/intro')?>">摄影比赛介绍</a></li>
                        <li class="dropdown"><a href="<?=Url::toRoute('article/intro')?>">网文比赛介绍</a></li>
<!--                        <li class="dropdown"><a href="--><?//=Url::toRoute('advertisment/intro')?><!--">公益广告比赛介绍</a></li>-->
                        <li class="dropdown"><a href="<?=Url::toRoute('idea/intro')?>">校园文化创意比赛介绍</a></li>
                        <li class="dropdown"><a href="<?=Url::toRoute('app/intro')?>">易班轻应用设计大赛介绍</a></li>
                        <li class="dropdown"><a href="<?=Url::toRoute('entrepreneurship/intro')?>">网络创新创业大赛介绍</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle animated fadeIn animation-delay-5" data-toggle="dropdown" data-hover="dropdown" data-name="page" aria-expanded="false">计算机文化节
                        <i class="glyphicon glyphicon-chevron-down menu-logo"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                        <li class="dropdown"><a href="<?=Url::toRoute('html5/intro')?>">HTML5页面设计大赛介绍</a></li>
                        <li class="dropdown"><a href="<?=Url::toRoute('acm/intro')?>">2017大学生程序设计大赛介绍</a></li>
                        <li class="dropdown"><a href="<?=Url::toRoute('internet/intro')?>">计算机网络文化知识竞赛介绍</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle animated fadeIn animation-delay-5" data-toggle="dropdown" data-hover="dropdown" data-name="page" aria-expanded="false">我要报名
                        <i class="glyphicon glyphicon-chevron-down menu-logo"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                        <li class="dropdown"><a href="<?= Url::toRoute('movie/upload') ?>">微电影比赛报名</a></li>
                        <li class="dropdown"><a href="<?= Url::toRoute('photo/upload') ?>">摄影比赛报名</a></li>
                        <li class="dropdown"><a href="<?= Url::toRoute('article/upload') ?>">网文比赛报名</a></li>
<!--                        <li class="dropdown"><a href="--><?//= Url::toRoute('advertisment/upload') ?><!--">公益广告比赛报名</a></li>-->
                        <li class="dropdown"><a href="<?= Url::toRoute('idea/upload') ?>">校园文化创意比赛报名</a></li>
                        <li class="dropdown"><a href="<?= Url::toRoute('html5/upload') ?>">Html5设计比赛报名</a></li>
                        <li class="dropdown"><a href="<?= Url::toRoute('app/upload') ?>">易班轻应用设计比赛报名</a></li>
                        <li class="dropdown"><a href="<?= Url::toRoute('acm/upload') ?>">2017大学生程序设计大赛报名</a></li>
                        <li class="dropdown"><a href="<?= Url::toRoute('internet/upload') ?>">计算机网络文化知识竞赛</a></li>
                        <li class="dropdown"><a href="<?= Url::toRoute('entrepreneurship/upload') ?>">网络创新创业大赛</a></li>
                        </ul>
                </li>
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle animated fadeIn animation-delay-9" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="ecommerce">联系我们-->
<!--                        <i class="glyphicon glyphicon-chevron-down menu-logo"></i>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li>-->
<!--                            <a href="#">联系学校</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#">联系老师</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
                <li class="dropdown">
                    <a href="<?= Url::toRoute('help/index') ?>" class="dropdown-toggle animated fadeIn animation-delay-9" role="button" aria-haspopup="true" aria-expanded="false" data-name="ecommerce">报名流程
                        <i class="glyphicon glyphicon-chevron-down menu-logo"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- container -->
</nav>

    <!--    <div class="container">-->
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= $content ?>
    <!--    </div>-->

<footer class="ms-footer">
    <div class="container">
        </br>
        <a href="#" id="footer-bottom"> &nbsp;关于我们&nbsp;|</a>
        <a href="#" id="footer-bottom"> &nbsp;首页&nbsp;|</a>
        <a href="#" id="footer-bottom"> &nbsp;友情链接&nbsp;|</a>
        <a href="#" id="footer-bottom"> &nbsp;隐私条款</a>
        </br>
        <b>技术支持:</b>
        </br>
        <a href="#" id="footer-bottom">Copyright &copy; 2018 </a>
    </div>
</footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
?>