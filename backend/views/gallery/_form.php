<?php

use common\models\StaticFunctions;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->registerJsFile("/backend/web/dist/js/uploadImage.js");
$image = StaticFunctions::getImage('gallery',$model->id,$model->main_image);
/* @var $this yii\web\View */
/* @var $model common\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">

    <?php $form = ActiveForm::begin([
        'options'=>[
            'enctype'=>'multipart/form-data'
        ]
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <label for="image">
        <?= $form->field($model, 'imageFile',[
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
        <img id="image" src="<?=$image?>" width="300px" />
    </label>


    <?=$form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
