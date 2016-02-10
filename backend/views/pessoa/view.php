<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pessoa */

$this->title = $model->idPessoa;
$this->params['breadcrumbs'][] = ['label' => 'Pessoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idPessoa' => $model->idPessoa, 'idPais' => $model->idPais, 'idProfissao' => $model->idProfissao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idPessoa' => $model->idPessoa, 'idPais' => $model->idPais, 'idProfissao' => $model->idProfissao], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idPessoa',
            'nome',
            'morada',
            'localidade',
            'concelho',
            'distrito',
            'idPais',
            'codPostal',
            'dataNasc',
            'genero',
            'telef',
            'email:email',
            'nif',
            'idProfissao',
            'ativo',
            'padrinho',
            'nrSocio',
            'nrAnimaisApadrinha',
            'dataAssociacao',
            'pastor',
            'dono',
        ],
    ]) ?>

</div>
