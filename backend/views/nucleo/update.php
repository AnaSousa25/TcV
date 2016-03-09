<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Nucleo */

$this->title = 'Núcleo: ' . ' ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Núcleos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->idNucleo, 'url' => ['view', 'id' => $model->idNucleo]];
$this->params['breadcrumbs'][] = 'Atualizar: '. $model->nome;
?>
<div class="nucleo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
