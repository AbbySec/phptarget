<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DisSuggestion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dis-suggestion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'admin_id')->hiddenInput(['value'=>\Yii::$app->getUser()->getId()])->label(false) ?>

    <?= $form->field($model, 'works_id')->hiddenInput(['value'=>$wkid])->label(false) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '升级', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
?>