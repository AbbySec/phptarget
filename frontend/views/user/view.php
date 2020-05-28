<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DisUser */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dis Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dis-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'password',
            'school_id',
            'major_id',
            'address',
            'phone_num',
            'university',
            'grade',
        ],
    ]) ?>

</div>
?>