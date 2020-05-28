<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DisteacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '指导教师';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="wrapper">
    <section class="panel">
        <header class="panel-heading"><?= Html::encode($this->title) ?></header>
        <div class="panel-body">
            <div class="dis-teacher-index">
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('新建指导教师', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'username',
                        'phone_num',
                        'business',
                        'position',
                        // 'qq_num',
                        // 'email:email',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>
        </div>
    </section>
</section>

?>