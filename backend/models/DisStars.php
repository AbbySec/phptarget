<?php

namespace backend\models;

use common\models\AdminModel;
use Yii;

/**
 * This is the model class for table "dis_stars".
 *
 * @property integer $id
 * @property integer $admin_id
 * @property integer $works_id
 * @property integer $score
 *
 * @property AdminModel $admin
 * @property DisWorksInfo $works
 */
class DisStars extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dis_stars';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'works_id'], 'required'],
            [['admin_id', 'works_id', 'score'], 'integer'],
            [['admin_id'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['admin_id' => 'id']],
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
            'admin_id' => '评委老师id',
            'works_id' => '比赛id',
            'score' => '给星数目',
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