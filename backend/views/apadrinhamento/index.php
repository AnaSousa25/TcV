<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ApadrinhamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apadrinhamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apadrinhamento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Apadrinhamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idApadrinhamento',
            'dataInicio',
            'dataFim',
            'nrRenovacoes',
            'quota',
            // 'obs',
            // 'idAnimal',
            // 'idPessoa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
