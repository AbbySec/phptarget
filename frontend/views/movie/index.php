<?php
/* @var $this yii\web\View */
use frontend\components\WorkWidget;
use frontend\components\DisWidget;
use yii\helpers\HtmlPurifier;
function strcut($str){
    if(mb_strlen($str)>80){
        $strr = mb_strcut($str,0,80);
        $strr.='...........';
        return $strr;
    }else{
        return $str;
    }
}
$this->registerCssFile('@web/css/style2.css',['depends'=>['frontend\assets\AppAsset']]);
$this->registerCssFile('@web/css/many.css',['depends'=>['frontend\assets\AppAsset']]);
?>
<div class="wrap wrap-danger" id="display-top" class="display-div1">
    <h2 class="text-center no-m">作品集</h2>
    <div id="carousel-example-generic" class="carousel carousel-cards carousel-fade slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <?php
                            foreach (array_slice($data,0,4) as $key => $value){
                                echo WorkWidget::widget(['url'=>yii\helpers\Url::toRoute(['movie/detail','id'=>$value['id']]),'content'=>strcut(HtmlPurifier::process(json_decode($value['works_intro'])[1])),'editor'=>\frontend\models\DisUser::find()->where(['id'=>$value['user_id']])->one()->username]);
                            }

                            ?>
                            </div>
                    </div>
                </div>
            </div> <!--这个DIV是作品一页-->
            <div class="item">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <?php
                            foreach (array_slice($data,4,4) as $key => $value){
                                echo WorkWidget::widget(['url'=>yii\helpers\Url::toRoute(['movie/detail','id'=>$value['id']]),'content'=>strcut(HtmlPurifier::process(json_decode($value['works_intro'])[1])),'editor'=>\frontend\models\DisUser::find()->where(['id'=>$value['user_id']])->one()->username]);
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <?php
                            foreach (array_slice($data,8,4) as $key => $value){
                                echo WorkWidget::widget(['url'=>yii\helpers\Url::toRoute(['movie/detail','id'=>$value['id']]),'content'=>strcut(HtmlPurifier::process(json_decode($value['works_intro'])[1])),'editor'=>\frontend\models\DisUser::find()->where(['id'=>$value['user_id']])->one()->username]);
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <?php
                            foreach (array_slice($data,12,4) as $key => $value){
                                echo WorkWidget::widget(['url'=>yii\helpers\Url::toRoute(['movie/detail','id'=>$value['id']]),'content'=>strcut(HtmlPurifier::process(json_decode($value['works_intro'])[1])),'editor'=>\frontend\models\DisUser::find()->where(['id'=>$value['user_id']])->one()->username]);
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<?=DisWidget::widget() ?>
?>