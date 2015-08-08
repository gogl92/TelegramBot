<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReplyKeyboardMarkup */

$this->title = 'Update Reply Keyboard Markup: ' . ' ' . $model->idReplyKeyboardMarkup;
$this->params['breadcrumbs'][] = ['label' => 'Reply Keyboard Markups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idReplyKeyboardMarkup, 'url' => ['view', 'id' => $model->idReplyKeyboardMarkup]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reply-keyboard-markup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
