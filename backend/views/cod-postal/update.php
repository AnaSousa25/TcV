<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CodPostal */

$this->title = 'Update Cod Postal: ' . ' ' . $model->idCodPostal;
$this->params['breadcrumbs'][] = ['label' => 'Cod Postals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCodPostal, 'url' => ['view', 'id' => $model->idCodPostal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cod-postal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
