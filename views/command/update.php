<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\command */

$this->title = 'Update Command: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Commands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_bot]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="command-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
