<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DisUser */

$this->title = '升级用户: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dis Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<section class="wrapper">
    <section class="panel">
        <header class="panel-heading"><?= Html::encode($this->title) ?></header>
        <div class="panel-body">
            <div class="dis-user-update">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>
    </section>
</section>
?>