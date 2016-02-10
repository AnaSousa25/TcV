<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CodPostal */

$this->title = $model->idCodPostal;
$this->params['breadcrumbs'][] = ['label' => 'Cod Postals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cod-postal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idCodPostal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idCodPostal], [
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
            'idCodPostal',
            'codigo',
            'localidade',
            'idConcelho',
            'idDistrito',
        ],
    ]) ?>

</div>
