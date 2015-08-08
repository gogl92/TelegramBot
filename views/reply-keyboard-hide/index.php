<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReplyKeyboardHideSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reply Keyboard Hides';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reply-keyboard-hide-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reply Keyboard Hide', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idReplyKeyboardHide',
            'hide_keyboard',
            'selective',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
