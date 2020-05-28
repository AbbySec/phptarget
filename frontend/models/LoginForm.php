<?php
namespace frontend\models;

use common\models\AdminModel;
use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $stu_num;
    public $password;

    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['stu_num', 'password'], 'required'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            ['stu_num','integer']
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, '');
//                Yii::$app->session->setFlash('loginerror','失败！请重试......');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), 0);
        } else {
            return false;
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */

    public function login_test()
    {
        $this->stu_num  = DisUser::find()->one()->stu_num;
        return Yii::$app->user->login($this->getUser(), 0);
    }


    public function attributeLabels(){
        return [
            'stu_num' => '',
            'password' => '',
        ];
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = DisUser::findByUsername($this->stu_num);
        }

        return $this->_user;
    }
}
?>