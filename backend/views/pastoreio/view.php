<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pastoreio */

$this->title = 'Pastoreio: '.$model->data;
$this->params['breadcrumbs'][] = ['label' => 'Pastoreio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pastoreio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'idPastor' => $model->idPastor, 'idRebanho' => $model->idRebanho, 'idExploracao' => $model->idExploracao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Remover', ['delete', 'idPastor' => $model->idPastor, 'idRebanho' => $model->idRebanho, 'idExploracao' => $model->idExploracao], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza que pretende remover este registo?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'relIdPastor.nome',
            'relIdRebanho.designacao',
            'relIdExploracao.nome',
            'data',
        ],
    ]) ?>

</div>
