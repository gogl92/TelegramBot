<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\file_rules */

$this->title = 'Update File Rules: ' . ' ' . $model->id_file_rules;
$this->params['breadcrumbs'][] = ['label' => 'File Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_file_rules, 'url' => ['view', 'id' => $model->id_file_rules]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="file-rules-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
