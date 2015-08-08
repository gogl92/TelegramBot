<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\force_reply */

$this->title = 'Update Force Reply: ' . ' ' . $model->idForeceReply;
$this->params['breadcrumbs'][] = ['label' => 'Force Replies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idForeceReply, 'url' => ['view', 'id' => $model->idForeceReply]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="force-reply-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
