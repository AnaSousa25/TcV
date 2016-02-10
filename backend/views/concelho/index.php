<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ConcelhoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Concelhos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concelho-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Concelho', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idConcelho',
            'nome',
            'idDistrito',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
