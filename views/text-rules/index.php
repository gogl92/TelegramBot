<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TextRulesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Text Rules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="text-rules-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Text Rules', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_text_rule',
            'command',
            'recieved_message',
            'type',
            'action',
            // 'id_next_rule',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
