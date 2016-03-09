<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Concelho */

$this->title = 'Concelho: '.$model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Concelhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concelho-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->idConcelho], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Remover', ['delete', 'id' => $model->idConcelho], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza que pretende remover este concelho?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idConcelho',
            'nome',
            'relIdDistrito.nome',
        ],
    ]) ?>

</div>
