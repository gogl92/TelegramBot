<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\force_replySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Force Replies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="force-reply-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Force Reply', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idForeceReply',
            'force_reply',
            'selective',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
