<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TelegramApplicationrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="telegram-application-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_application') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'key_application') ?>

    <?= $form->field($model, 'hash_application') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
