<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\app_configuration */

$this->title = $model->id_app;
$this->params['breadcrumbs'][] = ['label' => 'App Configurations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-configuration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_app], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_app], [
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
            'id_app',
            'api_id',
            'api_hash',
            'app_title',
            'short_name',
            'gcm_api_key',
            'test_configuration',
            'production_configuration',
            'public_keys:ntext',
        ],
    ]) ?>

</div>
