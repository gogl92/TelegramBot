<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\file_rules */

$this->title = $model->id_file_rules;
$this->params['breadcrumbs'][] = ['label' => 'File Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-rules-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_file_rules], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_file_rules], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_file_rules',
            'id_file',
            'id_action',
            'id_next_rule',
        ],
    ]) ?>

</div>
