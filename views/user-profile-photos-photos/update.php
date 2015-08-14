<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfilePhotosPhotos */

$this->title = 'Update User Profile Photos Photos: ' . ' ' . $model->idUserProfilePhotos;
$this->params['breadcrumbs'][] = ['label' => 'User Profile Photos Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idUserProfilePhotos, 'url' => ['view', 'idUserProfilePhotos' => $model->idUserProfilePhotos, 'PhotoSize_idPhotoSize' => $model->PhotoSize_idPhotoSize]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-profile-photos-photos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
