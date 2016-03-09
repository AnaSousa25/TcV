<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Rebanho */

$this->title = 'Rebanho: '.$model->designacao;
$this->params['breadcrumbs'][] = ['label' => 'Rebanhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rebanho-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->idRebanho], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Remover', ['delete', 'id' => $model->idRebanho], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza que pretende remover este rebanho?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idRebanho',
            'designacao',
            'relIdNucleo.nome',
        ],
    ]) ?>

</div>
