<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\file_rulesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="file-rules-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_file_rules') ?>

    <?= $form->field($model, 'id_file') ?>

    <?= $form->field($model, 'id_action') ?>

    <?= $form->field($model, 'id_next_rule') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
