<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dis_upload".
 *
 * @property integer $id
 * @property integer $works_id
 * @property string $urls
 *
 * @property DisWorksInfo $works
 */
class DisUpload extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dis_upload';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['works_id'], 'required'],
            [['works_id'], 'integer'],
            [['urls'], 'string'],
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
            'works_id' => '比赛id',
            'urls' => '链接',
        ];
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