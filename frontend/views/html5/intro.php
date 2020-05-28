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
                    <h1 style="text-align: center;color: white">Html5大赛简介</h1>
                    </br>
                    <h3 style="color: white">
                        <br><br>1、靓丽炫酷。要求作品能够选取一定具有代表性和美观的图片、具有华丽的动画效果。
                        <br><br>2.排版布局。要求排版无错位、字体清晰，尽可能高速有效传递信息。
                        <br><br>3.场景适用。要求所设计的场景能够适应光影校园、青春毕业季、七彩假期、学校校庆、军训独家回忆等场景。
                        <br><br>4.元素选取。可结合设计的场景恰当使用多元化元素。包括图片、文本（含酷文本）、形状、输入框、按钮、视频、电话、音乐等组件。
                        <br><br>5.内容数量。参赛作品需要三至十页。
                        <br><br>6.参赛作品必须为原创，未参与过其他竞赛并未被商用，主办方拥有对参赛作品进行宣传推广、展览出版的权利。

                    </h3>
                    </br></br>
                    <h4>承办单位：党委学生工作部</h4>
                    <h4>参赛要求：详见<a href="<?=\yii\helpers\Url::to('@web/files/h5.docx')?>">附件一</a></h4>
                    <h4>联系人：xx，联系方式：xxxxxxxx。</h4>
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