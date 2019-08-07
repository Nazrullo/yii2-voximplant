<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.05.2019
 * Time: 11:48
 */

namespace backend\modules\voximplant\forms;


use backend\modules\voximplant\behaviors\TransferMoneyChildAccount;
use yii\base\Model;

class TransferMoneyChildAccountForm extends Model
{
    public $amount;

    public $currency;

    public $child_account_id;


    public function behaviors()
    {
        return [
            'transferMoneyChildAccount'=>[
                'class'=>TransferMoneyChildAccount::className(),
                'child_account_id_attribute' => 'child_account_id',
                'amount_attribute' => 'amount',
                'currency_attribute' => 'currency',
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amount', 'child_account_id'], 'integer'],
            [['amount', 'child_account_id','currency'], 'required'],
            [['currency'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'amount' => 'Amount',
            'child_account_id' => 'Child account id',
            'currency' => 'Currency',
        ];
    }

}