<?php

namespace frontend\controllers;

use frontend\models\DisTeacher;
use frontend\models\DisUser;
use frontend\models\DisWorksInfo;
use frontend\models\DisSchool;
use yii\helpers\Url;

class ArticleController extends \yii\web\Controller
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
                $this->redirect(['user/login'])->send();
                return false;
            }
        }
        return true;
    }

    public function actionIndex()
    {
        $data = DisWorksInfo::find()->where(['works_class1_id' => '3', 'ispass' => '1'])->limit(16)->asArray()->all();
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
            $work = DisWorksInfo::find()->where(['works_class1_id' => '3'])->asArray()->limit(5)->all();
            return $this->render('detail', ['model' => $model, 'work' => $work]);
        } else
        {
            die('参数错误');
        }
    }

    public function cn_substr_utf8($str, $length, $start=0)
    {
        $lgocl_str=$str;
        //echo strlen($lgocl_str)."||".$length;
        if(strlen($str) < $start+1)
        {
            return '';
        }
        preg_match_all("/./su", $str, $ar);
        $str = '';
        $tstr = '';

        //为了兼容mysql4.1以下版本,与数据库varchar一致,这里使用按字节截取
        for($i=0; isset($ar[0][$i]); $i++)
        {
            if(strlen($tstr) < $start)
            {
                $tstr .= $ar[0][$i];
            }
            else
            {
                if(strlen($str) < $length  )
                {
                    $str .= $ar[0][$i];
                }
                else
                {
                    break;
                }
            }
        }
        return $str;
    }

    public function cn_substr($str,$slen,$startdd=0)
    {
        global $cfg_soft_lang;
        if($cfg_soft_lang=='utf-8')
        {
            return $this->cn_substr_utf8($str,$slen,$startdd);
        }
        $restr = '';
        $c = '';
        $str_len = strlen($str);
        if($str_len < $startdd+1)
        {
            return '';
        }
        if($str_len < $startdd + $slen || $slen==0)
        {
            $slen = $str_len - $startdd;
        }
        $enddd = $startdd + $slen - 1;
        for($i=0;$i<$str_len;$i++)
        {
            if($startdd==0)
            {
                $restr .= $c;
            }
            else if($i > $startdd)
            {
                $restr .= $c;
            }

            if(ord($str[$i])>0x80)
            {
                if($str_len>$i+1)
                {
                    $c = $str[$i].$str[$i+1];
                }
                $i++;
            }
            else
            {
                $c = $str[$i];
            }

            if($i >= $enddd)
            {
                if(strlen($restr)+strlen($c)>$slen)
                {
                    break;
                }
                else
                {
                    $restr .= $c;
                    break;
                }
            }
        }
        return $restr;
    }

    public function getSubStrByFromAndEnd($str,$startStr,$endStr,$operType){
        switch ($operType) {
            case "start":
                $location1=strpos($str,$startStr)+strlen($startStr);$location2=strlen($str)+1;
                break;
            case "end":
                $location1=1;$location2=strpos($str,$endStr,$location1);
                break;
            default:
                $location1=strpos($str,$startStr)+strlen($startStr);$location2=strpos($str,$endStr,$location1);
        }
        $location3=$location2-$location1;
        $getSubStrByFromAndEnd=$this->cn_substr($str,$location3,$location1);
        return $getSubStrByFromAndEnd;
    }

    public function buildregx($regstr,$regopt)
    {
        return '/'.str_replace('/','\/',$regstr).'/'.$regopt;
    }

    public function parseStrIf($strIf)
    {
        if(strpos($strIf,'=')===false)
        {
            return $strIf;
        }
        if((strpos($strIf,'==')===false)&&(strpos($strIf,'=')>0))
        {
            $strIf=str_replace('=', '==', $strIf);
        }
        $strIfArr =  explode('==',$strIf);
        return (empty($strIfArr[0])?'NULL':$strIfArr[0])."==".(empty($strIfArr[1])?'NULL':$strIfArr[1]);
    }

    public function parseSubIf($content){
        if (strpos($content,'{subif:')=== false){
            return $content;
        }else{
            $labelRule = $this->buildregx("{subif:(.*?)}(.*?){end subif}","is");
            $labelRule2="{elseif";
            $labelRule3="{else}";
            preg_match_all($labelRule,$content,$iar);
            foreach($iar as $v){
                $iarok[] = str_ireplace(array('unlink','opendir','mysqli_','mysql_','socket_','curl_','base64_','putenv','popen(','phpinfo','pfsockopen','proc_','preg_','_GET','_POST','_COOKIE','_REQUEST','_SESSION','_SERVER','assert','eval(','file_','passthru(','exec(','system(','shell_'), '@.@', $v);
            }
            $iar = $iarok;
            $arlen=count($iar[0]);
            $elseIfFlag=false;
            for($m=0;$m<$arlen;$m++){
                $strIf=$iar[1][$m];
                $strIf=$this->parseStrIf($strIf);
                $strThen=$iar[2][$m];
                $strThen=$this->parseIf($strThen);
                if (strpos($strThen,$labelRule2)===false){
                    if (strpos($strThen,$labelRule3)>=0){
                        $elsearray=explode($labelRule3,$strThen);
                        $strThen1=$elsearray[0];
                        $strElse1=$elsearray[1];
                        @eval("if(".$strIf."){\$ifFlag=true;}else{\$ifFlag=false;}");
                        if ($ifFlag){ $content=str_replace($iar[0][$m],$strThen1,$content);} else {$content=str_replace($iar[0][$m],$strElse1,$content);}
                    }else{
                        @eval("if(".$strIf.") { \$ifFlag=true;} else{ \$ifFlag=false;}");
                        if ($ifFlag) $content=str_replace($iar[0][$m],$strThen,$content); else $content=str_replace($iar[0][$m],"",$content);}
                }else{
                    $elseIfArray=explode($labelRule2,$strThen);
                    $elseIfArrayLen=count($elseIfArray);
                    $elseIfSubArray=explode($labelRule3,$elseIfArray[$elseIfArrayLen-1]);
                    $resultStr=$elseIfSubArray[1];
                    $elseIfArraystr0=addslashes($elseIfArray[0]);
                    @eval("if($strIf){\$resultStr=\"$elseIfArraystr0\";}");
                    for($elseIfLen=1;$elseIfLen<$elseIfArrayLen;$elseIfLen++){
                        $strElseIf=$this->getSubStrByFromAndEnd($elseIfArray[$elseIfLen],":","}","");
                        $strElseIfThen=addslashes($this->getSubStrByFromAndEnd($elseIfArray[$elseIfLen],"}","","start"));
                        $strElseIf=$this->parseStrIf($strElseIf);
                        @eval("if(".$strElseIf."){\$resultStr=\"$strElseIfThen\";}");
                        @eval("if(".$strElseIf."){\$elseIfFlag=true;}else{\$elseIfFlag=false;}");
                        if ($elseIfFlag) {break;}
                    }
                    $strElseIf0=$this->getSubStrByFromAndEnd($elseIfSubArray[0],":","}","");
                    $strElseIfThen0=addslashes($this->getSubStrByFromAndEnd($elseIfSubArray[0],"}","","start"));
                    $strElseIf0=$this->parseStrIf($strElseIf0);
                    @eval("if(".$strElseIf0."){\$resultStr=\"$strElseIfThen0\";\$elseIfFlag=true;}");
                    $content=str_replace($iar[0][$m],$resultStr,$content);
                }
            }
            return $content;
        }
    }


    public function parseIf($content){
        if (strpos($content,'{if:')=== false){
            return $content;
        }else{
            $labelRule = $this->buildregx("{if:(.*?)}(.*?){end if}","is");
            $labelRule2="{elseif";
            $labelRule3="{else}";
            preg_match_all($labelRule,$content,$iar);
            foreach($iar as $v){
                $iarok[] = str_ireplace(array('unlink','opendir','mysqli_','mysql_','socket_','curl_','base64_','putenv','popen(','phpinfo','pfsockopen','proc_','preg_','_GET','_POST','_COOKIE','_REQUEST','_SESSION','_SERVER','assert','eval(','file_','passthru(','exec(','system(','shell_'), '@.@', $v);
            }
            $iar = $iarok;
            $arlen=count($iar[0]);
            $elseIfFlag=false;
            for($m=0;$m<$arlen;$m++){
                $strIf=$iar[1][$m];
                $strIf=$this->parseStrIf($strIf);
                $strThen=$iar[2][$m];
                $strThen=$this->parseSubIf($strThen);
                if (strpos($strThen,$labelRule2)===false){
                    if (strpos($strThen,$labelRule3)>=0){
                        $elsearray=explode($labelRule3,$strThen);
                        $strThen1=$elsearray[0];
                        // $strElse1=$elsearray[1];
                        @eval("if(".$strIf."){\$ifFlag=true;}else{\$ifFlag=false;}");
                        if ($ifFlag){ $content=str_replace($iar[0][$m],$strThen1,$content);} else {$content=str_replace($iar[0][$m],$strElse1,$content);}
                    }else{
                        @eval("if(".$strIf.") { \$ifFlag=true;} else{ \$ifFlag=false;}");
                        if ($ifFlag) $content=str_replace($iar[0][$m],$strThen,$content); else $content=str_replace($iar[0][$m],"",$content);}
                }else{
                    $elseIfArray=explode($labelRule2,$strThen);
                    $elseIfArrayLen=count($elseIfArray);
                    $elseIfSubArray=explode($labelRule3,$elseIfArray[$elseIfArrayLen-1]);
                    $resultStr=$elseIfSubArray[1];
                    $elseIfArraystr0=addslashes($elseIfArray[0]);
                    @eval("if($strIf){\$resultStr=\"$elseIfArraystr0\";}");
                    for($elseIfLen=1;$elseIfLen<$elseIfArrayLen;$elseIfLen++){
                        $strElseIf=$this->getSubStrByFromAndEnd($elseIfArray[$elseIfLen],":","}","");
                        $strElseIf=$this->parseStrIf($strElseIf);
                        $strElseIfThen=addslashes($this->getSubStrByFromAndEnd($elseIfArray[$elseIfLen],"}","","start"));
                        @eval("if(".$strElseIf."){\$resultStr=\"$strElseIfThen\";}");
                        @eval("if(".$strElseIf."){\$elseIfFlag=true;}else{\$elseIfFlag=false;}");
                        if ($elseIfFlag) {break;}
                    }
                    $strElseIf0=$this->getSubStrByFromAndEnd($elseIfSubArray[0],":","}","");
                    $strElseIfThen0=addslashes($this->getSubStrByFromAndEnd($elseIfSubArray[0],"}","","start"));
                    if(strpos($strElseIf0,'==')===false&&strpos($strElseIf0,'=')>0)$strElseIf0=str_replace('=', '==', $strElseIf0);
                    @eval("if(".$strElseIf0."){\$resultStr=\"$strElseIfThen0\";\$elseIfFlag=true;}");
                    $content=str_replace($iar[0][$m],$resultStr,$content);
                }
            }
            return $content;
        }
    }

    public function actionPrint()
    {
        $model = DisWorksInfo::find()
            ->where([
                'user_id' => \Yii::$app->user->getId(),
                'works_class1_id' => 3
            ])->one();
        if (!$model)
        {
            \Yii::$app->session->setFlash('error', '你还没有报名哦~');
            return $this->redirect(['article/upload']);
        }
        $this->layout = false;
        $user = DisUser::find()->where(['id' => $model->user_id])->one();
        $user_school = DisSchool::find()->where(['id' => $user->school_id])->one()->name;
        $teacher = DisTeacher::find()->where(['id' => $model->teacher_id])->one();
        $this->parseIf($model->works_link);
        return $this->render('print', ['model' => $model, 'user' => $user, 'teacher' => $teacher, 'user_school' => $user_school]);
    }

    public function actionUpload()
    {
        $this->checkLogin();
        $model = new DisWorksInfo();
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
            $params['DisWorksInfo']['works_class1_id'] = '3';
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
                //\Yii::$app->session->set('articleobj',$model);
                $this->redirect(['article/print']);
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