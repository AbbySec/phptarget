<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DisuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '注册人员管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="wrapper">
    <?php
    if( Yii::$app->getSession()->hasFlash('user_success') )
    {
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'bg-success',
            ],
            'body' => Yii::$app->getSession()->getFlash('user_success'), //消息体
        ]);
    }elseif(Yii::$app->getSession()->hasFlash('user_error'))
    {
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'bg-danger',
            ],
            'body' => Yii::$app->getSession()->getFlash('user_error'), //消息体
        ]);
    }
    ?>
    <section class="panel">
        <header class="panel-heading"><?= Html::encode($this->title) ?></header>
        <div class="panel-body">
            <div class="dis-user-index">
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('新建用户', ['create'], ['class' => 'btn btn-success']) ?>
                    <?= Html::a('导入用户表', \yii\helpers\Url::toRoute('upload/index?route=user/import'), ['class' => 'btn btn-warning']) ?>
                    <?= Html::a('导出用户表', ['export'], ['class' => 'btn btn-info']) ?>
                </p>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'stu_num',
                        'username',
                        // 'address',
                        // 'phone_num',
                        // 'university',
                        // 'grade',
                        // 'auth_key',
                        // 'password_hash',
                        // 'password_reset_token',
                        // 'status',
                        // 'created_at',
                        // 'updated_at',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>

        </div>
    </section>
</section>
?>