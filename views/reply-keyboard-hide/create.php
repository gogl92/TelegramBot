<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReplyKeyboardHide */

$this->title = 'Create Reply Keyboard Hide';
$this->params['breadcrumbs'][] = ['label' => 'Reply Keyboard Hides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reply-keyboard-hide-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
