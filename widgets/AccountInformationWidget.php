<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.05.2019
 * Time: 21:09
 */

namespace backend\modules\voximplant\widgets;


use backend\modules\voximplant\lib\Api\ManagingAccountsApi;
use backend\modules\voximplant\lib\ApiException;
use backend\modules\voximplant\lib\Configuration;
use yii\bootstrap\Widget;

class AccountInformationWidget extends Widget
{
    /**\backend\modules\voximplant\widgets\AccountInformationWidget::widget(
    [
        'get_information' => [
        'balance'=>'Баланс аккаунта',
        'mobile_phone'=>'Номер телефона',
        'currency'=>'Валюта',
        'location'=>'Локатция'
    ],
        'tpl' => 'balance'
    ]);*/
    /**
     * @author https://www.weblancer.net/users/senior-prog/
     */
    /** Ответный массив информации */
    /**
     * [max_sip_registrations] => 0
        [support_invoice] => 1
        [fixed_balance] => 6.12672
        [account_notifications] => 1
        [news_notifications] => 1
        [callback_url] => http://api-test.lc/
        [account_email] => z2@kit-media.com
        [language_code] => en
        [balance] => 6.12672
        [tariff_changing_notifications] => 1
        [mobile_phone] => 74812631018
        [callback_salt] => gsUU4GGr7395
        [account_name] => kitmediatest
        [is_bank_card_auto_charge_prohibited] => 1
        [credit_limit] => 0
        [currency] => RUR
        [min_balance_to_notify] => 5
        [billing_address_country_code] => RU
        [created] => 2019-05-08 19:04:24
        [active] => 1
        [frozen] =>
        [account_id] => 3043519
        [api_key] => a054ae94-02c1-44ec-8d2f-3de1c3610723
        [support_robokassa] => 1
        [live_balance] => 6.12672
        [location] => Etc/GMT
        [support_bank_card] => 1
        [send_js_error] =>
     */

    public $get_information = [];
    /**
     * @return string|void
     */
    protected $_result;
    /**
     * @return string|void
     */
    public $tpl = 'balance';

    public function run()
    {
        if(!$this->validate()){return false;};
        Configuration::setInitParams();
        $api_managin_accounts  = new ManagingAccountsApi();
        //Вывод Информации пользователя
        try {
            $this->result =  $api_managin_accounts->getAccountInfo();

            return $this->render($this->tpl,$this->informationResult());
        } catch (ApiException $e) {
            echo 'Exception when calling $api_managin_accounts->getAccountInfo(): ', $e->getMessage(), PHP_EOL;
        }
        return false;
    }

    public function validate(){
        if(empty($this->tpl)){return false;}
        if(empty($this->get_information)){return false;}
        return true;
    }



    /**
     *
     */
    public function getResult(){
       return  $this->_result;
    }

    /**
     *
     */
    public function setResult($result){
        if(isset($result['result'])){$result = $result['result'];}
        return  $this->_result = $result;
    }

    /**
     * @param $result
     * @return bool
     */
    public function informationResult(){

        $result = $this->result;
        $response = '';
        if(empty($result)){return false;}
        foreach($this->get_information as $key=>$value){
            if(isset($result[$key])){
                $response.=$value.':'.$result[$key].'</br>';
            }
        }
        return ['data'=>$response];
    }

}