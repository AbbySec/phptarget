<?php
/**
 * Created by PhpStorm.
 * User: 轶杰
 * Date: 2017/3/9
 * Time: 10:24
 */
namespace frontend\models;

use yii\base\Model;
use yii\web\UploadedFile;

/**
 * UploadForm is the model behind the upload form.
 */
class ZipUploadForm extends Model
{
    /**
     * @var UploadedFile|Null file attribute
     */
    public $file_upload;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['file_upload'], 'file','extensions'=>['zip', 'rar']],
        ];
    }
}?>