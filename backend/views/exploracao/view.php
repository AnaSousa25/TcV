<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Exploracao */

$this->title = $model->marca;
$this->params['breadcrumbs'][] = ['label' => 'Explorações', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exploracao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->marca], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Remover', ['delete', 'id' => $model->marca], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza que pretende remover esta exploração?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'marca',
            'nome',
            'relIdDono.nome',
        ],
    ]) ?>

</div>
