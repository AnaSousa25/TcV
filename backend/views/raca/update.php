<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Raca */

$this->title = 'Update Raca: ' . ' ' . $model->idRaca;
$this->params['breadcrumbs'][] = ['label' => 'Racas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idRaca, 'url' => ['view', 'id' => $model->idRaca]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="raca-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
