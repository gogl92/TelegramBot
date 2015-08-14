<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TextRulesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="text-rules-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_text_rule') ?>

    <?= $form->field($model, 'command') ?>

    <?= $form->field($model, 'recieved_message') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'action') ?>

    <?php // echo $form->field($model, 'id_next_rule') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
