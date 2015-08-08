<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserTelegramSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Telegrams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-telegram-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Telegram', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'username',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
