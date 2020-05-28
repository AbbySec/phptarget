<?php

namespace frontend\controllers;

use frontend\models\DisTeacher;
use frontend\models\DisUser;
use frontend\models\DisWorksInfo;
use frontend\models\DisSchool;
use yii\helpers\Url;

class AppController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    private $ignoreList = ['index', 'intro'];

    public function beforeAction($action)
    {
        if (\Yii::$app->user->isGuest)
        {
            if (in_array($action->id, $this->ignoreList))
            {
                return true;
            } else
            {
                $this->redirect(['user/login']);
                return false;
            }
        }
        return true;
    }

    public function actionIndex()
    {
        $data = DisWorksInfo::find()->where(['works_class1_id' => '7', 'ispass' => '1'])->limit(16)->asArray()->all();
        return $this->render('index', ['data' => $data]);
    }

    public function actionIntro()
    {
        return $this->render('intro');
    }

    public function actionDetail($id)
    {
        if (is_numeric($id))
        {
            $model = DisWorksInfo::find()->where(['id' => $id])->asArray()->one();
            $work = DisWorksInfo::find()->where(['works_class1_id' => '7'])->asArray()->limit(5)->all();
            return $this->render('detail', ['model' => $model, 'work' => $work]);
        } else
        {
            die('参数错误');
        }
    }

    public function actionPrint()
    {
        $model = DisWorksInfo::find()
            ->where([
                'user_id' => \Yii::$app->user->getId(),
                'works_class1_id' => 7
            ])->one();
        if (!$model)
        {
            \Yii::$app->session->setFlash('error', '你还没有报名哦~');
            return $this->redirect(['app/upload']);
        }
        $this->layout = false;
        $user = DisUser::find()->where(['id' => $model->user_id])->one();
        $user_school = DisSchool::find()->where(['id' => $user->school_id])->one()->name;
        $teacher = DisTeacher::find()->where(['id' => $model->teacher_id])->one();
        return $this->render('print', ['model' => $model, 'user' => $user, 'teacher' => $teacher, 'user_school' => $user_school]);
    }

    public function actionUpload()
    {
        $this->checkLogin();
        $params = \Yii::$app->request->post();
        if ($params)
        {
            $teacher = DisTeacher::find()->where(['username' => $params['DisWorksInfo']['teacher']['username']])->one();
            if ($teacher)
            {
                $params['DisWorksInfo']['teacher_id'] = $teacher->id;
            } else
            {
                $teacher = new DisTeacher();
                $teacher->username = $params['DisWorksInfo']['teacher']['username'];
                $teacher->phone_num = $params['DisWorksInfo']['teacher']['phone_num'];
                $teacher->business = $params['DisWorksInfo']['teacher']['business'];
                $teacher->position = $params['DisWorksInfo']['teacher']['position'];
                $teacher->email = $params['DisWorksInfo']['teacher']['email'];
                $teacher->qq_num = $params['DisWorksInfo']['teacher']['qq_num'];
                if ($teacher->save())
                {
                    $params['DisWorksInfo']['teacher_id'] = $teacher->id;
                }
            }
            $stu_num = \Yii::$app->session->get('user_id');
            $params['DisWorksInfo']['user_id'] = DisUser::find()->where(['stu_num' => $stu_num])->one()->id;
            $params['DisWorksInfo']['works_class1_id'] = '7';
            $params['DisWorksInfo']['works_class2_id'] = '1';
            $name = array($params['DisWorksInfo']['name'], $params['DisWorksInfo']['works_intro']);
            $params['DisWorksInfo']['works_intro'] = json_encode($name);
            $model = DisWorksInfo::find()
                ->where([
                    'user_id' => $params['DisWorksInfo']['user_id'],
                    'works_class1_id' => $params['DisWorksInfo']['works_class1_id'],
                ])
                ->one();
            if (!$model)
                $model = new DisWorksInfo();
            if ($model->load($params) && $model->validate() && $model->save())
            {
                \Yii::$app->session->setFlash('artuploadsuccess', '作品上传成功');
                //\Yii::$app->session->set('appobj',$model);
                $this->redirect(['app/print']);
            } else
            {
                \Yii::$app->session->setFlash('error', '作品上传失败，请重新上传');
            }
        } else
        {
            $model = new DisWorksInfo();
        }

        return $this->render('upload', ['model' => $model]);
    }

    public function checkLogin()
    {
        if (\Yii::$app->session->get('user_id'))
        {

        } else
        {
            $this->redirect(['user/login']);
        }
    }
}
?>