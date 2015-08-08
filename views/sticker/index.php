<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StickerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stickers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sticker-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sticker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idSticker',
            'file_id',
            'width',
            'height',
            'thumb',
            // 'file_size',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
