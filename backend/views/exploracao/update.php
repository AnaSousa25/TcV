<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Exploracao */

$this->title = 'Update Exploracao: ' . ' ' . $model->marca;
$this->params['breadcrumbs'][] = ['label' => 'Exploracaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->marca, 'url' => ['view', 'id' => $model->marca]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exploracao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
