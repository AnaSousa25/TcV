<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PessoaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pessoas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pessoa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idPessoa',
            'nome',
            'morada',
            'localidade',
            'concelho',
            // 'distrito',
            // 'idPais',
            // 'codPostal',
            // 'dataNasc',
            // 'genero',
            // 'telef',
            // 'email:email',
            // 'nif',
            // 'idProfissao',
            // 'ativo',
            // 'padrinho',
            // 'nrSocio',
            // 'nrAnimaisApadrinha',
            // 'dataAssociacao',
            // 'pastor',
            // 'dono',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
