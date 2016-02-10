<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Especie */

$this->title = 'Update Especie: ' . ' ' . $model->idEspecie;
$this->params['breadcrumbs'][] = ['label' => 'Especies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEspecie, 'url' => ['view', 'id' => $model->idEspecie]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="especie-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
