<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Profissao */

$this->title = 'Profissão: '.$model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Profissões', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Profissão: '.$model->nome;
?>
<div class="profissao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->idProfissao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Remover', ['delete', 'id' => $model->idProfissao], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza que deseja remover esta profissão?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idProfissao',
            'nome',
        ],
    ]) ?>

</div>
