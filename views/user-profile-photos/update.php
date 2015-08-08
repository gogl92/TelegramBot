<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfilePhotos */

$this->title = 'Update User Profile Photos: ' . ' ' . $model->idUserProfilePhotos;
$this->params['breadcrumbs'][] = ['label' => 'User Profile Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idUserProfilePhotos, 'url' => ['view', 'id' => $model->idUserProfilePhotos]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-profile-photos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
