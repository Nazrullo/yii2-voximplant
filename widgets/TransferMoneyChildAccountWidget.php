<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.05.2019
 * Time: 11:39
 */

namespace backend\modules\voximplant\widgets;


use backend\modules\voximplant\models\VoximplantUsers;
use backend\modules\voximplant\forms\TransferMoneyChildAccountForm;
use yii\base\Widget;

class TransferMoneyChildAccountWidget extends Widget
{
    /** пример использование виджета */
    /** <?=\backend\modules\voximplant\widgets\TransferMoneyChildAccountWidget::widget(['child_account_id' => 3057607])?> */
    /**  @author https://www.weblancer.net/users/senior-prog/  */
    /**
     * @return VoximplantUsers account_id
     */
    public $child_account_id;
    /**
     * Темлейт страницы например сейчас стоит transfer_money она находиться в папке views
     */
    public $tpl = 'transfer_money';
    /**
     * @return bool|string
     */
    public $action = 'transfer-money';

    public function run(){
        if($this->validate()){return false;}
        return $this->render('transfer_money',['model'=>$this->transferFormModel(),'action'=>$this->action]);
    }
    public function validate(){
        if(empty($this->child_account_id)){return false;}
        if(empty($this->child_api_key)){return false;}
        return true;
    }

    public function transferFormModel(){
        $model = new TransferMoneyChildAccountForm();
        $model->child_account_id = $this->child_account_id;
        return $model;
    }

}