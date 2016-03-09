<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pais */

$this->title = 'País: ' . ' ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Países', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->idPais, 'url' => ['view', 'id' => $model->idPais]];
$this->params['breadcrumbs'][] = 'Atualizar: ' . $model->nome;
?>
<div class="pais-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
