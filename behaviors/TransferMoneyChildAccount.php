<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.05.2019
 * Time: 11:26
 */

namespace backend\modules\voximplant\behaviors;


use backend\modules\voximplant\forms\TransferMoneyChildAccountForm;
use backend\modules\voximplant\lib\Api\ManagingAccountsApi;
use backend\modules\voximplant\lib\ApiException;
use backend\modules\voximplant\lib\Configuration;
use backend\modules\voximplant\models\VoximplantUsers;
use yii\base\Behavior;
use yii\db\ActiveRecord;

class TransferMoneyChildAccount extends Behavior
{
    /**public function behaviors()
    {
        return [
            'transferMoneyChildAccount'=>[
                'class'=>TransferMoneyChildAccount::className(),
                'child_account_id_attribute' => 'child_account_id',
                'amount_attribute' => 'amount',
                'currency_attribute' => 'currency',
            ],
        ];
    }*/

    /**
     * @return TransferMoneyChildAccountForm сhild_account_id
     */
    public $child_account_id_attribute;
    /**
     * Темлейт страницы например сейчас стоит transfer_money она находиться в папке views
     */
    /**Аттрибут денег TransferChildAccountForm
     * @return TransferMoneyChildAccountForm amount
     */
    public $amount_attribute;
    /**
    * /**
     * Аттрибут валюты TransferChildAccountForm
     * @return TransferMoneyChildAccountForm currency
     */
    public $currency_attribute;
    /**
     * Темлейт страницы например сейчас стоит transfer_money она находиться в папке views
     */
    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_VALIDATE => 'afterValidate',
        ];
    }

    public function afterValidate(){
        Configuration::setInitParams();
        $this->transferMoneyChildAccount();
    }

    public function transferMoneyChildAccount(){
        $owner = $this->owner;
        $managin_account = new ManagingAccountsApi();
        try {
            $managin_account->transferMoneyToChildAccount(
                $owner->{$this->child_account_id_attribute},
                $owner->{$this->amount_attribute},
                $owner->{$this->currency_attribute});
        } catch (ApiException $e) {
            echo 'Exception when calling $managin_account->transferMoneyToChildAccount: ', $e->getMessage(), PHP_EOL;
        }
    }

}