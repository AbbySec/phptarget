<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DisUser */

$this->title = '学生'.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dis Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="wrapper">
    <section class="panel">
        <header class="panel-heading"><?= Html::encode($this->title) ?></header>
        <div class="panel-body">
            <div class="dis-user-view">
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
                        'stu_num',
                        'username',
                        //'school_id',
                        [
                            'label'=>'学院',
                            'format'=>'raw',
                            'value'=>function($model){
                                /* @var $model \backend\models\DisUser*/
                                return $model->getSchool()->one()['name'];
                            }
                        ],
                        //'major_id',
                        [
                            'label'=>'专业',
                            'format'=>'raw',
                            'value'=>function($model){
                                /* @var $model \backend\models\DisUser*/
                                return $model->getMajor()->one()['name'];
                            }
                        ],
                        'address',
                        'phone_num',
                        'university',
                        'grade',
                        'status',
                        'created_at',
                        'updated_at',
                    ],
                ]) ?>

            </div>
        </div>
    </section>
</section>
?>