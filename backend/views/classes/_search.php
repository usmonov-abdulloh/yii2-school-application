<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ClassesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'text') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'minSize') ?>

    <?php // echo $form->field($model, 'maxSize') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
