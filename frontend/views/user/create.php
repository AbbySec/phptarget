<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DisUser */

$this->title = 'Create Dis User';
$this->params['breadcrumbs'][] = ['label' => 'Dis Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dis-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
?>