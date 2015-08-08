<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GroupChat */

$this->title = 'Update Group Chat: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Group Chats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->idGroupChat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="group-chat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
