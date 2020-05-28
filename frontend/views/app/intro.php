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
                    <h1 style="text-align: center;color: white">易班轻应用设计大赛简介</h1>
                    </br>
                    <h3 style="color: white">
                        <br><br>1.作品基于易班网“轻应用快搭”模板开发或者自由拼装均可，须符合易班网“轻应用快搭”版块的内容规范。
                        <br><br>2.作品要贴近大学学习、生活、工作，能为广大师生提供更加便捷化、人性化的项目服务，设计需简单、明确的突出应用的核心功能。
                        <br><br>3.作品的评审分为初审和复审。初审审查是否有抄袭作品，一经发现取消其参赛资格，并通报其所在学院。初审通过的作品可参加复审，复审采用现场答辩的方式。
                        <br><br>4.参赛作品必须为原创，未参与过其他竞赛，主办和承办方拥有对参赛作品进行宣传推广、展览出版的权利。作品内容中不允许放置任何盈利形式的第三方宣传广告，也不可出现移动客户端的下载广告。
                    </h3>
                    </br></br>
                    <h4>承办单位：党委学生工作部</h4>
                    <h4>参赛要求：详见<a href="<?=\yii\helpers\Url::to('@web/files/7.docx')?>">附件七</a></h4>
                    <h4>联系人：xx，联系方式：xxxxxxxx</h4>
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