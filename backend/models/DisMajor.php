<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dis_major".
 *
 * @property integer $id
 * @property string $name
 * @property integer $school_id
 *
 * @property DisSchool $school
 * @property DisUser[] $disUsers
 */
class DisMajor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dis_major';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['school_id'], 'exist', 'skipOnError' => true, 'targetClass' => DisSchool::className(), 'targetAttribute' => ['school_id' => 'id']],
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
            'school_id' => 'School ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchool()
    {
        return $this->hasOne(DisSchool::className(), ['id' => 'school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisUsers()
    {
        return $this->hasMany(DisUser::className(), ['major_id' => 'id']);
    }

    public static function getIdByName($name)
    {
        return DisMajor::find()->where(['name'=>$name])->one()['id'];
    }
}
?>