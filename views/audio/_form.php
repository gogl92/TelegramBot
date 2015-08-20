<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\audio */
/* @var $form ActiveForm */
?>
<div class="audio-_form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'file_id') ?>
        <?= $form->field($model, 'duration') ?>
        <?= $form->field($model, 'id_user') ?>
        <?= $form->field($model, 'mime_type') ?>
        <?= $form->field($model, 'file_size') ?>
        <?= $form->field($model, 'file_name') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- audio-_form -->
