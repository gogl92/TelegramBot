<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\force_reply */

$this->title = $model->idForeceReply;
$this->params['breadcrumbs'][] = ['label' => 'Force Replies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="force-reply-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idForeceReply], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idForeceReply], [
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
            'idForeceReply',
            'force_reply',
            'selective',
        ],
    ]) ?>

</div>
