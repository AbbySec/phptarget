<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dis_teacher".
 *
 * @property integer $id
 * @property string $username
 * @property string $phone_num
 * @property string $business
 * @property string $position
 * @property string $qq_num
 * @property string $email
 *
 * @property DisWorksInfo[] $disWorksInfos
 */
class DisTeacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dis_teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['username', 'business', 'position', 'email'], 'string', 'max' => 255],
            [['phone_num'], 'string', 'max' => 11],
            [['qq_num'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '姓名',
            'phone_num' => '手机号',
            'business' => '职务',
            'position' => '职称',
            'qq_num' => 'QQ号',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisWorksInfos()
    {
        return $this->hasMany(DisWorksInfo::className(), ['teacher_id' => 'id']);
    }
}
?>