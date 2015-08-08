<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserProfilePhotos_photosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Profile Photos Photos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-photos-photos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Profile Photos Photos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idUserProfilePhotos',
            'PhotoSize_idPhotoSize',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
