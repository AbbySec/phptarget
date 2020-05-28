<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DisWorksInfo */

$this->title = 'Create Dis Works Info';
$this->params['breadcrumbs'][] = ['label' => 'Dis Works Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="wrapper">
    <section class="panel">
        <header class="panel-heading"><?= Html::encode($this->title) ?></header>
        <div class="panel-body">
            <div class="dis-works-info-create">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>
    </section>
</section>
?>