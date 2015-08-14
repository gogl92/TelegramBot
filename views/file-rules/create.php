<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\file_rules */

$this->title = 'Create File Rules';
$this->params['breadcrumbs'][] = ['label' => 'File Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-rules-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
