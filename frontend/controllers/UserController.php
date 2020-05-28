<?php

namespace frontend\controllers;

use frontend\models\LoginForm;
use Yii;
use frontend\models\DisUser;
use frontend\models\DisUserSearch;
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
//    public function actionIndex()
//    {
//        $searchModel = new DisUserSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
//    }

    /**
     * user signup
     * @return string
     */
    public function actionSignup()
    {
        $params = Yii::$app->request->post();
        $model = new DisUser();
        $yiban_info = \Yii::$app->getSession()->get('yiban_info');
        if ($params)
        {
            if ($params['DisUser']['repassword'] !== $params['DisUser']['password'])
            {
                Yii::$app->session->setFlash('error', '注册失败！请重新注册.....');
                return $this->render('signup', [
                    'model' => $model,
                ]);
            }

            if ($model->load($params))
            {
                $model->generateAuthKey();
                $model->setPassword($params['DisUser']['password']);
                $model->created_at = time();
                $model->updated_at = time();
                if ($model->validate())
                {
                    $model->save();
                    Yii::$app->session->setFlash('dis_success', '注册成功！请登录......');
                    $this->redirect(['user/login']);
                } else
                {
                    Yii::$app->session->setFlash('reg_error', '注册失败！可能原因是已经注册或者信息不完整...');
                    if (isset($yiban_info))
                        return $this->render('signup', [
                            'model' => $model,
                            'flash' => null,
                            'yiban_info' => $yiban_info
                        ]);
                    else
                        return $this->redirect(Url::toRoute('user/login'));
                }
            }
        } else
        {
            if (isset($yiban_info))
                return $this->render('signup', [
                    'model' => $model,
                    'flash' => null,
                    'yiban_info' => $yiban_info
                ]);
            else
                return $this->redirect(Url::toRoute('yiban/index'));
        }
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest)
        {
            Yii::$app->getSession()->setFlash('loginsuccess', '您已经登录，不需再次登录');
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->login())
            {
                Yii::$app->getSession()->set('user_id', $model->stu_num);
                return $this->goHome();
            } else
            {
                \Yii::$app->getSession()->setFlash('dis_error', '学号或密码错误');
                return $this->render('login', [
                    'model' => $model,
                ]);
            }
        } else
        {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogin_test()
    {
        $model = new LoginForm();
        if($model->login_test()){
            Yii::$app->getSession()->set('user_id', $model->stu_num);
            Yii::$app->getSession()->setFlash('success', '登录成功，不需再次登录');
            $this->redirect(['site/index']);
        }
    }


    public function checkLogin()
    {
        if (Yii::$app->getSession()->get('user_id'))
        {
            Yii::$app->getSession()->setFlash('success', '您已经登录，不需再次登录');
            $this->redirect(['site/index']);
        }
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
//    public function actionCreate()
//    {
//        $model = new DisUser();
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->render('create', [
//                'model' => $model,
//            ]);
//        }
//    }

    /**
     * Updates an existing DisUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
//    public function actionUpdate($id)
//    {
//        $model = $this->findModel($id);
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->render('update', [
//                'model' => $model,
//            ]);
//        }
//    }

    /**
     * Deletes an existing DisUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
//    public function actionDelete($id)
//    {
//        $this->findModel($id)->delete();
//
//        return $this->redirect(['index']);
//    }

    /**
     * Finds the DisUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DisUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DisUser::findOne($id)) !== null)
        {
            return $model;
        } else
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        Yii::$app->getSession()->destroy();
        return $this->goHome();
    }
}
?>