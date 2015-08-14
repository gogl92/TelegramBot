<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TelegramUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Telegram Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telegram-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Telegram User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_telegram_user',
            'country_code',
            'cellphone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
