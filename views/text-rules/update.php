<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TextRules */

$this->title = 'Update Text Rules: ' . ' ' . $model->id_text_rule;
$this->params['breadcrumbs'][] = ['label' => 'Text Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_text_rule, 'url' => ['view', 'id' => $model->id_text_rule]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="text-rules-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
