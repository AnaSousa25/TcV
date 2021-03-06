<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PastoreioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pastoreios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pastoreio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Novo Pastoreio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'idPastor',
                'value' => 'relIdPastor', 
            ],

            [
                'attribute' => 'idRebanho',
                'value' => 'relIdRebanho', 
            ],

            [
                'attribute' => 'idExploracao',
                'value' => 'relIdExploracao', 
            ],

            'data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
