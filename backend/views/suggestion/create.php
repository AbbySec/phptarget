<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DisSuggestion */
/* @var $wkid int*/
$this->title = '新建评价';
$this->params['breadcrumbs'][] = ['label' => 'Dis Suggestions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$tar_model=\Yii::$app->getSession()->get('tar_model');
?>
<section class="wrapper">
    <section class="panel">
        <header class="panel-heading"><?= Html::encode($this->title) ?></header>
        <div class="panel-body">
            <div class="dis-suggestion-create">
                <?= \yii\widgets\DetailView::widget([
                    'model' => $tar_model,
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
                        ['label'=>'申报人','value'=>$tar_model->getUser()->one()['username']],
                        //'teacher_id',
                        ['label'=>'指导教师','value'=>$tar_model->getTeacher()->one()['username']],
                        //'works_class1_id',
                        ['label'=>'比赛类型','value'=>$tar_model->getWorksClass1()->one()['name']],
                        //'works_class2_id',
                        ['label'=>'作品分类','value'=>$tar_model->getWorksClass2()->one()['name']],
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
                <?= $this->render('_form', [
                    'model' => $model,
                    'wkid'=>$wkid
                ]) ?>

            </div>
        </div>
    </section>
</section>
?>