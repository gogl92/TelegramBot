<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhotoSizeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Photo Sizes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-size-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Photo Size', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idPhotoSize',
            'file_id',
            'width',
            'height',
            'file_size',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
