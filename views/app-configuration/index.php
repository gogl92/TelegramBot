<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\app_configurationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App Configurations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-configuration-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create App Configuration', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_app',
            'api_id',
            'api_hash',
            'app_title',
            'short_name',
            // 'gcm_api_key',
            // 'test_configuration',
            // 'production_configuration',
            // 'public_keys:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
