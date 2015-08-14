<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Message */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_message')->textInput() ?>

    <?= $form->field($model, 'message_id')->textInput() ?>

    <?= $form->field($model, 'from_user')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'chat')->textInput() ?>

    <?= $form->field($model, 'forward_from')->textInput() ?>

    <?= $form->field($model, 'forward_date')->textInput() ?>

    <?= $form->field($model, 'reply_to_message')->textInput() ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'audio')->textInput() ?>

    <?= $form->field($model, 'document')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'photo')->textInput() ?>

    <?= $form->field($model, 'sticker')->textInput() ?>

    <?= $form->field($model, 'video')->textInput() ?>

    <?= $form->field($model, 'caption')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact')->textInput() ?>

    <?= $form->field($model, 'location')->textInput() ?>

    <?= $form->field($model, 'new_chat_participant')->textInput() ?>

    <?= $form->field($model, 'left_chat_participant')->textInput() ?>

    <?= $form->field($model, 'new_chat_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'new_chat_photo')->textInput() ?>

    <?= $form->field($model, 'delete_chat_photo')->textInput() ?>

    <?= $form->field($model, 'group_chat_created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
