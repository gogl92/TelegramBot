<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReplyKeyboardMarkupSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reply-keyboard-markup-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idReplyKeyboardMarkup') ?>

    <?= $form->field($model, 'keyboard') ?>

    <?= $form->field($model, 'resize_keyboard') ?>

    <?= $form->field($model, 'one_time_keyboard') ?>

    <?= $form->field($model, 'selective') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
