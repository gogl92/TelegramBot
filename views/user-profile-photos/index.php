<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserProfilePhotosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Profile Photos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-photos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Profile Photos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idUserProfilePhotos',
            'total_count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
