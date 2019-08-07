<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.05.2019
 * Time: 12:18
 */

namespace backend\modules\voximplant\actions;


use backend\modules\voximplant\forms\TransferMoneyChildAccountForm;
use Yii;
use yii\base\Action;

class TransferMoneyChildAccountAction extends Action
{
    /** нужно в нутри контролерра прописать actions */
   /** public function actions()
    {
        return [
            'transfer-money'=>[
                'class'=>TransferMoneyChildAccountAction::className(),
                'render_path' => 'test',
            ]
        ];
    }*/
    public $render_path;

    public function run(){
        $model = new TransferMoneyChildAccountForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return Yii::$app->controller->render($this->render_path);
        } else {
            return Yii::$app->controller->render($this->render_path);
        }
    }
}