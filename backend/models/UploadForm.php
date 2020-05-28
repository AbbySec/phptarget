<?php
/**
 * Created by PhpStorm.
 * User: 轶杰
 * Date: 2017/3/9
 * Time: 10:24
 */
namespace backend\models;

use yii\base\Model;
use yii\web\UploadedFile;

/**
 * UploadForm is the model behind the upload form.
 */
class UploadForm extends Model
{
    /**
     * @var UploadedFile|Null file attribute
     */
    public $file;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['file'], 'file','extensions'=>'xlsx'],
        ];
    }
}?>