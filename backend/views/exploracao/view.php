<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Exploracao */

$this->title = $model->marca;
$this->params['breadcrumbs'][] = ['label' => 'Exploracaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exploracao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->marca], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->marca], [
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
            'marca',
            'nome',
            'idDono',
        ],
    ]) ?>

</div>
