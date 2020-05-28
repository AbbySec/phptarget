<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dis_class1".
 *
 * @property integer $id
 * @property string $name
 *
 * @property DisClass2[] $disClass2s
 * @property DisWorksInfo[] $disWorksInfos
 */
class DisClass1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dis_class1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisClass2s()
    {
        return $this->hasMany(DisClass2::className(), ['class1_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisWorksInfos()
    {
        return $this->hasMany(DisWorksInfo::className(), ['works_class1_id' => 'id']);
    }
}
?>