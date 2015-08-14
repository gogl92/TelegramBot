<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TelegramApplication */

$this->title = 'Create Telegram Application';
$this->params['breadcrumbs'][] = ['label' => 'Telegram Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telegram-application-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
