<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $model app\models\DisUser */
/* @var $form ActiveForm */
$this->registerCssFile('@web/css/style2.css',['depends'=>['frontend\assets\AppAsset']]);
$this->registerCssFile('@web/css/form-elements.css',['depends'=>['frontend\assets\AppAsset']]);
//$this->registerCssFile('./css/style2.css');
?>
<div class="ms-hero ms-hero-material">
    <span class="ms-hero-bg"></span>
    <div class="container">
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <?php
                        if(Yii::$app->session->hasFlash('dis_success')){
                            echo \yii\bootstrap\Alert::widget([
                                'options' => [
                                    'class' => 'bg-primary', //这里是提示框的class
                                ],
                                'body' => Yii::$app->getSession()->getFlash('dis_success'), //消息体
                            ]);
                        }elseif(Yii::$app->session->hasFlash('dis_error'))
                        {
                            echo \yii\bootstrap\Alert::widget([
                                'options' => [
                                    'class' => 'bg-danger', //这里是提示框的class
                                ],
                                'body' => Yii::$app->getSession()->getFlash('dis_error'), //消息体
                            ]);
                        }
                        ?>
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>登录 | <a href="<?= \yii\helpers\Url::toRoute('user/signup') ?>">易班授权</a></h3>
                                    <p>请输入您的学号和本站密码:</p>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <?php $form = ActiveForm::begin(); ?>
                                        <?= $form->field($model, 'stu_num',['options'=>['class'=>'username_control']])->textInput(['placeholder'=>'学号...']) ?>
                                        <?= $form->field($model, 'password',['options'=>['class'=>'password_control']])->passwordInput(['placeholder'=>'密码...']); ?>
                                    <div style="float: right;">
                                        <i class="glyphicon glyphicon-hand-right"></i>
                                        &nbsp<a href="#<?//=\yii\helpers\Url::toRoute('user/find');?>" style="text-decoration:none;color: white;">忘记密码？</a>
                                    </div>
                                                                        <button type="submit" class="btn">登 录</button>

                                        <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

?>