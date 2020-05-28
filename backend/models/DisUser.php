<?php

namespace backend\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "dis_user".
 *
 * @property integer $id
 * @property string $stu_num
 * @property string $username
 * @property integer $school_id
 * @property integer $major_id
 * @property string $address
 * @property string $phone_num
 * @property string $university
 * @property integer $grade
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property DisSchool $school
 * @property DisMajor $major
 * @property DisWorksInfo[] $disWorksInfos
 */
class DisUser extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dis_user';
    }

    public $password;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stu_num', 'username', 'school_id', 'major_id', 'auth_key', 'password_hash', 'created_at', 'updated_at'], 'required'],
            [['stu_num', 'school_id', 'major_id', 'grade', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'address', 'university', 'password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['phone_num'], 'string', 'max' => 11],
            [['auth_key'], 'string', 'max' => 32],
            [['school_id'], 'exist', 'skipOnError' => true, 'targetClass' => DisSchool::className(), 'targetAttribute' => ['school_id' => 'id']],
            [['major_id'], 'exist', 'skipOnError' => true, 'targetClass' => DisMajor::className(), 'targetAttribute' => ['major_id' => 'id']],
            ['stu_num','unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stu_num' => '学号',
            'username' => '用户名',
            'school_id' => '学院',
            'major_id' => '专业',
            'address' => '地址',
            'phone_num' => '电话',
            'university' => '大学',
            'grade' => '年级',
            'auth_key' => 'Auth Key',
            'password_hash' => '密码',
            'password_reset_token' => 'Password Reset Token',
            'status' => '状态',
            'created_at' => '创建时间',
            'updated_at' => '修改时间',
            'password' => '密码'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchool()
    {
        return $this->hasOne(DisSchool::className(), ['id' => 'school_id']);
    }

    public function getAllSchool()
    {
        return DisSchool::find()->all();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMajor()
    {
        return $this->hasOne(DisMajor::className(), ['id' => 'major_id']);
    }

    public function getAllMajor()
    {
        return DisMajor::find()->all();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisWorksInfos()
    {
        return $this->hasMany(DisWorksInfo::className(), ['user_id' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    /*
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }
*/
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($stu_num)
    {
        return static::findOne(['stu_num' => $stu_num, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}
?>