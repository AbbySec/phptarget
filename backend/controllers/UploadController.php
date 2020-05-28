<?php
namespace backend\controllers;

use backend\models\UploadForm;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\UploadedFile;

class UploadController extends Controller
{
    public function actionIndex($route)
    {
        $model=new UploadForm();

        if(\Yii::$app->request->isPost)
        {
            $model->file=UploadedFile::getInstance($model,'file');
            if($model->validate())
            {
                $filename=md5($model->file->baseName.time());
                $model->file->saveAs('uploads/'.$filename.'.'.$model->file->extension);
                //\Yii::$app->getSession()->setFlash('upload_success','文件上传成功！');
                \Yii::$app->getSession()->setFlash('up_filename',$filename.'.'.$model->file->extension);
                return $this->redirect(Url::toRoute($route));
            }
            else
            {
                \Yii::$app->getSession()->setFlash('upload_error','文件上传失败！请重试');
            }
        }
        return $this->render('view',['model'=>$model]);
    }
}?>