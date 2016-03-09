<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Raca */

$this->title = 'Raça: '.''.$model->designacao;
$this->params['breadcrumbs'][] = ['label' => 'Raças', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raca-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->idRaca], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Remover', ['delete', 'id' => $model->idRaca], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza que deseja remover esta raça?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idRaca',
            'designacao',
        ],
    ]) ?>

</div>
