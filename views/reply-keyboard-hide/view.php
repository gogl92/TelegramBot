<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ReplyKeyboardHide */

$this->title = $model->idReplyKeyboardHide;
$this->params['breadcrumbs'][] = ['label' => 'Reply Keyboard Hides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reply-keyboard-hide-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idReplyKeyboardHide], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idReplyKeyboardHide], [
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
            'idReplyKeyboardHide',
            'hide_keyboard',
            'selective',
        ],
    ]) ?>

</div>
