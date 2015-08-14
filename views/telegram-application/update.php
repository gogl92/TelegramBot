<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TelegramApplication */

$this->title = 'Update Telegram Application: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Telegram Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_application]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="telegram-application-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
