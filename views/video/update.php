<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\video */

$this->title = 'Update Video: ' . ' ' . $model->idvideo;
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idvideo, 'url' => ['view', 'id' => $model->idvideo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="video-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
