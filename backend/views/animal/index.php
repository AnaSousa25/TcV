<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AnimalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Animals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Animal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idAnimal',
            'marcaAuricular',
            'genero',
            'cor',
            'dataNasc',
            // 'dataMorte',
            // 'nrPai',
            // 'nrMae',
            // 'idRaca',
            // 'idEspecie',
            // 'idRebanho',
            // 'idNucleo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
