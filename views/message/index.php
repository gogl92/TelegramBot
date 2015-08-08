<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Message', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'message_id',
            'from',
            'date',
            'chat',
            'forward_from',
            // 'forward_date',
            // 'reply_to_message',
            // 'text:ntext',
            // 'audio',
            // 'document:ntext',
            // 'photo',
            // 'sticker',
            // 'video',
            // 'contact',
            // 'location',
            // 'new_chat_participant',
            // 'left_chat_participant',
            // 'new_chat_title:ntext',
            // 'new_chat_photo',
            // 'delete_chat_photo',
            // 'group_chat_created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
