<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TextRules */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="text-rules-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'command')->textInput() ?>

    <?= $form->field($model, 'recieved_message')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action')->textInput() ?>

    <?= $form->field($model, 'id_next_rule')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
