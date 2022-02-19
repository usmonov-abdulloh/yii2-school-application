<?php

use common\models\Menu;
use kartik\switchinput\SwitchInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;



/* @var $this yii\web\View */
/* @var $model common\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->dropDownList(ArrayHelper::map(Menu::find()->asArray()->all(), 'id', 'name'),['prompt'=>'Tanlang']) ?>

    <?= $form->field($model, 'order_by')->textInput() ?>

    <?=$form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
