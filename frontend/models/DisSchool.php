<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dis_school".
 *
 * @property integer $id
 * @property string $name
 *
 * @property DisMajor[] $disMajors
 * @property DisUser $disUser
 */
class DisSchool extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dis_school';
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
            'name' => '学院名',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisMajors()
    {
        return $this->hasMany(DisMajor::className(), ['school_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisUser()
    {
        return $this->hasOne(DisUser::className(), ['school_id' => 'id']);
    }
}
?>