<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
$this->registerCssFile('@web/css/style2.css',['depends'=>['frontend\assets\AppAsset']]);
$this->registerCssFile('@web/css/many.css',['depends'=>['frontend\assets\AppAsset']]);
?>
<div class="ms-hero ms-hero-material">
    <span class="ms-hero-bg"></span>
    <div class="container">
        <?= \common\widgets\Alert::widget() ?>

        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <?php
                    if(Yii::$app->session->hasFlash('acmuploadsuccess')){
                        echo \yii\bootstrap\Alert::widget([
                            'options' => [
                                'class' => 'bg-primary', //这里是提示框的class
                            ],
                            'body' => Yii::$app->getSession()->getFlash('acmuploadsuccess'), //消息体
                        ]);
                    }elseif(Yii::$app->session->hasFlash('error'))
                    {
                        echo \yii\bootstrap\Alert::widget([
                            'options' => [
                                'class' => 'bg-danger', //这里是提示框的class
                            ],
                            'body' => Yii::$app->getSession()->getFlash('error'), //消息体
                        ]);
                    }
                    ?>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top-register">
                                <div class="form-top-left-register">
                                    <h3>2017年大学生程序设计竞赛报名</h3>
                                    <p>请按照下列步骤进行填写:</p>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="<?= Url::toRoute('acm/upload')?>" method="post" class="registration-form">
<!--                                    <fieldset>-->
<!--                                        <div class="form-top">-->
<!--                                            <div class="form-top-left">-->
<!--                                                <h3>Step 1 / 3</h3>-->
<!--                                                <p>指导教师信息</p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="form-bottom">-->
<!--                                            <div class="form-group">-->
<!--                                                <input type="text" name="DisWorksInfo[teacher][username]" placeholder="老师姓名..." class="form-yourname form-control change" id="yourname">-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <input type="text" name="DisWorksInfo[teacher][phone_num]" placeholder="老师电话..." class="form-your-tel form-control change" id="form-your-tel" >-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <input type="text" name="DisWorksInfo[teacher][business]" placeholder="老师所属职务..." class="form-your-tel form-control change" id="form-your-tel" >-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <input type="text" name="DisWorksInfo[teacher][position]" placeholder="老师职称..." class="form-your-tel form-control change" id="form-your-tel" >-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <input type="text" name="DisWorksInfo[teacher][email]" placeholder="老师邮箱..." class="form-your-tel form-control change" id="form-your-tel" >-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <input type="text" name="DisWorksInfo[teacher][qq_num]" placeholder="老师QQ..." class="form-your-tel form-control change" id="form-your-tel" >-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </fieldset>-->
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Step 1 / 1</h3>
                                                <p>类别信息</p>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <div class="register-div2">
<!--                                                <label  for="form-your-school">&nbsp&nbsp&nbsp作品名：</label>-->
<!--                                                <input type="hidden" name="DisWorksInfo[name]" placeholder="语言类型" class="form-yourname form-control change" id="yourname" value="比赛报名"/>-->
                                                <label id="movie-lable">参赛语言</label>
                                                <select id="disworksinfo[name]" class="form-control" name="DisWorksInfo[name]">
                                                    <option value="C&C++">C/C++</option>
                                                    <option value="Java">Java</option>
                                                </select>
                                            </div>
                                            <label id="movie-lable">报名类别</label>
                                                <?=Html::activeDropDownList($model, 'works_class2_id', ArrayHelper::map(\backend\models\DisClass2::find()->where(['class1_id'=>'9'])->all(),'id', 'name'), ['class'=>"form-control"]);?>
<!--                                            <div class="form-group">-->
<!--                                                <input type="text" name="DisWorksInfo[works_link]" placeholder="网络链接..." class="form-yourname form-control change" id="yourname">-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <input type="text" name="DisWorksInfo[click_rate]" placeholder="点击率..." class="form-yourname form-control change" id="yourname">-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <input type="text" name="DisWorksInfo[comment_times]" placeholder="评论量..." class="form-yourname form-control change" id="yourname">-->
<!--                                            </div>-->
                                        </div>
                                    </fieldset>

<!--                                    <fieldset>-->
<!--                                        <div class="form-top">-->
<!--                                            <div class="form-top-left">-->
<!--                                                <h3>Step 3 / 3</h3>-->
<!--                                                <p>作品简介：</p>-->
<!--                                            </div>-->
<!--                                            <div class="form-top-right">-->
<!--                                                <i class="fa fa-key"></i>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="form-bottom">-->
<!--                                            <div class="form-group">-->
<!--                                                <label id="movie-lable">您的作品信息简介(不超过300字)</label>-->
<!--                                                <textarea class="form-control" rows="6" id="textarea-movie" name="DisWorksInfo[works_intro]">-->
<!--                                                </textarea>-->
<!--                                                </br>-->
<!--                                                <button type="submit" class="btn-sign-up">提交</button>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </fieldset>-->
                                        <fieldset>
                                            <div class="form-bottom">
                                                <div class="form-group">
                                                    <label id="movie-lable">请仔细核对申报的信息</label>
                                                    <br>
                                                    <button type="submit" class="btn-sign-up">提交</button>
                                                </div>
                                            </div>
                                        </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>
?>