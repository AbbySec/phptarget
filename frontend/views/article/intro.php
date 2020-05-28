<?php
$this->registerCssFile('@web/css/style2.css',['depends'=>['frontend\assets\AppAsset']]);
$this->registerCssFile('@web/css/many.css',['depends'=>['frontend\assets\AppAsset']]);
?>
<div class="ms-hero ms-hero-material">
    <span class="ms-hero-bg"></span>
    <div class="container">
        <?= \common\widgets\Alert::widget() ?>

        <div class="top-content">
            <div class="show-div1">
                <article>
                    <h1 style="text-align: center;color: white">网文大赛简介</h1>
                    </br>
                    <h3 style="text-align: center;color: white">
                        以传承和弘扬社会主义核心价值观为导向，激发大学生网络创作热情，抒发爱国情怀，树立报国志向，解析社会热点，倡导网络文明，分享成长故事，彰显阳光品质。
                    </h3>
                    </br></br>
                    <h4>承办单位：党委学生工作部</h4>
                    <h4>参赛要求：详见<a href="<?=\yii\helpers\Url::to('@web/files/4.docx')?>">附件四</a></h4>
                    <h4>xx，联系方式：xxxxxxxxxxx</h4>
                </article>

            </div>
        </div>
<!--        <div class="show-div2">-->
<!--            <div class="show-div3">-->
<!--                <h3 style="text-align: center;color: white">其他作品</h3>-->
<!--                <ul class="show-ul">-->
<!--                    <li>-->
<!--                        <span class="glyphicon"></span>-->
<!--                        <a href="#" id="show">香水有毒</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <span class="glyphicon"></span>-->
<!--                        <a href="#" id="show">老鼠爱大米</a>-->
<!--                    </li>-->
<!--                    <li><span class="glyphicon"></span>-->
<!--                        <a href="#" id="show">东风破</a>-->
<!--                    </li>-->
<!--                    <li><span class="glyphicon"></span>-->
<!--                        <a href="#" id="show">王妃</a>-->
<!--                    </li>-->
<!--                    <li><span class="glyphicon"></span>-->
<!--                        <a href="#" id="show">这就是爱</a>-->
<!--                    </li>-->
<!--                    <li><span class="glyphicon"></span>-->
<!--                        <a href="#" id="show">修炼爱情</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>
?>