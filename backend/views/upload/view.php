<?php
/**
 * Created by PhpStorm.
 * User: 轶杰
 * Date: 2017/3/9
 * Time: 10:56
 */
use yii\widgets\ActiveForm;
$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
?>
<section class="wrapper">
    <?php
    if( Yii::$app->getSession()->hasFlash('upload_success') )
    {
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'bg-success',
            ],
            'body' => Yii::$app->getSession()->getFlash('upload_success'), //消息体
        ]);
    }elseif(Yii::$app->getSession()->hasFlash('upload_error'))
    {
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'bg-danger',
            ],
            'body' => Yii::$app->getSession()->getFlash('upload_error'), //消息体
        ]);
    }
    ?>
    <section class="panel">
        <header class="panel-heading">文件上传</header>
        <div class="panel-body">
            <?= $form->field($model, 'file')->fileInput() ?>

            <button class="btn btn-success">提交</button>

            <?php ActiveForm::end(); ?>
        </div>
    </section>
</section>


?>