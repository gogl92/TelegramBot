<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bot */

$this->title = 'Create Bot';
$this->params['breadcrumbs'][] = ['label' => 'Bots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bot-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
