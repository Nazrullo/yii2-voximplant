<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.05.2019
 * Time: 17:36
 */

namespace backend\modules\voximplant\behaviors;


use backend\modules\voximplant\lib\Api\ManagingAccountsApi;
use backend\modules\voximplant\lib\ApiException;
use backend\modules\voximplant\lib\Configuration;
use backend\modules\voximplant\models\VoximplantUsers;
use common\models\User;
use yii\base\Behavior;
use yii\db\ActiveRecord;

class AddChildAccount extends Behavior
{
   /** @author https://www.weblancer.net/users/senior-prog/
    * public function behaviors()
    {
        return [
            'addAccount'=>[
                'class'=>AddChildAccount::className(),
                'account_active_attribute' => 'status',
                'account_name_attribute' => 'username',
                'account_email_attribute' => 'email',
                'account_password_attribute' =>'passwordVoximplant',
                'modelClassName' =>VoximplantUsers::classname(),
            ],
        ];
    }*/

   /** Для потключение регистрации нужно отправить чистий password а не md5
        например при регистрации если вы набираете 123456 password Она регаеться как md5
    * для этого нам нужно создать отделный гетер и сетер
    * public function getPasswordVoximplant(){return $this->password;}
    * public function setPasswordVoximplant($password){return $this->password = $password;}


    */

    /**
     * Модель для сохранение значение в бд
     * required
     * @return VoximplantUsers
     */

    public $modelClassName;
    /**
     * Аттрибут Логина  string у системы например
     * required
     * @return User username = account_name_attribute
     */
    public $account_name_attribute;
    /**
     * Аттрибут емейла string у системы например
     * required
     * @return User email = account_email_attribute
     */
    public $account_email_attribute;
    /**
     * Аттрибут password без md5 у системы например
     * required
     * @return User password = account_password_attribute
     */
    public $account_password_attribute;
    /**
     * Аттрибут Статус boolean у системы например
     * @return User status = account_active_attribute
     */
    public $account_active_attribute;

    /**
     * @return array
     */

    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_INSERT => 'afterInsert',
        ];
    }

    /**
     * после валидации запускаеться собитие
     */
    public function afterInsert()
    {
      Configuration::setInitParams();
      $modelClassName = new $this->modelClassName();
      $modelClassName->setActive($this->owner->{$this->account_active_attribute});
      $modelClassName->setPassword($this->owner->{$this->account_password_attribute});
      $modelClassName->setLogin($this->owner->{$this->account_name_attribute});
      $result = $this->sendVoximplantApiAccoundAdd(
          $modelClassName->login,
          $this->owner->{$this->account_email_attribute},
          $modelClassName->password,
          $modelClassName->active);
      $modelClassName->setApiKey($result['api_key']);
      $modelClassName->setAccountId($result['account_id']);
      $modelClassName->setActive($result['active']);
      $modelClassName->setUserId($this->owner->id);
      $modelClassName->save();

    }

    public function sendVoximplantApiAccoundAdd($account_name,$account_email,$password,$active = true){
        //        //Методы управлениями
        $api_manager = new ManagingAccountsApi();
        //Добавление дочерного аккаунта
        try {
            $result =  $api_manager->addAccount($account_name,$account_email,$password,$active);
            return $result;
        } catch (ApiException $e) {
            echo 'Exception when calling AccountsAuthenticationApi->logon: ', $e->getMessage(), PHP_EOL;
        }
        return false;
    }



}