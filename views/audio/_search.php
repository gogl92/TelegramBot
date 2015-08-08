<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AudioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idAudio') ?>

    <?= $form->field($model, 'file_id') ?>

    <?= $form->field($model, 'duration') ?>

    <?= $form->field($model, 'mime_type') ?>

    <?= $form->field($model, 'file_size') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
