<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DisUser */

$this->title = '新建用户';
$this->params['breadcrumbs'][] = ['label' => 'Dis Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="wrapper">
    <section class="panel">
        <header class="panel-heading"><?= Html::encode($this->title) ?></header>
        <div class="panel-body">
            <div class="dis-user-create">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>
    </section>
</section>
?>