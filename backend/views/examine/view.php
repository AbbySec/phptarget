<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DisWorksInfo */

$this->title = '申报作品'.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dis Works Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="wrapper">
    <section class="panel">
        <header class="panel-heading"><?= Html::encode($this->title) ?></header>
        <div class="panel-body">
            <div class="dis-works-info-view">
                

                <p>
                    <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('删除', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => '你真的要删除这一项吗?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        ['label'=>'是否审核通过','value'=>function($model)
                        {
                            $status=$model['ispass'];
                            if($status==0)
                                return '未审核';
                            elseif($status==1)
                                return '已经通过';
                            elseif($status==2)
                                return '已经拒绝';
                            return '未定义状态';
                        }],
                        //'user_id',
                        ['label'=>'申报人','value'=>$model->getUser()->one()['username']],
                        //'teacher_id',
                        ['label'=>'指导教师','value'=>$model->getTeacher()->one()['username']],
                        //'works_class1_id',
                        ['label'=>'比赛类型','value'=>$model->getWorksClass1()->one()['name']],
                        //'works_class2_id',
                        ['label'=>'作品分类','value'=>$model->getWorksClass2()->one()['name']],
                        'works_intro:ntext',
                        'works_link',
                        'works_time:datetime',
                        'click_rate',
                        'comment_times:datetime',
                        'group_ids',
                        //'ispass',
                        'score',
                    ],
                ]) ?>

            </div>
        </div>
    </section>
</section>

?>