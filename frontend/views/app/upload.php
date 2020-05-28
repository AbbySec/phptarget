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
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top-register">
                                <div class="form-top-left-register">
                                    <h3>易班轻应用作品提交 | 已经提交？<a href="<?= \yii\helpers\Url::toRoute('app/print') ?>" target="_blank">打印报名表</a></h3>
                                    <p>请按照下列步骤进行填写:</p>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="<?= Url::toRoute('app/upload')?>" method="post" class="registration-form">
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Step 1 / 3</h3>
                                                <p>指导教师信息</p>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[teacher][username]" placeholder="老师姓名..." class="form-yourname form-control change" id="yourname">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[teacher][phone_num]" placeholder="老师电话..." class="form-your-tel form-control change" id="form-your-tel" >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[teacher][business]" placeholder="老师所属职务..." class="form-your-tel form-control change" id="form-your-tel" >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[teacher][position]" placeholder="老师职称..." class="form-your-tel form-control change" id="form-your-tel" >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[teacher][email]" placeholder="老师邮箱..." class="form-your-tel form-control change" id="form-your-tel" >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisWorksInfo[teacher][qq_num]" placeholder="老师QQ..." class="form-your-tel form-control change" id="form-your-tel" >
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Step 2 / 3</h3>
                                                <p>作品信息:</p>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <div class="register-div2">
                                                <!--                                                <label  for="form-your-school">&nbsp&nbsp&nbsp作品名：</label>-->
                                                <input type="text" name="DisWorksInfo[name]" placeholder="作品名..." class="form-yourname form-control change" id="yourname"/>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Step 3 / 3</h3>
                                                <p>作品简介：</p>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-key"></i>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <div class="form-group">
                                                <label id="movie-lable">您的作品信息简介(不超过300字)</label>
                                                <textarea class="form-control" rows="6" id="textarea-movie" name="DisWorksInfo[works_intro]"></textarea>
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