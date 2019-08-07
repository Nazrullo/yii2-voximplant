<?php

namespace backend\modules\voximplant\models;

use Yii;

/**
 * This is the model class for table "voximplant_users".
 *
 * @property int $id
 * @property int $active
 * @property int $user_id
 * @property int $account_id
 * @property string $api_key
 * @property string $login
 * @property string $password
 */
class VoximplantUsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'voximplant_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'account_id'], 'integer'],
            [['active'],'boolean'],
            [['api_key', 'login', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'active' => 'Active',
            'user_id' => 'User ID',
            'account_id' => 'Account ID',
            'api_key' => 'Api Key',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }

    public function getActive(){
        return $this->active;
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function setUserId($user_id){
        $this->user_id = $user_id;
    }

    public function setActive($active){
        return $this->active = $active;
    }
    public function getAccountId(){
        return $this->account_id;
    }
    public function setAccountId($account_id){
        return $this->account_id = $account_id;
    }
    public function setApiKey($api_key){
        return $this->api_key = $api_key;
    }
    public function getApiKey(){
        return $this->api_key;
    }
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($login){
        return $this->login = $login;
    }

    public function setPassword($password){
        return $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }
}
