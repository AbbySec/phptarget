<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\DisWorksInfo;
use \yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $title string*/
/* @var $id int*/
$this->title = $title.'审核';
$this->params['breadcrumbs'][] = $this->title;

?>
<section class="wrapper">
    <?php
    if( Yii::$app->getSession()->hasFlash('success') ) {
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'bg-success', //这里是提示框的class
            ],
            'body' => Yii::$app->getSession()->getFlash('success'), //消息体
        ]);
    }
    ?>
    <section class="panel">
        <header class="panel-heading"><?= Html::encode($this->title) ?></header>
        <div class="panel-body">
            <div class="dis-works-info-index">
                <p>
                    <?= Html::a('导出作品表', ['export?id='.$id], ['class' => 'btn btn-info']) ?>
                </p>
                <p>
                    <?//=?>
                </p>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'label'=>'比赛',
                            'format'=>'raw',
                            'value' => function($data){
                                /* @var $data DisWorksInfo*/
                                return $data->getWorksClass1()->one()['name'];
                            }
                        ],
                        [
                            'label'=>'类型',
                            'format'=>'raw',
                            'value' => function($data){
                                /* @var $data DisWorksInfo*/
                                return $data->getWorksClass2()->one()['name'];
                            }
                        ],
                        [
                            'label'=>'申报人',
                            'format'=>'raw',
                            'value' => function($data){
                                /* @var $data DisWorksInfo*/
                                return $data->getUser()->one()['username'];
                            }
                        ],
                        [
                            'label'=>'指导老师',
                            'format'=>'raw',
                            'value' => function($data){
                                /* @var $data DisWorksInfo*/
                                return $data->getTeacher()->one()['username'];
                            }
                        ],
                        [
                            'label'=>'审核状态',
                            'format'=>'raw',
                            'value' => function($data){
                                /* @var $data DisWorksInfo*/
                                switch($data['ispass'])
                                {
                                    case 0:
                                        $url_pass=\yii\helpers\Url::toRoute('/examine/pass').'?id='.$data['id'];
                                        $url_diney = \yii\helpers\Url::toRoute('/examine/deny').'?id='.$data['id'];
                                        return Html::tag('div',
                                            Html::a('通过', $url_pass, ['title' => '审核','class' => 'btn btn-success btn-xs']).' '.
                                            Html::a('拒绝', $url_diney, ['title' => '审核','class' => 'btn btn-danger btn-xs'])
                                        );
                                        break;
                                    case 1:
                                        return Html::tag('span','已经通过',['class'=>'bg-success']);
                                        break;
                                    case 2:
                                        return Html::tag('span','已经拒绝',['class'=>'bg-danger']);
                                        break;
                                    default:
                                        return 'error';
                                }
                            },
                            'contentOptions'=>function($data){
                                switch($data['ispass'])
                                {
                                    case 0:
                                        return ['class'=>''];
                                        break;
                                    case 1:
                                        return ['class'=>'bg-success'];
                                        break;
                                    case 2:
                                        return ['class'=>'bg-danger'];
                                        break;
                                    default:
                                        return 'error';
                                }

                            }
                        ],
                        [
                            'label'=>'评分',
                            'format'=>'raw',
                            'value'=> /**
                             * @param $data
                             * @return string
                             */
                                function($data){
                                return \kartik\rating\StarRating::widget([
                                    'name' => 'rating_21',
                                    'value'=>1,
                                    'pluginOptions' => [
                                        'showClear' => false,
                                        'min' => 0,
                                        'max' => 4,
                                        'stars' => 4,
                                        'step' => 1,
                                        'size' => 'xs',
                                        'starCaptions' => [
                                            1=>'优秀奖',
                                            2=> '三等奖',
                                            3 => '二等奖',
                                            4 => '一等奖'
                                        ],
                                        'starCaptionClasses' => [
                                            1 => 'label label-danger',
                                            2 => 'label label-warning',
                                            3 => 'label label-info',
                                            4 => 'label label-success',
                                        ],
                                        'theme' => 'krajee-svg',
                                        'filledStar' => '<span class="krajee-icon krajee-icon-star"></span>',
                                        'emptyStar' => '<span class="krajee-icon krajee-icon-star"></span>',
                                    ],
                                ]);
                            }
                        ]
                        ,
                        [
                            'label'=>'是否评价',
                            'format'=>'raw',
                            'value' => function($data){
                                /* @var $data DisWorksInfo*/
                                $suggestions=$data->getDisSuggestions()->count();
                                \Yii::$app->getSession()->set('tar_model',$data);
                                if($suggestions>0)
                                {
                                    return Html::tag('span','已有'.$suggestions.'人评价').' '
                                        .Html::a('继续评价', Url::toRoute("suggestion/create?wkid={$data['id']}"),
                                        ['title' => '继续评价','class' => 'btn btn-warning btn-xs']).' '
                                        .Html::a('查看已有评价',Url::toRoute("suggestion/index?wkid={$data['id']}"),['title' => '去评价','class' => 'btn btn-info btn-xs']);
                                }else
                                {
                                    return Html::tag('span','未评价').' '.Html::a('去评价', Url::toRoute("suggestion/create?wkid={$data['id']}"), ['title' => '去评价','class' => 'btn btn-warning btn-xs']);
                                }
                            },
                            'contentOptions'=>function($data){
                                /* @var $data DisWorksInfo*/
                                $suggestions=$data->getDisSuggestions()->count();
                                if($suggestions>0)
                                    return ['class'=>'bg-success'];
                                else
                                    return ['class'=>'bg-warning'];
                            }
                        ],
                        [
                            'class' => 'yii\grid\ActionColumn',
                        ],
                    ],
                ]);?>
            </div>
        </div>
    </section>
</section>
?>