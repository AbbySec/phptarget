<?php
namespace frontend\controllers;

use frontend\models\ImgUploadForm;
use frontend\models\ZipUploadForm;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;

class UploadController extends Controller
{
    public $enableCsrfValidation = false;

    /**
     * 上传压缩文件控制
     */
    public function actionZip()
    {
        $model=new ZipUploadForm();
        $timestamp=\Yii::$app->request->post('timestamp');
        $token=\Yii::$app->request->post('token');
        if(\Yii::$app->request->isPost && $token==md5('unique_salt' . md5($timestamp)))
        {
            $model->file_upload=UploadedFile::getInstanceByName('Filedata');
            if($model->validate())
            {
                $filename=md5($model->file_upload->baseName.time());
                $model->file_upload->saveAs('uploads/zip/'.$filename.'.'.$model->file_upload->extension);
                //\Yii::$app->getSession()->setFlash('upload_success','文件上传成功！');
                \Yii::$app->getSession()->setFlash('up_zip_filename',$filename.'.'.$model->file_upload ->extension);
                \Yii::$app->response->format=Response::FORMAT_JSON;
                return ['state'=>'success'];
            }
            else
            {
                \Yii::$app->response->format=Response::FORMAT_JSON;
                return ['state'=>'error','msg'=>'非法的文件格式！'];
            }
        }else
            \Yii::$app->response->format=Response::FORMAT_JSON;
        return ['state'=>'error','msg'=>'wrong token!!!'];
    }

    /**
     * 上传图片控制器
     * @return array
     */
    public function actionImg()
    {
        $model=new ImgUploadForm();
        $timestamp=\Yii::$app->request->post('timestamp');
        $token=\Yii::$app->request->post('token');
        if(\Yii::$app->request->isPost && $token==md5('unique_salt' . md5($timestamp)))
        {
            //$model->file_upload=$_FILES['Filedata'];//
            //UploadedFile::getInstance($model,'file_upload');
            $model->file_upload=UploadedFile::getInstanceByName('Filedata');
            if($model->validate())
            {
                $filename=md5($model->file_upload->baseName.time());
                $model->file_upload->saveAs('uploads/img/'.$filename.'.'.$model->file_upload->extension);
                //\Yii::$app->getSession()->setFlash('upload_success','文件上传成功！');
                \Yii::$app->getSession()->setFlash('up_filename',$filename.'.'.$model->file_upload ->extension);
                \Yii::$app->response->format=Response::FORMAT_JSON;
                return ['state'=>'success'];
            }
            else
            {
                \Yii::$app->response->format=Response::FORMAT_JSON;
                return ['state'=>'error','msg'=>'非法的文件格式！'];
            }
        }else
            \Yii::$app->response->format=Response::FORMAT_JSON;
            return ['state'=>'error','msg'=>'wrong token!!!'];
    }
}?>