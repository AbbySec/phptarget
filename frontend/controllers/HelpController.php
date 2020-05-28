<?php

namespace frontend\controllers;

class HelpController extends \yii\web\Controller
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

}
?>