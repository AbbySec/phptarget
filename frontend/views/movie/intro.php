<?php
$this->registerCssFile('@web/css/style2.css',['depends'=>['frontend\assets\AppAsset']]);
$this->registerCssFile('@web/css/many.css',['depends'=>['frontend\assets\AppAsset']]);
?>
<!--作品集 -->
<div class="ms-hero ms-hero-material">
    <span class="ms-hero-bg"></span>
    <div class="container">
        <?= \common\widgets\Alert::widget() ?>
        <div class="top-content">
            <div class="show-div1">
                <article>
                    <h1 style="text-align: center;color: white">微电影大赛简介</h1>
                    </br>
                    <h3 style="text-align: center;color: white">
                        旨在鼓励大学生透过镜头，通过视频来呈现大学学习、生活中的精彩故事，展示青年学生的青春风采和精神风貌。通过作品的网络传播，弘扬健康向上的网络文化，传递青春正能量，营造网络文明风
                    </h3>
                    </br></br>
                    <h4>承办单位：党委学生工作部</h4>
                    <h4>参赛要求：详见<a href="<?=\yii\helpers\Url::to('@web/files/2.docx')?>">附件二</a></h4>
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