<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DisUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dis Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dis-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dis User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'stu_num',
            'username',
            'password',
            'school_id',
            // 'major_id',
            // 'address',
            // 'phone_num',
            // 'university',
            // 'grade',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
?>