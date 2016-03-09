<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Raca */

$this->title = 'Atualizar: ' . ' ' . $model->designacao;
$this->params['breadcrumbs'][] = ['label' => 'Raças', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->idRaca, 'url' => ['view', 'id' => $model->idRaca]];
$this->params['breadcrumbs'][] = 'Atualizar: '. $model->designacao;
?>
<div class="raca-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
