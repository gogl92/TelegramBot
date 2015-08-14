<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\file_rulesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'File Rules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-rules-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create File Rules', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_file_rules',
            'id_file',
            'id_action',
            'id_next_rule',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
