<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TextRules */

$this->title = $model->id_text_rule;
$this->params['breadcrumbs'][] = ['label' => 'Text Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="text-rules-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_text_rule], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_text_rule], [
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
            'id_text_rule',
            'command',
            'recieved_message',
            'type',
            'action',
            'id_next_rule',
        ],
    ]) ?>

</div>
