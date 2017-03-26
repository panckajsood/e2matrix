<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SessionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Session Maps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="session-map-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Session Map', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'descr:ntext',
            'duration',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
