<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReplyKeyboardHideSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reply-keyboard-hide-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idReplyKeyboardHide') ?>

    <?= $form->field($model, 'hide_keyboard') ?>

    <?= $form->field($model, 'selective') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
