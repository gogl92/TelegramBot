<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Command */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="command-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_command')->textInput() ?>

    <?= $form->field($model, 'command_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'command_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'argument')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
