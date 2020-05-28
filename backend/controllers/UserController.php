<?php

namespace backend\controllers;

use backend\models\DisMajor;
use backend\models\DisSchool;
use backend\models\DisWorksInfo;
use moonland\phpexcel\Excel;
use Yii;
use backend\models\DisUser;
use backend\models\DisuserSearch;
use yii\db\Query;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for DisUser model.
 */
class UserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all DisUser models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DisuserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DisUser model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DisUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DisUser();

        if ($model->load(Yii::$app->request->post()))
        {
            $model->generateAuthKey();
            $model->setPassword($model->password);
            $model->created_at=time();
            $model->updated_at=time();
            if($model->save())
                return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DisUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DisUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DisUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DisUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DisUser::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * 导入excel
     */
    public function actionImport()
    {
        $filename=\Yii::$app->getSession()->getFlash('up_filename');
        if(!$filename){
            \Yii::$app->getSession()->setFlash('upload_error','文件上传失败！请重试');
            $this->redirect(Url::toRoute('user/index?route=user/import'));
        }
        $data=Excel::import('uploads/'.$filename,['getOnlySheet' => 'sheet1']);
        foreach ($data as $value)
        {
            $tmp=DisUser::findByUsername($value['学号']);
            if(!$tmp){
                $tmp=new DisUser();
                $tmp->generateAuthKey();
                $tmp->created_at = time();
                $tmp->setPassword(substr($value['学号'],0,-6));//默认密码是学号后六位
            }
            $tmp->updated_at = time();
            $tmp->stu_num=$value['学号'];
            $tmp->username=$value['用户名'];
            $tmp->school_id=DisSchool::getIdByName($value['学院']);
            $tmp->major_id=DisMajor::getIdByName($value['专业']);
            $tmp->address=$value['地址'];
            $tmp->phone_num=$value['电话'];
            $tmp->university=$value['大学'];
            $tmp->grade=$value['年级'];
            if(!$tmp->save(false)){
                \Yii::$app->getSession()->setFlash('user_error','文件解析失败，请检查格式');
                $this->redirect(Url::toRoute('user/index?route=user/import'));
            }
        }
        unlink('uploads/'.$filename);
        \Yii::$app->getSession()->setFlash('user_success','用户导入成功');
        $this->redirect(Url::toRoute('user/index?route=user/import'));
    }

    /**
     * 导出excel
     */
    public function actionExport()
    {
        //$model = DisUser::find()->join('INNER JOIN',['dis_school','dis_major'],['s.id = school_id','m.id = major_id'])->all();
        $model=(new Query())->select(['*','s.name as sname','m.name as mname'])->from('dis_user')
            ->join('INNER JOIN','dis_school s','s.id = school_id')
            ->join('INNER JOIN','dis_major m','m.id = major_id')
            ->all();
        Excel::export([
            'models' => $model,
            'fileName'=>date('Y-m-d').'_Export_注册用户信息.xlsx',
            'columns'=>[
                'stu_num',
                'username',
                'sname' ,
                'mname' ,
                'address' ,
                'phone_num' ,
                'university' ,
                'grade',
            ],
            'headers'=>[
                'stu_num' => '学号',
                'username' => '用户名',
                'sname' => '学院',
                'mname' => '专业',
                'address' => '地址',
                'phone_num' => '电话',
                'university' => '大学',
                'grade' => '年级',
            ]
        ]);

    }
}
?>