<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Nucleo */

$this->title = 'Núcleo: '.$model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Núcleos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nucleo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->idNucleo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Remover', ['delete', 'id' => $model->idNucleo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza que deseja remover esta exploração?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idNucleo',
            'nome',
            'parcelario',
            'local',
            'marcaExploracao',
        ],
    ]) ?>

</div>
