<?php

/* @var $this yii\web\View */

$this->registerCssFile('@web/statics/assets/font-awesome/css/font-awesome.css', ['depends'=>'backend\assets\AppAsset']);
$this->registerCssFile('@web/statics/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css', ['depends'=>'backend\assets\AppAsset']);
$this->registerCssFile('@web/statics/css/owl.carousel.css', ['depends'=>'backend\assets\AppAsset']);

$this->registerJsFile('@web/statics/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js', ['depends'=>'backend\assets\AppAsset']);
$this->registerJsFile('@web/statics/js/owl.carousel.js', ['depends'=>'backend\assets\AppAsset']);
$this->registerJsFile('@web/statics/js/jquery.customSelect.min.js', ['depends'=>'backend\assets\AppAsset']);
$this->registerJsFile('@web/statics/js/respond.min.js', ['depends'=>'backend\assets\AppAsset']);
$this->registerJsFile('@web/statics/js/sparkline-chart.js', ['depends'=>'backend\assets\AppAsset']);
$this->registerJsFile('@web/statics/js/easy-pie-chart.js', ['depends'=>'backend\assets\AppAsset']);
$this->registerJsFile('@web/statics/js/count.js', ['depends'=>'backend\assets\AppAsset']);

$this->registerJs("
      //owl carousel

      $(document).ready(function() {
          $(\"#owl-demo\").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
");
$this->title = 'TESTCMS';

?>
<section class="wrapper">
    <?php
    if( Yii::$app->getSession()->hasFlash('error') ) {
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'bg-success', //这里是提示框的class
            ],
            'body' => Yii::$app->getSession()->getFlash('error'), //消息体
        ]);
    }
    if( Yii::$app->getSession()->hasFlash('success') ) {
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'bg-success', //这里是提示框的class
            ],
            'body' => Yii::$app->getSession()->getFlash('success'), //消息体
        ]);
    }
    ?>
    <!--state overview start-->
    <div class="row state-overview">
        <div class="col-lg-4 col-sm-6">
            <section class="panel">
                <div class="symbol terques">
                    <i class="fa fa-user"></i>
                </div>
                <div class="value">
                    <h1 class="count1" id="count-1">
                        <?=$usernum;?>
                    </h1>
                    <p>用户数</p>
                </div>
            </section>
        </div>
        <div class="col-lg-4 col-sm-6">
            <section class="panel">
                <div class="symbol red">
                    <i class="fa fa-tags"></i>
                </div>
                <div class="value">
                    <h1 class=" count2" id="count-2">
                        <?=$worknum;?>
                    </h1>
                    <p>作品数</p>
                </div>
            </section>
        </div>
        <div class="col-lg-4 col-sm-6">
            <section class="panel">
                <div class="symbol blue">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="value">
                    <h1 class=" count3" id="count-3">
                        <?=$adminnum;?>
                    </h1>
                    <p>访问量</p>
                </div>
            </section>
        </div>
    </div>
    <!--state overview end-->



    <div class="row">
        <div class="col-lg-12">
            <!--features carousel start-->
            <section class="panel">
                <div class="flat-carousal">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item">
                            <h1>Flatlab is new model of admin dashboard for happy use</h1>
                            <div class="text-center">
                                <a href="javascript:;" class="view-all">View All</a>
                            </div>
                        </div>
                        <div class="item">
                            <h1>Fully responsive and build with Bootstrap 3.0</h1>
                            <div class="text-center">
                                <a href="javascript:;" class="view-all">View All</a>
                            </div>
                        </div>
                        <div class="item">
                            <h1>Responsive Frontend is free if you get this.</h1>
                            <div class="text-center">
                                <a href="javascript:;" class="view-all">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="ft-link">
                        <li class="active">
                            <a href="javascript:;">
                                <i class="fa fa-bars"></i>
                                Sales
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class=" fa fa-calendar-o"></i>
                                promo
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class=" fa fa-camera"></i>
                                photo
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class=" fa fa-circle"></i>
                                other
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <!--features carousel end-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <!--pie chart start-->
                    <section class="panel">
                        <div class="panel-body">
                            <div class="chart">
                                <div id="pie-chart" ></div>
                            </div>
                        </div>
                        <footer class="pie-foot">
                            剩余空间: <?=intval(disk_free_space('/')/1073741824);?>GB
                        </footer>
                    </section>
                    <script>var index_pie=[<?=intval(disk_total_space('/')/1073741824);?>,<?=intval(disk_free_space('/')/1073741824);?>];</script>
                    <!--pie chart start-->
                </div>
                <div class="col-xs-12 col-sm-3">
                    <!--follower start-->
                    <section class="panel">
                        <div class="follower">
                            <div class="panel-body">
                                <h4><?=Yii::$app->user->identity['username']?></h4>
                                <div class="follow-ava">
                                    <img src="<?=Yii::getAlias('@web')?>/statics/img/follower-avatar.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <footer class="follower-foot">
                            <ul>
                                <li>
                                    <h5>管理员</h5>
                                    <p>角色</p>
                                </li>
                                <li>
                                    <h5>Admin</h5>
                                    <p>权限</p>
                                </li>
                            </ul>
                        </footer>
                    </section>
                    <!--follower end-->
                </div>
                <div class="col-xs-12 col-sm-6">
                    <!--weather statement start-->
                    <section class="panel">
                        <div class="weather-bg">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <i class="fa fa-cloud"></i>
                                        徐州
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="degree" id="degree">
                                            <?=$weather['now']['temperature'].'°';?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <footer class="weather-category">
                            <ul>
                                <li class="active">
                                    <h5>天气</h5>
                                    <?=$weather['now']['text'];?>
                                </li>
                                <li>
                                    <h5>更新时间</h5>
                                    <?=substr($weather['last_update'],0,10);?> <?=substr($weather['last_update'],11,8);?>
                                </li>
                            </ul>
                        </footer>

                    </section>
                    <!--weather statement end-->
                </div>
            </div>
        </div>
    </div>

</section>
?>