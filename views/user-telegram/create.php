<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserTelegram */

$this->title = 'Create User Telegram';
$this->params['breadcrumbs'][] = ['label' => 'User Telegrams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-telegram-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
