<?php

use coderius\pell\Pell;
use common\models\StaticFunctions;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$this->registerJsFile("/backend/web/dist/js/uploadImage.js");
$image = StaticFunctions::getImage('classes',$model->id,$model->image);

/* @var $this yii\web\View */
/* @var $model common\models\Classes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classes-form">

    <?php $form = ActiveForm::begin([
        'options'=>[
            'enctype'=>'multipart/form-data'
        ]
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(Pell::className(), []);?>

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

    <?= $form->field($model,'date')->widget(DatePicker::classname(), [
        'options' => [
                'placeholder' => 'Enter birth date ...',
        ],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
    ])?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'minSize')->textInput() ?>

    <?= $form->field($model, 'maxSize')->textInput() ?>


    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
