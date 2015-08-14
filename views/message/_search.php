<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MessageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="message-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_message') ?>

    <?= $form->field($model, 'message_id') ?>

    <?= $form->field($model, 'from_user') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'chat') ?>

    <?php // echo $form->field($model, 'forward_from') ?>

    <?php // echo $form->field($model, 'forward_date') ?>

    <?php // echo $form->field($model, 'reply_to_message') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'audio') ?>

    <?php // echo $form->field($model, 'document') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'sticker') ?>

    <?php // echo $form->field($model, 'video') ?>

    <?php // echo $form->field($model, 'caption') ?>

    <?php // echo $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'new_chat_participant') ?>

    <?php // echo $form->field($model, 'left_chat_participant') ?>

    <?php // echo $form->field($model, 'new_chat_title') ?>

    <?php // echo $form->field($model, 'new_chat_photo') ?>

    <?php // echo $form->field($model, 'delete_chat_photo') ?>

    <?php // echo $form->field($model, 'group_chat_created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
