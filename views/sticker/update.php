<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sticker */

$this->title = 'Update Sticker: ' . ' ' . $model->idSticker;
$this->params['breadcrumbs'][] = ['label' => 'Stickers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idSticker, 'url' => ['view', 'id' => $model->idSticker]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sticker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
