<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ReplyKeyboardMarkup */

$this->title = $model->idReplyKeyboardMarkup;
$this->params['breadcrumbs'][] = ['label' => 'Reply Keyboard Markups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reply-keyboard-markup-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idReplyKeyboardMarkup], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idReplyKeyboardMarkup], [
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
            'idReplyKeyboardMarkup',
            'keyboard:ntext',
            'resize_keyboard',
            'one_time_keyboard:datetime',
            'selective',
        ],
    ]) ?>

</div>
