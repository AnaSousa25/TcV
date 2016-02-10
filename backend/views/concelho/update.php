<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Concelho */

$this->title = 'Update Concelho: ' . ' ' . $model->idConcelho;
$this->params['breadcrumbs'][] = ['label' => 'Concelhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idConcelho, 'url' => ['view', 'id' => $model->idConcelho]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="concelho-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
