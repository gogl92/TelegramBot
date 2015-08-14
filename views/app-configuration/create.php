<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\app_configuration */

$this->title = 'Create App Configuration';
$this->params['breadcrumbs'][] = ['label' => 'App Configurations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-configuration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
