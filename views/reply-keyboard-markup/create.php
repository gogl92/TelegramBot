<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReplyKeyboardMarkup */

$this->title = 'Create Reply Keyboard Markup';
$this->params['breadcrumbs'][] = ['label' => 'Reply Keyboard Markups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reply-keyboard-markup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
