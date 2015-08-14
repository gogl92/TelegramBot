<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TelegramUser */

$this->title = 'Create Telegram User';
$this->params['breadcrumbs'][] = ['label' => 'Telegram Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telegram-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
