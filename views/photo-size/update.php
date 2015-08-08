<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PhotoSize */

$this->title = 'Update Photo Size: ' . ' ' . $model->idPhotoSize;
$this->params['breadcrumbs'][] = ['label' => 'Photo Sizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPhotoSize, 'url' => ['view', 'id' => $model->idPhotoSize]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="photo-size-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
