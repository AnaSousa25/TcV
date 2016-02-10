<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Rebanho */

$this->title = $model->idRebanho;
$this->params['breadcrumbs'][] = ['label' => 'Rebanhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rebanho-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idRebanho], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idRebanho], [
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
            'idRebanho',
            'designacao',
            'idNucleo',
        ],
    ]) ?>

</div>
