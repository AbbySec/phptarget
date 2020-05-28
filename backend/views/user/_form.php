<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\DisUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dis-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stu_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_id')->dropDownList(ArrayHelper::map($model->getAllSchool(),'id','name')) ?>

    <?= $form->field($model, 'major_id')->dropDownList(ArrayHelper::map($model->getAllMajor(),'id','name'))?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'university')->textInput(['maxlength' => true,'value'=>'中国矿业大学']) ?>

    <?= $form->field($model, 'grade')->dropDownList(['1'=>'大一','2'=>'大二','3'=>'大三','4'=>'大四',]) ?>

    <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '升级', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
?>