<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dis_class2".
 *
 * @property integer $id
 * @property integer $class1_id
 * @property string $name
 *
 * @property DisClass1 $class1
 * @property DisWorksInfo[] $disWorksInfos
 */
class DisClass2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dis_class2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class1_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['class1_id'], 'exist', 'skipOnError' => true, 'targetClass' => DisClass1::className(), 'targetAttribute' => ['class1_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class1_id' => '比赛id',
            'name' => '类别名',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass1()
    {
        return $this->hasOne(DisClass1::className(), ['id' => 'class1_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisWorksInfos()
    {
        return $this->hasMany(DisWorksInfo::className(), ['works_class2_id' => 'id']);
    }
}
?>