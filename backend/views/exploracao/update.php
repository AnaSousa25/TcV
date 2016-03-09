<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Exploracao */

$this->title = 'Exploração: ' . ' ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Explorações', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->marca, 'url' => ['view', 'id' => $model->marca]];
$this->params['breadcrumbs'][] = 'Atualizar: ' . $model->nome;
?>
<div class="exploracao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
