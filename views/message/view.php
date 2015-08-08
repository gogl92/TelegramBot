<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Message */

$this->title = $model->message_id;
$this->params['breadcrumbs'][] = ['label' => 'Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->message_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->message_id], [
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
            'message_id',
            'from',
            'date',
            'chat',
            'forward_from',
            'forward_date',
            'reply_to_message',
            'text:ntext',
            'audio',
            'document:ntext',
            'photo',
            'sticker',
            'video',
            'contact',
            'location',
            'new_chat_participant',
            'left_chat_participant',
            'new_chat_title:ntext',
            'new_chat_photo',
            'delete_chat_photo',
            'group_chat_created',
        ],
    ]) ?>

</div>
