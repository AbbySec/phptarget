<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DisWorksInfo */

$this->title = '更新作品信息: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dis Works Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>


<section class="wrapper">
    <section class="panel">
        <header class="panel-heading"><?= Html::encode($this->title) ?></header>
        <div class="panel-body">
            <div class="dis-works-info-update">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
        </div>
    </section>
</section>
?>