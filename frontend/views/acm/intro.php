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
                    <h1 style="text-align: center;color: white">2017年“软通动力杯”大学生程序设计竞赛</h1>
                    <br>
                    <h3 style="color: white">
                        <br><br>1.比赛分专业组及非专业组，计算机学院学生只能报名专业组，其他学院的学生可以自由选择组别。
                        <br><br>2.每个赛组分别设置约5道题目，参赛者在三小时内通过矿大ACM竞赛练习网站（<a href="http://219.219.62.238" target="_blank">219.219.62.238</a>）提交代码。
                        <br><br>3.参赛者必须在指定机房参加比赛，禁止替考帮考。
                        <br><br>4.各分组首先以做对的题目数量较多为先的规则排名，做对题目数相同的按用时较少为先的规则排名，在代码已判定正确的情况下，每有一次错误提交记录，增加20分钟的用时罚时。
                        <br><br>5.新注册同学务必使用学号作为ID进行注册,所有同学Nick Name填写班级+姓名。


                    </h3>
                    <br><br>
                    <h4>竞赛联系人：xxx</h4>
                    <h4>参赛要求：详见<a href="<?=\yii\helpers\Url::to('@web/files/acm.docx')?>">附件二</a></h4>
                    <h4>电话：xxxxxxxxxx</h4>
                </article>

            </div>
        </div>
    </div>
</div>
?>