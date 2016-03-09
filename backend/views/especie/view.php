<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Especie */

$this->title = 'Espécie: '.$model->designacao;
$this->params['breadcrumbs'][] = ['label' => 'Espécies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="especie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->idEspecie], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Remover', ['delete', 'id' => $model->idEspecie], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza que deseja remover esta espécie?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idEspecie',
            'designacao',
        ],
    ]) ?>

</div>
