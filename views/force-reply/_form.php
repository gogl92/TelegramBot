<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\force_reply */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="force-reply-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'force_reply')->textInput() ?>

    <?= $form->field($model, 'selective')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
