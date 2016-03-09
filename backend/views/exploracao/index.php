<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ExploracaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Explorações';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exploracao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nova Exploração', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'marca',
            'nome',
            
            [
                'attribute' => 'idDono',
                'value' => 'relIdDono.nome',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
