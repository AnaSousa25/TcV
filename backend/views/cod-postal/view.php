<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CodPostal */

$this->title = 'Cód. Postal: '.$model->codigo;
$this->params['breadcrumbs'][] = ['label' => 'Cód. Postais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cod-postal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->idCodPostal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Remover', ['delete', 'id' => $model->idCodPostal], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza que deseja remover este código postal?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idCodPostal',
            'codigo',
            'localidade',
            'relIdConcelho.nome',
            'relIdDistrito.nome',
        ],
    ]) ?>

</div>
