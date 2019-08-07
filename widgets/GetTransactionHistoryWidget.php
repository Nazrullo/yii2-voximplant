<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.05.2019
 * Time: 13:09
 */

namespace backend\modules\voximplant\widgets;


use backend\modules\voximplant\lib\Api\ManagingHistoryApi;
use backend\modules\voximplant\lib\ApiException;
use backend\modules\voximplant\lib\Configuration;
use yii\base\Widget;

class GetTransactionHistoryWidget extends Widget
{
    /**
     * https://voximplant.com/docs/references/httpapi/managing_history#gettransactionhistory документация
     */
    /** @var
     *  с даты:
        отметка времени
        Дата начала в выбранном часовом поясе в 24-часовом формате: ГГГГ-ММ-ДД ЧЧ: мм: сс
     *
     */
    public $from_date;
    /**
     * до даты:
        отметка времени
        Дата в выбранном часовом поясе в 24-часовом формате: ГГГГ-ММ-ДД ЧЧ: мм: сс
     */
    public $to_date;
    /**
     *  часовой пояс:
        строка
        ДОПОЛНИТЕЛЬНЫЕ
        ПО УМОЛЧАНИЮ:  Etc / GMT
        Выбранный часовой пояс или значение «auto» (будет использоваться местоположение учетной записи).
     */
    public $timezone = 'Etc / GMT';

    public $transaction_id;

    public $payment_reference;

    public $transaction_type;

    public $user_id;

    public $child_account_id;

    public $children_transaction_only;

    public $user_transaction_only;

    public $desc_order;

    public $response_params_key_and_text = [];

    public $count;

    public $offset;

    public $output;

    public $is_async;

    public $tpl = 'transaction-history';

    public function run(){
        if(!$this->validate()){return false;}
        Configuration::setInitParams();
        $result = $this->requestVoximplant();
        return $this->render($this->tpl,['data'=>$result]);
    }

    public function validate(){
        if(empty($this->from_date)){return false;}
        if(empty($this->to_date)){return false;}
        return true;
    }

    private function requestVoximplant(){

        $api_manager_history = new ManagingHistoryApi();
        //статистики расходов
        try {
            $result =  $api_manager_history->getTransactionHistory(
                $this->from_date,
                $this->to_date,
                $this->timezone,
                $this->transaction_id,
                $this->payment_reference,
                $this->transaction_type,
                $this->user_id,
                $this->child_account_id,
                $this->children_transaction_only,
                $this->user_transaction_only,
                $this->desc_order,
                $this->count,
                $this->offset,
                $this->output,
                $this->is_async
            );

            return $result;
        } catch (ApiException $e) {
            echo 'Exception when calling $api_manager_history->getTransactionHistory: ', $e->getMessage(), PHP_EOL;
        }
        return false;
    }



}