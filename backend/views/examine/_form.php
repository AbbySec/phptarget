<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$arr_class1=\backend\models\DisClass1::find()->all();
$arr_class2=\backend\models\DisClass2::find()->all();
$arr_teacher=\backend\models\DisTeacher::find()->all();
/* @var $this yii\web\View */
/* @var $model backend\models\DisWorksInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dis-works-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacher_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($arr_teacher,'id','username'),
        ['prompt'=>'请选择']
    ) ?>

    <?= $form->field($model, 'works_class1_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($arr_class1,'id','name')
        ,['prompt'=>'请选择']
        );
     ?>

    <?= $form->field($model, 'works_class2_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($arr_class2,'id','name')
        ,['prompt'=>'请选择']
    ) ?>

    <?= $form->field($model, 'works_intro')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'works_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'works_time')->textInput() ?>

    <?= $form->field($model, 'click_rate')->textInput() ?>

    <?= $form->field($model, 'comment_times')->textInput() ?>

    <?= $form->field($model, 'group_ids')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ispass')->dropDownList(['1'=>'已经通过','0'=>'未审核','已经拒绝']) ?>

    <?= $form->field($model, 'score')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
?>