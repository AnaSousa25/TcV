<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Rebanho */

$this->title = 'Update Rebanho: ' . ' ' . $model->idRebanho;
$this->params['breadcrumbs'][] = ['label' => 'Rebanhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idRebanho, 'url' => ['view', 'id' => $model->idRebanho]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rebanho-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
