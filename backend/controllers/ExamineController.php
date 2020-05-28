<?php

namespace backend\controllers;

use backend\models\DisClass1;
use moonland\phpexcel\Excel;
use Yii;
use backend\models\DisWorksInfo;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ExamineController implements the CRUD actions for DisWorksInfo model.
 */
class ExamineController extends Controller
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
     * Lists all DisWorksInfo models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => DisWorksInfo::find()->where(['works_class1_id'=>$id])->orderBy(['ispass'=>SORT_ASC]),
        ]);
        $class1=DisClass1::find()->asArray()->all();
        if($id>count($class1)||$id<=0) die('非法操作');
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'title'=>$class1[$id-1]['name'],
            'id'=>$id
        ]);
    }

    /**
     * Displays a single DisWorksInfo model.
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
     * Creates a new DisWorksInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DisWorksInfo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DisWorksInfo model.
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
     * Deletes an existing DisWorksInfo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model=$this->findModel($id);
        $id=$model['works_class1_id'];
        $model->delete();
        \Yii::$app->getSession()->setFlash('success','删除成功');
        return $this->redirect(Url::toRoute('examine/index?id='.$id));
    }

    /**
     * Finds the DisWorksInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DisWorksInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DisWorksInfo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * 通过审核
     * @param $id
     * @return \yii\web\Response
     */
    public function actionPass($id){
        $model=$this->findModel($id);
        $model->ispass=1;
        $model->save();
        \Yii::$app->getSession()->setFlash('success','通过成功');
        return $this->redirect(Url::toRoute('examine/index?id='.$model['works_class1_id']));
    }

    /**
     * 拒绝通过
     * @param $id
     * @return \yii\web\Response
     */
    public function actionDeny($id){
        $model=$this->findModel($id);
        $model->ispass=2;
        $model->save();
        \Yii::$app->getSession()->setFlash('success','拒绝成功');
        return $this->redirect(Url::toRoute('examine/index?id='.$model['works_class1_id']));
    }

    /**
     * 按照分类导出表
     * class 1 id
     * @param $id
     */
    public function actionExport($id)
    {
        $model=(new Query())->select(
            [
                '*',
                'u.username as uname',
                't.username as tname',
                'c1.name as c1name',
                'c2.name c2name',
                'm.name mname',
                's.name sname'
            ]
        )->from('dis_works_info')
            ->where(['works_class1_id'=>$id])
            ->join('INNER JOIN','dis_user u','u.id = user_id')
            ->join('INNER JOIN','dis_teacher t','t.id = teacher_id')
            ->join('INNER JOIN','dis_class1 c1','c1.id = works_class1_id')
            ->join('INNER JOIN','dis_class2 c2','c2.id = works_class2_id')
            ->join('INNER JOIN','dis_major m','m.id = major_id')
            ->join('INNER JOIN','dis_school s','s.id = u.school_id')
            ->all();
        $gamename=DisClass1::findOne($id)['name'];
        Excel::export([
            'models' => $model,
            'fileName'=>date('Y-m-d').'_Export_'.$gamename.'信息表.xlsx',
            'columns'=>[
                'id',
                'stu_num',
                'uname',
                'tname',
                'sname',
                'mname',
                'c1name' ,
                'c2name' ,
                'works_link' ,
                'works_time' ,
                'click_rate',
                'comment_times',
                'score',
                'works_intro' ,
                'phone_num',
            ],
            'headers'=>[
                'id'=>'ID',
                'stu_num'=>'学号',
                'uname'=>'申请人',
                'tname'=>'指导教师',
                'sname'=>'学院',
                'mname'=>'专业',
                'c1name'=>'比赛名' ,
                'c2name'=>'分类名' ,
                'works_link'=>'作品链接' ,
                'works_time'=>'点赞次数' ,
                'click_rate'=>'点击率',
                'comment_times'=>'评论数',
                'score'=>'评分',
                'works_intro' =>'简介',
                'phone_num'=>'手机号'
            ]
        ]);

    }
}
?>