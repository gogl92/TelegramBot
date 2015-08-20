<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use app\models\Audio;

/* @var $this yii\web\View */
/* @var $model app\models\audio */
/* @var $form ActiveForm */
?>
<div class="audio_form">

    <?php $form = ActiveForm::begin([
                    'options' => ['enctype' => 'multipart/form-data']
        ]); ?>

		<?php
		// Usage with ActiveForm and model
		echo $form->field($model, 'file_name')->widget(FileInput::classname(), [
		    'options' => ['accept' => 'image/*'],
		]);
		
		?>

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
