<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Alert;
use frontend\models\DisSchool;
use frontend\models\DisMajor;

/* @var $this yii\web\View */
/* @var $model frontend\models\DisUser */
/* @var $form ActiveForm */
/* @var $yiban_info array*/
$this->registerCssFile('@web/css/style2.css',['depends'=>['frontend\assets\AppAsset']]);
$this->registerCssFile('@web/css/many.css',['depends'=>['frontend\assets\AppAsset']]);
$this->registerJsFile('@web/static/index.js',['depends'=>['frontend\assets\AppAsset']]);
?>
<!-- 注册主页面 -->
<div class="ms-hero ms-hero-material">
    <span class="ms-hero-bg"></span>
    <div class="container">
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <?php
                        if(Yii::$app->session->hasFlash('reg_success')){
                            echo \yii\bootstrap\Alert::widget([
                                'options' => [
                                    'class' => 'bg-primary', //这里是提示框的class
                                ],
                                'body' => Yii::$app->getSession()->getFlash('reg_success'), //消息体
                            ]);
                        }elseif(Yii::$app->session->hasFlash('reg_error'))
                        {
                            echo \yii\bootstrap\Alert::widget([
                                'options' => [
                                    'class' => 'bg-danger', //这里是提示框的class
                                ],
                                'body' => Yii::$app->getSession()->getFlash('reg_error'), //消息体
                            ]);
                        }
                        ?>
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top-register">
                                <div class="form-top-left-register">
                                    <h3>注册 | <a href="<?= \yii\helpers\Url::toRoute('user/login')?>">登录</a></h3>
                                    <p>请继续完善以下信息（*为必填）</p>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <?php $form = ActiveForm::begin([
                                    'options'=>['class'=>'registration-form']
                                ]); ?>
<!--                                    <fieldset>-->
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Step 1 / 3</h3>
                                                <p>您的基本信息:</p>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>

                                        <div class="form-bottom">
                                            <div class="form-group">
                                                <input type="text" name="DisUser[username]" placeholder="*您的姓名..." class="form-yourname form-control change" id="yourname" readonly value="<?=$yiban_info['yb_realname']?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisUser[stu_num]" placeholder="*您的学号..." class="form-last-name form-control change" id="form-student-number" readonly value="<?=$yiban_info['yb_studentid']?>">
                                            </div>
                                            <div>
                                                <label  for="form-your-school">&nbsp;&nbsp;&nbsp;您的学院：</label>
                                                <?= $form->field($model, 'school_id',['options'=>['class'=>'']])->dropDownList(
                                                    ArrayHelper::map(DisSchool::find()->all(),'id','name'),
                                                    ['prompt'=>'请选择','class'=>'register-select']) ?>
                                            </div>
                                            <div>
                                                <label  for="form-your-grade">&nbsp;&nbsp;&nbsp;您的年级：</label>
                                                <?= $form->field($model, 'grade',['options'=>['class'=>'']])->dropDownList([
                                                        '1'=>'大一',
                                                        '2'=>'大二',
                                                        '3'=>'大三',
                                                        '4'=>'大四',],
                                                    ['prompt'=>'请选择','class'=>'register-select']); ?>


                                            <div>
                                                <label  for="form-your-major">&nbsp;&nbsp;&nbsp;您的专业：</label>
                                                <?= $form->field($model, 'major_id',['options'=>['class'=>'']])->dropDownList(
                                                    ArrayHelper::map(DisMajor::find()->all(),'id','name'),
                                                    ['prompt'=>'请选择','class'=>'register-select']) ?>
                                            </div>
                                            </div>
                                        </div>
<!--                                    </fieldset>-->

<!--                                    <fieldset>-->
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Step 2 / 3</h3>
                                                <p>您的本站账户密码：</p>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-key"></i>
                                            </div>
                                        </div>

                                        <div class="form-bottom">
                                            <div class="form-group">
                                                <input type="password" name="DisUser[password]" placeholder="*密码..." class="form-password form-control" id="form-password" style="font-weight: 300;font-size: 20px;color: white;">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="DisUser[repassword]" placeholder="*确认密码..."
                                                       class="form-repeat-password form-control" id="form-repeat-password" style="font-weight: 300;font-size: 20px;color: white;">
                                            </div>
                                        </div>
<!--                                    </fieldset>-->

<!--                                    <fieldset>-->
                                        <div class="form-top">
                                            <div class="form-top-left">
                                                <h3>Step 3 / 3</h3>
                                                <p>您的其他信息</p>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <div class="form-group">
                                                <input type="text" name="DisUser[university]" placeholder="*您的学校..." class="form-your-university form-control" id="form-your-university" style="font-weight: 300;font-size: 20px;color: white;" readonly value="<?=$yiban_info['yb_schoolname']?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisUser[address]" placeholder="*您的地址..." class="form-your-address form-control" id="form-your-address" style="font-weight: 300;font-size: 20px;color: white;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="DisUser[phone_num]" placeholder="*您的电话..." class="form-your-tel form-control" id="form-your-tel" style="font-weight: 300;font-size: 20px;color: white;">
                                            </div>
                                            <button type="submit" class="btn-sign-up">完成注册</button>
                                        </div>
<!--                                    </fieldset>-->

                                <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div><!-- user-signup -->
?>