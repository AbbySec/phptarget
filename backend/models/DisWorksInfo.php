<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dis_works_info".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $teacher_id
 * @property integer $works_class1_id
 * @property integer $works_class2_id
 * @property string $works_intro
 * @property string $works_link
 * @property integer $works_time
 * @property integer $click_rate
 * @property integer $comment_times
 * @property string $group_ids
 * @property integer $ispass
 * @property integer $score
 *
 * @property DisSuggestion[] $disSuggestions
 * @property DisClass1 $worksClass1
 * @property DisClass2 $worksClass2
 * @property DisTeacher $teacher
 * @property DisUser $user
 */
class DisWorksInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dis_works_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'teacher_id', 'works_class1_id', 'works_class2_id'], 'required'],
            [['user_id', 'teacher_id', 'works_class1_id', 'works_class2_id', 'works_time', 'click_rate', 'comment_times', 'ispass', 'score'], 'integer'],
            [['works_intro'], 'string'],
            [['works_link', 'group_ids'], 'string', 'max' => 255],
            [['works_class1_id'], 'exist', 'skipOnError' => true, 'targetClass' => DisClass1::className(), 'targetAttribute' => ['works_class1_id' => 'id']],
            [['works_class2_id'], 'exist', 'skipOnError' => true, 'targetClass' => DisClass2::className(), 'targetAttribute' => ['works_class2_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => DisTeacher::className(), 'targetAttribute' => ['teacher_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => DisUser::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '申请者id',
            'teacher_id' => '指导教师id',
            'works_class1_id' => '比赛id',
            'works_class2_id' => '分类id',
            'works_intro' => '作品介绍',
            'works_link' => '作品链接',
            'works_time' => '申报时间',
            'click_rate' => '点击率',
            'comment_times' => '评论数',
            'group_ids' => '同组人员id组',
            'ispass' => '是否通过审核',
            'score' => '最终得分',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisStars()
    {
        return $this->hasMany(DisStars::className(), ['works_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisUploads()
    {
        return $this->hasMany(DisUpload::className(), ['works_id' => 'id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisSuggestions()
    {
        return $this->hasMany(DisSuggestion::className(), ['works_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorksClass1()
    {
        return $this->hasOne(DisClass1::className(), ['id' => 'works_class1_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorksClass2()
    {
        return $this->hasOne(DisClass2::className(), ['id' => 'works_class2_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(DisTeacher::className(), ['id' => 'teacher_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(DisUser::className(), ['id' => 'user_id']);
    }
}
?>