<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DisTeacher */

$this->title = '新建指导教师';
$this->params['breadcrumbs'][] = ['label' => 'Dis Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="wrapper">
    <section class="panel">
        <header class="panel-heading"><?= Html::encode($this->title) ?></header>
        <div class="panel-body">
            <div class="dis-teacher-create">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>
    </section>
</section>

?>