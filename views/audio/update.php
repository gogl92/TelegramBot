<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Audio */

$this->title = 'Update Audio: ' . ' ' . $model->idAudio;
$this->params['breadcrumbs'][] = ['label' => 'Audios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAudio, 'url' => ['view', 'id' => $model->idAudio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
