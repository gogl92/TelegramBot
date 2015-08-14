<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\app_configurationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-configuration-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_app') ?>

    <?= $form->field($model, 'api_id') ?>

    <?= $form->field($model, 'api_hash') ?>

    <?= $form->field($model, 'app_title') ?>

    <?= $form->field($model, 'short_name') ?>

    <?php // echo $form->field($model, 'gcm_api_key') ?>

    <?php // echo $form->field($model, 'test_configuration') ?>

    <?php // echo $form->field($model, 'production_configuration') ?>

    <?php // echo $form->field($model, 'public_keys') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
