<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Command */

$this->title = 'Update Command: ' . ' ' . $model->id_command;
$this->params['breadcrumbs'][] = ['label' => 'Commands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_command, 'url' => ['view', 'id' => $model->id_command]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="command-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
