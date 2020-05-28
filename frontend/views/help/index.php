<?php
/* @var $this yii\web\View */
$this->registerCssFile('@web/css/style2.css',['depends'=>['frontend\assets\AppAsset']]);
$this->registerCssFile('@web/css/many.css',['depends'=>['frontend\assets\AppAsset']]);
use yii\helpers\Url;
?>
<div class="ms-hero ms-hero-material">
    <span class="ms-hero-bg"></span>
    <div class="container">
        <div class="top-content">
            <div class="show-div1" style="margin-left: 200px;">
                <article>
                    <h2 style="text-align: center;color: white">报名流程</h2>
                    <br>
                    <h4 style="color: white">
                        <br><br>报名流程一：进行易班注册
                        <br><br><img src="<?=Url::to('@web/images/baoming (1).jpg')?>" style="width: 30%;height: 30%">
                        <br><br>报名流程二：进行登录
                        <br><br><img src="<?=Url::to('@web/images/baoming (1).jpg')?>" style="width: 50%;height: 50%">
                        <br><br>报名流程三：再注册网站的用户信息
                        <br><br><img src="<?=Url::to('@web/images/baoming (3).jpg')?>" style="width: 50%;height: 50%">
                        <br><br>报名流程四：请填清自己的地址和电话哦~方便我们找到您
                        <br><br><img src="<?=Url::to('@web/images/baoming (4).jpg')?>" style="width: 50%;height: 50%">
                        <br><br>报名流程五：再次进行登录
                        <br><br><img src="<?=Url::to('@web/images/baoming (5).jpg')?>" style="width: 50%;height: 50%">
                        <br><br>报名流程六：然后就可以选择一个您感兴趣的项目进行报名
                        <br><br><img src="<?=Url::to('@web/images/baoming (6).jpg')?>" style="width: 50%;height: 50%">
                        <br><br>报名流程七：填写完比赛报名表，提交后即报名成功！
                        <br><br><img src="<?=Url::to('@web/images/baoming (7).jpg')?>" style="width: 50%;height: 50%">
                    </h4>
                    <br><br>
                </article>
            </div>
        </div>
    </div>
</div>
?>