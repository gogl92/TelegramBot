<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\file_rules */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="file-rules-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_file')->textInput() ?>

    <?= $form->field($model, 'id_action')->textInput() ?>

    <?= $form->field($model, 'id_next_rule')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
