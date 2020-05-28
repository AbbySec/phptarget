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
                    <h1 style="text-align: center;color: white">摄影大赛</h1>
                    </br>
                    <h3 style="text-align: center;color: white">
                        旨在鼓励大学生用相机记录文明行为、精彩瞬间、感人时刻，定格青春风景，分享成长印象，积极参与格调高雅的校园文化活动，全面客观认识当代中国、看待外部世界，把培育和践行社会主义核心价值观生活化、具体化。
                    </h3>
                    </br></br>
                    <h4>承办单位：校新闻中心</h4>
                    <h4>参赛要求：详见<a href="<?=\yii\helpers\Url::to('@web/files/3.docx')?>">附件三</a></h4>
                    <h4>xx，联系方式：xxxxxxxx</h4>
                </article>

            </div>
        </div>
        <div class="show-div2">
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
        </div>
    </div>
</div>
?>