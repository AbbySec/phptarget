<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DisTeacher */

$this->title = '指导教师'.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dis Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="wrapper">
    <section class="panel">
        <header class="panel-heading"><?= Html::encode($this->title) ?></header>
        <div class="panel-body">
            <div class="dis-teacher-view">
                <p>
                    <?= Html::a('升级', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('删除', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'username',
                        'phone_num',
                        'business',
                        'position',
                        'qq_num',
                        'email:email',
                    ],
                ]) ?>

            </div>

        </div>
    </section>
</section>
?>