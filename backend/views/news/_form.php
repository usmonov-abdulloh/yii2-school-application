<?php

use coderius\pell\Pell;
use common\models\NewsCategory;
use common\models\StaticFunctions;
use kartik\switchinput\SwitchInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$this->registerJsFile("/backend/web/dist/js/uploadImage.js");
$image = StaticFunctions::getImage('news',$model->id,$model->image);
/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin([
        'options'=>[
            'enctype'=>'multipart/form-data'
        ]
    ]); ?>
    <div class="row">
        <div class="col-md-8">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>
            <?= $form->field($model, 'description')->widget(Pell::className(), []); ?>

        </div>
        <div class="col-md-4">
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
                <img id="image" src="<?=$image?>" width="300px" />
            </label>
            <?= $form->field($model, 'category_id')->dropDownList(
                ArrayHelper::map(NewsCategory::find()->where(['status'=>1])->asArray()->all(), 'id', 'title')
            ) ?>

            <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>

        </div>
    </div>





    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
