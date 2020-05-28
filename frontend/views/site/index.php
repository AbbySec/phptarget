<?php

/* @var $this yii\web\View */
use frontend\components\DisWidget;

$this->title = '中国矿业大学';
$this->registerCssFile('@web/css/style2.css', ['depends' => ['frontend\assets\AppAsset']]);
$this->registerCssFile('@web/css/many.css', ['depends' => ['frontend\assets\AppAsset']]);
?>
<!-- 左边右边电脑 -->
<div class="ms-hero ms-hero-material">
    <span class="ms-hero-bg"></span>
    <div class="container">
        <!-- 控制测试测试test测试测试test -->
        <div class="col-lg-6 col-md-7">
            <div id="carousel-hero" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="carousel-caption">
                            <div class="ms-hero-material-text-container">
                                <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                                    <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">活动主题</h1>
                                    <h2 class="animated fadeInLeft animation-delay-18">践行核心价值观 传播网络正能量</h2>
                                </header>
                                <ul class="ms-hero-material-list">
                                    <li class="">
                                        <div class="ms-list-icon animated zoomInUp animation-delay-18">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp">
                              <i class="glyphicon glyphicon-book"></i>
                            </span>
                                        </div>
                                        <div class="ms-list-text animated fadeInRight animation-delay-19">唱响网络主旋律</div>
                                    </li>
                                    <li class="">
                                        <div class="ms-list-icon animated zoomInUp animation-delay-20">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp">
                              <i class="glyphicon glyphicon-book"></i>
                            </span>
                                        </div>
                                        <div class="ms-list-text animated fadeInRight animation-delay-21">传递网上正能量</div>
                                    </li>
                                    <li class="">
                                        <div class="ms-list-icon animated zoomInUp animation-delay-22">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp">
                              <i class="glyphicon glyphicon-book"></i>
                            </span>
                                        </div>
                                        <div class="ms-list-text animated fadeInRight animation-delay-23">提升网络文明素养</div>
                                    </li>
                                </ul>
                                <div class="ms-hero-material-buttons text-right">
                                    <div class="ms-hero-material-buttons text-right">
                                        <a href="javascript:void(0);"
                                           class="button button-highlight button-pill  animated fadeInLeft animation-delay-24 ">
                                            作品提交</a>
                                        <a href="#workin"
                                           class="button button-highlight button-pill  btn-success btn-raised animated fadeInRight animation-delay-24">
                                            作品赏析</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ms-hero-material-text-container -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-caption">
                            <div class="ms-hero-material-text-container">
                                <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                                    <h1 class="animated fadeInLeft animation-delay-15">活动内容</h1>
                                    <h2 class="animated fadeInLeft animation-delay-18">网络文化节</h2>
                                </header>
                                <ul class="ms-hero-material-list">
                                    <li class="">
                                        <div class="ms-list-icon animated zoomInUp animation-delay-18">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp">
                              <i class="glyphicon glyphicon-book"></i>
                            </span>
                                        </div>
                                        <div class="ms-list-text animated fadeInRight animation-delay-19">微电影大赛</div>
                                    </li>
                                    <li class="">
                                        <div class="ms-list-icon animated zoomInUp animation-delay-20">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-royal shadow-3dp">
                              <i class="glyphicon glyphicon-book"></i>
                            </span>
                                        </div>
                                        <div class="ms-list-text animated fadeInRight animation-delay-21">摄影大赛</div>
                                    </li>
                                    <li class="">
                                        <div class="ms-list-icon animated zoomInUp animation-delay-22">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp">
                              <i class="glyphicon glyphicon-book"></i>
                            </span>
                                        </div>
                                        <div class="ms-list-text animated fadeInRight animation-delay-23">网文大赛</div>
                                    </li>
                                </ul>
                                <div class="ms-hero-material-buttons text-right">
                                    <div class="ms-hero-material-buttons text-right">
                                        <a href="javascript:void(0);"
                                           class="button button-highlight button-pill  animated fadeInLeft animation-delay-24 mr-2"
                                           onclick="javascript:location.href='handin.html'">
                                            作品提交</a>
                                        <a href="#workin"
                                           class="button button-highlight button-pill  btn-success btn-raised animated fadeInRight animation-delay-24">
                                            作品赏析</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ms-hero-material-text-container -->
                        </div>
                    </div>

                    <div class="item">
                        <div class="carousel-caption">
                            <div class="ms-hero-material-text-container">
                                <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                                    <h1 class="animated fadeInLeft animation-delay-15">活动内容</h1>
                                    <h2 class="animated fadeInLeft animation-delay-18">计算机文化节</h2>
                                </header>
                                <ul class="ms-hero-material-list">
                                    <li class="">
                                        <div class="ms-list-icon animated zoomInUp animation-delay-18">
                                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp">
                                              <i class="glyphicon glyphicon-book"></i>
                                            </span>
                                        </div>
                                        <div class="ms-list-text animated fadeInRight animation-delay-19">HTML5页面设计大赛</div>
                                    </li>
                                    <li class="">
                                        <div class="ms-list-icon animated zoomInUp animation-delay-20">
                                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp">
                                            <i class="glyphicon glyphicon-book"></i>
                                            </span>
                                        </div>
                                        <div class="ms-list-text animated fadeInRight animation-delay-21">程序设计大赛</div>
                                    </li>
                                    <li class="">
                                        <div class="ms-list-icon animated zoomInUp animation-delay-22">
                                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp">
                                              <i class="glyphicon glyphicon-book"></i>
                                            </span>
                                        </div>
                                        <div class="ms-list-text animated fadeInRight animation-delay-23"></div>
                                    </li>
                                </ul>
                                <div class="ms-hero-material-buttons text-right">
                                    <a href="javascript:void(0);"
                                       class="button button-highlight button-pill  animated fadeInLeft animation-delay-24 mr-2"
                                       onclick="javascript:location.href='handin.html'">
                                        作品提交</a>
                                    <a href="#workin"
                                       class="button button-highlight button-pill  btn-success btn-raised animated fadeInRight animation-delay-24">
                                        作品赏析</a>
                                </div>
                            </div>
                            <!-- ms-hero-material-text-container -->
                        </div>
                    </div>
                    <div class="carousel-controls">
                        <!-- Controls -->

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-hero" data-slide-to="0"
                                class="animated fadeInUpBig animation-delay-27 active"></li>
                            <li data-target="#carousel-hero" data-slide-to="1"
                                class="animated fadeInUpBig animation-delay-28"></li>
                            <li data-target="#carousel-hero" data-slide-to="2"
                                class="animated fadeInUpBig animation-delay-29"></li>
                        </ol>
                    </div>
                </div>
                </br></br></br>
            </div>
        </div>
        <!-- 控制右边电脑 -->
        <div class="col-lg-6 col-md-5">
            <div class="ms-hero-img animated zoomInUp animation-delay-30">
                <img src="<?=\yii\helpers\Url::to('@web/images/mock-imac-material2.png')?>" alt="" class="img-responsive">
                <div id="carousel-hero-img" class="carousel carousel-fade slide" data-ride="carousel"
                     data-interval="3000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators carousel-indicators-hero-img">
                        <li data-target="#carousel-hero-img" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-hero-img" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-hero-img" data-slide-to="2" class="active"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="ms-hero-img-slider item">
                            <img src="<?=\yii\helpers\Url::to('@web/images/hero1.png')?>" alt="" class="img-responsive"></div>
                        <div class="ms-hero-img-slider item">
                            <img src="<?=\yii\helpers\Url::to('@web/images/hero3.png')?>" alt="" class="img-responsive"></div>
                        <div class="ms-hero-img-slider item active">
                            <img src="<?=\yii\helpers\Url::to('@web/images/hero2.png')?>" alt="" class="img-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>

<!--查看作品功能（下面的）-->
<?= DisWidget::widget() ?>

?>