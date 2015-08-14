<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TelegramUser */

$this->title = 'Update Telegram User: ' . ' ' . $model->id_telegram_user;
$this->params['breadcrumbs'][] = ['label' => 'Telegram Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_telegram_user, 'url' => ['view', 'id' => $model->id_telegram_user]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="telegram-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
