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
                    <h1 style="text-align: center;color: white">计算机网络文化知识竞赛简介</h1>
                    </br>
                    <h3 style="color: white">
                        <br><br>本次竞赛所有题目均为客观题，内容包含计算机知识、网络知识和网络安全相关知识等。考虑到本次竞赛的公平公正性，现将本次竞赛做如下规划：
                    </h3>
                        <br><br><h2>1.分组</h2>
                    <h3 style="color: white">
                        <br><br>专业组：计算机学院学生
                        <br><br>非专业组：非计算机学院学生
                    </h3>
                        <br><br><h2>2.参考文献</h2>
                    <h3 style="color: white">
                        <br><br>专业组：《计算机网络》第六版，谢希仁
                        <br><br>非专业组：《大学计算机基础》
                        <br><br>本次竞赛没有题库给参赛同学复习，但是组委会给定了本次竞赛的学习范围，参赛同学可以根据组委会给定的参考资料准备本次竞赛，最终以考试成绩作为评奖依据。
                    </h3>
                    <br><br>
                    <h4>承办单位：党委学生工作部</h4>
                    <h4>参赛要求：详见<a href="<?=\yii\helpers\Url::to('@web/files/wlwh.docx')?>">附件三</a></h4>
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