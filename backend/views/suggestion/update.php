<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DisSuggestion */

$this->title = 'Update Dis Suggestion: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dis Suggestions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dis-suggestion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
?>