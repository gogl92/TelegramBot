<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReplyKeyboardMarkup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reply-keyboard-markup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idReplyKeyboardMarkup')->textInput() ?>

    <?= $form->field($model, 'keyboard')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'resize_keyboard')->textInput() ?>

    <?= $form->field($model, 'one_time_keyboard')->textInput() ?>

    <?= $form->field($model, 'selective')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
