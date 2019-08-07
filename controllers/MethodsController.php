<?php

namespace backend\modules\voximplant\controllers;
use backend\modules\voximplant\actions\TransferMoneyChildAccountAction;
use backend\modules\voximplant\lib\Api\AccountsAuthenticationApi;
use backend\modules\voximplant\lib\Api\ManagingAccountsApi;
use backend\modules\voximplant\lib\Api\ManagingHistoryApi;
use backend\modules\voximplant\lib\Api\ManagingPhoneNumbersApi;
use backend\modules\voximplant\lib\ApiException;
use backend\modules\voximplant\lib\Configuration;
use yii\web\Controller;

/**
 * Default controller for the `voximplant` module
 */
class MethodsController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actions()
    {
        return [
          'transfer-money'=>[
              'class'=>TransferMoneyChildAccountAction::className(),
              'render_path' => 'test',
          ]
        ];
    }

    public function actionIndex()
    {
        Configuration::setInitParams();
        $managin_account = new ManagingAccountsApi();
        try {
            $result = $managin_account->transferMoneyToChildAccount(34561,2,'USD');
            print_r($result);
        } catch (ApiException $e) {
            echo 'Exception when calling AccountsAuthenticationApi->logon: ', $e->getMessage(), PHP_EOL;
        }


        //Методы Аутентификация аккаунта логин логаут
        $api_instance = new AccountsAuthenticationApi();
        try {
            //Логин
            $result = $api_instance->logon();
            print_r($result);
        } catch (ApiException $e) {
            echo 'Exception when calling AccountsAuthenticationApi->logon: ', $e->getMessage(), PHP_EOL;
        }

//        //Методы управлениями
        $api_manager = new ManagingAccountsApi();
        //Добавление дочерного аккаунта
        try {
            $result =  $api_manager->addAccount('narziktest8','narzikk46@bk.ru','qwerty7817766',true);
            print_r($result);
        } catch (ApiException $e) {
            echo 'Exception when calling AccountsAuthenticationApi->logon: ', $e->getMessage(), PHP_EOL;
        }

//        Привязка номера клиента для исходящих звонков:
        $api_managing_phone_numbers = new ManagingPhoneNumbersApi();
        try {
            $result = $api_managing_phone_numbers->attachPhoneNumber('Сюда все параметры');
            print_r($result);
        } catch (ApiException $e) {
            echo 'Exception when calling AccountsAuthenticationApi->logon: ', $e->getMessage(), PHP_EOL;
        }


        $api_manager_history = new ManagingHistoryApi();
        //статистики расходов
        try {
            $result =  $api_manager_history->getTransactionHistory('Cюда все параметры');
            print_r($result);
        } catch (ApiException $e) {
            echo 'Exception when calling AccountsAuthenticationApi->logon: ', $e->getMessage(), PHP_EOL;
        }

        $api_managin_accounts  = new ManagingAccountsApi();
        //Вывод баланса телефонии
        try {
            $result =  $api_managin_accounts->getAccountInfo('Cюда все параметры');
            print_r($result);
        } catch (ApiException $e) {
            echo 'Exception when calling AccountsAuthenticationApi->logon: ', $e->getMessage(), PHP_EOL;
        }


        $api_managin_history_api  = new ManagingHistoryApi();
        //Получение записей в наш интерфейс аналитики
        try {
            $result =  $api_managin_history_api->getCallHistory('Cюда все параметры');
            print_r($result);
        } catch (ApiException $e) {
            echo 'Exception when calling AccountsAuthenticationApi->logon: ', $e->getMessage(), PHP_EOL;
        }

        return $this->render('index');
    }

}
