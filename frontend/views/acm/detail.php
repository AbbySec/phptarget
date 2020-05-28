<?php
use yii\helpers\HtmlPurifier;

function def($data){
    return HtmlPurifier::process($data);
}
$this->registerCssFile('@web/css/style2.css',['depends'=>['frontend\assets\AppAsset']]);
$this->registerCssFile('@web/css/many.css',['depends'=>['frontend\assets\AppAsset']]);
?>
<div class="wrap wrap-danger" id="display-top" class="display-div1">
<div class="ms-hero ms-hero-material">
    <span class="ms-hero-bg"></span>
    <div class="container">
        <?= \common\widgets\Alert::widget() ?>

        <div class="top-content">
            <div class="show-div1">
                    <?php $name = json_decode($model['works_intro']); ?>
                    <h1 style="text-align: center;color: white"><?=def($name[0])?></h1>
                    <h4>作者：<?=def(\frontend\models\DisUser::find()->where(['id'=>$model['user_id']])->one()->username)?></h4>
                    <h4>点击量:  <?=def($model['comment_times']);?></h4>
                    <h4><?=def($name[1])?></h4>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="show-div2">
            <div class="show-div3">
                <h3 style="text-align: center;color: white">其他作品</h3>
                <ul class="show-ul">
                    <?php foreach ($work as $key => $value){ ?>
                    <li>
                        <span class="glyphicon glyphicon-hand-right"></span>
                        <a href="<?php echo \yii\helpers\Url::toRoute(['html5/detail','id'=>$value['id']]) ?>" id="show"><?=def(json_decode($value['works_intro'])[0])?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
?>