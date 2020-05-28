<?php

namespace frontend\controllers;

use frontend\models\DisSchool;
use frontend\models\DisTeacher;
use frontend\models\DisUser;
use frontend\models\DisWorksInfo;

class EntrepreneurshipController extends \yii\web\Controller
{
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
        return $this->render('index');
    }

    public function actionIntro()
    {
        return $this->render('intro');
    }

    public function actionPrint()
    {
        $model = DisWorksInfo::find()
            ->where([
                'user_id' => \Yii::$app->user->getId(),
                'works_class1_id' => 10
            ])->one();
        if (!$model)
        {
            \Yii::$app->session->setFlash('error', '你还没有报名哦~');
            return $this->redirect(['entrepreneurship/upload']);
        }
        $this->layout = false;
        $groupuser = json_decode($model->group_ids);
        $guser = array();
        foreach ($groupuser as $k)
        {
            $u = DisUser::find()->where(['id' => $k])->asArray()->one();
            $u['user_school'] = DisSchool::find()->where(['id' => $u['school_id']])->one()->name;
            $guser[] = $u;
        }
        $user = DisUser::find()->where(['id' => $model->user_id])->one();
        $user_school = DisSchool::find()->where(['id' => $user->school_id])->one()->name;
        $teacher = DisTeacher::find()->where(['id' => $model->teacher_id])->one();
        return $this->render('print', ['model' => $model, 'user' => $user, 'teacher' => $teacher, 'user_school' => $user_school, 'guser' => $guser]);
    }

    public function actionUpload()
    {
        $this->checkLogin();
        $params = \Yii::$app->request->post();
        if ($params)
        {
            $stuarr = array();
            foreach ($params['DisWorksInfo']['student'] as $key => $value)
            {
                $student = DisUser::find()->where(['stu_num' => $value['DisUser']['stu_num']])->one();
                if ($student)
                {
                    array_push($stuarr, $student->id);
                } else
                {
                    $student = new DisUser();
                    if ($student->load($value))
                    {
                        $student->generateAuthKey();
                        $student->setPassword('123456');
                        $student->created_at = time();
                        $student->updated_at = time();
                        if ($student->validate() && $student->save())
                        {
                            array_push($stuarr, $student->id);
                        }
                    } else
                    {
                        echo "参数错误，请重试";
                    }
                }
            }
//            var_dump(json_encode($stuarr))
            $params['DisWorksInfo']['group_ids'] = json_encode($stuarr);
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
            $params['DisWorksInfo']['works_class1_id'] = '10';
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
                \Yii::$app->session->setFlash('ideuploadsuccess', '报名成功');
                // \Yii::$app->session->set('movieobj',$model);
                $this->redirect(['entrepreneurship/print']);
            } else
            {
                \Yii::$app->session->setFlash('error', '报名失败，请重新报名');
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

    public function actionDetail($id)
    {
        if (is_numeric($id))
        {
            $model = DisWorksInfo::find()->where(['id' => $id])->asArray()->one();
            $work = DisWorksInfo::find()->where(['works_class1_id' => '10'])->asArray()->limit(5)->all();
            return $this->render('detail', ['model' => $model, 'work' => $work]);
        } else
        {
            die('参数错误');
        }
    }

}
?>