<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfilePhotos_photos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-profile-photos-photos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idUserProfilePhotos')->textInput() ?>

    <?= $form->field($model, 'PhotoSize_idPhotoSize')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
