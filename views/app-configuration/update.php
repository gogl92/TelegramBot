<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\app_configuration */

$this->title = 'Update App Configuration: ' . ' ' . $model->id_app;
$this->params['breadcrumbs'][] = ['label' => 'App Configurations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_app, 'url' => ['view', 'id' => $model->id_app]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-configuration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
