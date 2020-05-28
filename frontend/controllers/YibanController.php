<?php
/**
 * Created by PhpStorm.
 * User: 轶杰
 * Date: 2017/4/6
 * Time: 20:27
 */
namespace frontend\controllers;

use yii\helpers\Url;

class YibanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        include(dirname(__FILE__) . DIRECTORY_SEPARATOR . '../lib/classes/yb-globals.inc.php');
        $cfg = [
            'm' => [
                'appID' => 'aacc4adca902d2fb',
                'appSecret' => '45b0eb6e6653f8b8f996c408c51ff5e3',
                'callback' => \Yii::$app->request->hostInfo . Url::toRoute('yiban/index')
            ]];
        $token = \Yii::$app->getSession()->get('__TOKEN__');
        $token = isset($token) ? $token : false;
        $api = \YBOpenApi::getInstance()->init($cfg['m']['appID'], $cfg['m']['appSecret'], $cfg['m']['callback']);
        $au = $api->getAuthorize();
        if (empty($token))
        {
            $code = \Yii::$app->request->get('code');
            if (isset($code) && !empty($code))
            {
                $info = $au->querytoken($code);
                if (isset($info['access_token']))
                {
                    \Yii::$app->getSession()->set('__TOKEN__', $info['access_token']);
                } else
                {
                    echo $info['msgCN'];
                }
            } else
            {
                return $this->redirect($au->forwardurl());
            }
        }
        $res = file_get_contents('https://openapi.yiban.cn/user/verify_me?access_token=' . $token);
        $res = json_decode($res, true);
        if ($res['status'] == 'success')
        {
            \Yii::$app->getSession()->set('yiban_info', $res['info']);
            return $this->redirect(Url::toRoute('user/signup'));
        } else
        {
            return $this->redirect(Url::toRoute('user/signup'));
        }
    }
}?>