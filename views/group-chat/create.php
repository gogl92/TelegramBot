<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GroupChat */

$this->title = 'Create Group Chat';
$this->params['breadcrumbs'][] = ['label' => 'Group Chats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-chat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
