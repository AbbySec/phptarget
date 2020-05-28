<?php
namespace backend\controllers;

use backend\models\DisUser;
use backend\models\DisWorksInfo;
use izyue\admin\models\Log;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\LoginForm;
use yii\web\User;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public $enableCsrfValidation = false;


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error','fun','test'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $user=DisUser::find()->select('id')->asArray()->all();
        $wokers=DisWorksInfo::find()->select('id')->asArray()->all();
        $admin_num=Log::find()->select('id')->asArray()->all();
        if(Yii::$app->request->get('url')) {
            $res = @file_get_contents(Yii::$app->request->get('url'));
            \Yii::$app->getSession()->setFlash('success',$res);
        }
            $weather = json_decode(
                @file_get_contents('https://api.thinkpage.cn/v3/weather/now.json?key=rj5wncj9qq5bihmy&location=xuzhou&language=zh-Hans&unit=c'),
                true
            );
        //\Yii::$app->getSession()->setFlash('error','fatal error');
        return $this->render('index',
            [
                'usernum'=>count($user),
                'worknum'=>count($wokers),
                'adminnum'=>count($admin_num),
                'weather'=>$weather['results'][0]
            ]);
    }

    public function actionLogin()
    {
        $this->layout = 'login.php';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionFun()
    {

        return $this->render('fun');
    }

    public function actionTest()
    {
        return Yii::$app->getSecurity()->generatePasswordHash('123');
    }

}
?>