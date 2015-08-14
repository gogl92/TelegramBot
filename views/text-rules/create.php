<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TextRules */

$this->title = 'Create Text Rules';
$this->params['breadcrumbs'][] = ['label' => 'Text Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="text-rules-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
