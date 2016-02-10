<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pastoreio */

$this->title = $model->idPastor;
$this->params['breadcrumbs'][] = ['label' => 'Pastoreios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pastoreio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idPastor' => $model->idPastor, 'idRebanho' => $model->idRebanho, 'idExploracao' => $model->idExploracao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idPastor' => $model->idPastor, 'idRebanho' => $model->idRebanho, 'idExploracao' => $model->idExploracao], [
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
            'idPastor',
            'idRebanho',
            'idExploracao',
            'data',
        ],
    ]) ?>

</div>
