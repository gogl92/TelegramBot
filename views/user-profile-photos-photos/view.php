<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfilePhotosPhotos */

$this->title = $model->idUserProfilePhotos;
$this->params['breadcrumbs'][] = ['label' => 'User Profile Photos Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-photos-photos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idUserProfilePhotos' => $model->idUserProfilePhotos, 'PhotoSize_idPhotoSize' => $model->PhotoSize_idPhotoSize], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idUserProfilePhotos' => $model->idUserProfilePhotos, 'PhotoSize_idPhotoSize' => $model->PhotoSize_idPhotoSize], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idUserProfilePhotos',
            'PhotoSize_idPhotoSize',
        ],
    ]) ?>

</div>
