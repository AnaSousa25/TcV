<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CodPostalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cód. Postais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cod-postal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Novo Código Postal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idCodPostal',
            'codigo',
            'localidade',
            [
                'attribute' => 'idConcelho',
                'value' => 'relIdConcelho.nome',
            ],
            [
                'attribute' => 'idDistrito',
                'value' => 'relIdDistrito.nome',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
