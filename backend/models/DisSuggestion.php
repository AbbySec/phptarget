<?php

namespace backend\models;

use common\models\AdminModel;
use Yii;

/**
 * This is the model class for table "dis_suggestion".
 *
 * @property integer $id
 * @property integer $admin_id
 * @property integer $works_id
 * @property string $dates
 * @property string $content
 *
 * @property Admin $admin
 * @property DisWorksInfo $works
 */
class DisSuggestion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dis_suggestion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'works_id'], 'integer'],
            [['dates'], 'safe'],
            [['content'], 'string'],
            [['admin_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdminModel::className(), 'targetAttribute' => ['admin_id' => 'id']],
            [['works_id'], 'exist', 'skipOnError' => true, 'targetClass' => DisWorksInfo::className(), 'targetAttribute' => ['works_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'admin_id' => '管理员id',
            'works_id' => '作品id',
            'dates' => '时间戳',
            'content' => '建议内容',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmin()
    {
        return $this->hasOne(AdminModel::className(), ['id' => 'admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorks()
    {
        return $this->hasOne(DisWorksInfo::className(), ['id' => 'works_id']);
    }
}
?>