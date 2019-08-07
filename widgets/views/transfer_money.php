<?php
    $form = \yii\widgets\ActiveForm::begin(['action' => $action]);
   echo $form->field($model,'child_account_id')->hiddenInput()->label(false);
   echo $form->field($model,'amount')->textInput();
   echo $form->field($model,'currency')->textInput();
   echo \yii\helpers\Html::submitButton();

\yii\widgets\ActiveForm::end();?>