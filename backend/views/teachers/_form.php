<?php

use coderius\pell\Pell;
use common\models\StaticFunctions;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->registerJsFile("/backend/web/dist/js/uploadImage.js");
$image = StaticFunctions::getImage('teachers',$model->id,$model->image);


/* @var $this yii\web\View */
/* @var $model common\models\Teachers */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin([
        'options'=>[
            'enctype'=>'multipart/form-data'
        ]
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(Pell::className(), []);?>

    <?=$form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>

    <label for="image">
        <?= $form->field($model, 'image',[
            'template'=>"
                       <div class='mb-3'>
                            {label}
                            {input}
                            {error}
                        </div>
            ",
            'labelOptions'=>['class'=>'form-label'],
            'inputOptions'=>['class'=>'form-control','id'=>'imgInp'],
        ])->textInput(['type'=>'file']) ?>
        <img id="image" src="<?=$image?>" style="border: 1px solid #000;" width="300px" />
    </label>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
