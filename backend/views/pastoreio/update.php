<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pastoreio */

$this->title = 'Update Pastoreio: ' . ' ' . $model->idPastor;
$this->params['breadcrumbs'][] = ['label' => 'Pastoreios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPastor, 'url' => ['view', 'idPastor' => $model->idPastor, 'idRebanho' => $model->idRebanho, 'idExploracao' => $model->idExploracao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pastoreio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
