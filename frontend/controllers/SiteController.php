<?php
namespace frontend\controllers;


use frontend\models\DisWorksInfo;
use yii\base\Controller;

class SiteController extends Controller
{
    public function behaviors()
    {
        // 声明缓存配置
        return [ // 需要注意的这里是二维数组
            [
                'class' => 'yii\filters\HttpCache', // 设置需要加载的缓存文件
                'only' => ['index'], // 设置需要缓存的控制器
                'lastModified' => function ()
                { // 设置 Last-Modified 头
                    return 1548922;
                },
                'etagSeed' => function ()
                { // 设置 ETag 头
                    $para = DisWorksInfo::find()->count();
                    return serialize($para);
                }
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}

?>