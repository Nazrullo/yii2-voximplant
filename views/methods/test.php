<?php
//echo \backend\modules\voximplant\widgets\AccountInformationWidget::widget(
//    [
//        'get_information' => [
//            'balance'=>'Баланс аккаунта',
//            'mobile_phone'=>'Номер телефона',
//            'currency'=>'Валюта',
//            'location'=>'Локатция'
//        ],
//        'tpl' => 'balance'
//    ]);
//?>

<?//=\backend\modules\voximplant\widgets\TransferMoneyChildAccountWidget::widget(['child_account_id' => 3057607])?>
<?=\backend\modules\voximplant\widgets\GetTransactionHistoryWidget::widget(['from_date' =>'2019-05-11 00:00:00','to_date' =>'2019-05-18 00:00:00'])?>