<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sticker */

$this->title = 'Create Sticker';
$this->params['breadcrumbs'][] = ['label' => 'Stickers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sticker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
