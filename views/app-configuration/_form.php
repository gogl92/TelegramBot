<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\app_configuration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-configuration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_app')->textInput() ?>

    <?= $form->field($model, 'api_id')->textInput() ?>

    <?= $form->field($model, 'api_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'app_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gcm_api_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_configuration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'production_configuration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'public_keys')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
