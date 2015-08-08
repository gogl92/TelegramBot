<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\force_reply */

$this->title = 'Create Force Reply';
$this->params['breadcrumbs'][] = ['label' => 'Force Replies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="force-reply-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
