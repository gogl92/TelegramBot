<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReplyKeyboardMarkupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reply Keyboard Markups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reply-keyboard-markup-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reply Keyboard Markup', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idReplyKeyboardMarkup',
            'keyboard:ntext',
            'resize_keyboard',
            'one_time_keyboard:datetime',
            'selective',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
