<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bots';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bot-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bot', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_bot',
            'name',
            'username',
            'description',
            'about',
            // 'bot_picture',
            // 'join_groups',
            // 'privacy',
            // 'deletebot',
            // 'http_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
