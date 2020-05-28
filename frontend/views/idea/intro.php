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
                    <h1 style="text-align: center;color: white">校园文化创意大赛简介</h1>
                    </br>
                    <h3 style="text-align: center;color: white">
                        以优秀传统文化元素为基础，校园生活为场景，创新文化艺术为主旨，围绕定格青春记忆，引领校园文明；践行核心价值，传承中华美德；弘扬中国精神，抒写矿大情怀等主题内容，引导大学生融合新理念，运用新技术，创作富有矿大特色，贴近学校实际，在思想性、艺术性、实践性、引领性、技术性等方面具有较高的水平，能体现正确价值导向，引发情感共鸣的文艺作品、纪念品、文化创意和活动方案。包括动漫、公益广告、原创歌曲、校园景观设计方案、学校特色文化产品设计、学校招生宣传及形象宣传创意方案、校园文化活动策划书等。
                    </h3>
                    </br></br>
                    <h4>承办单位：党委宣传部</h4>
                    <h4>参赛要求：详见<a href="<?=\yii\helpers\Url::to('@web/files/5.docx')?>">附件五</a></h4>
                    <h4>xx，联系方式：xxxxxxxxxxx</h4>
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