<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Distrito */

$this->title = 'Distrito: ' . ' ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Distritos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->idDistrito, 'url' => ['view', 'id' => $model->idDistrito]];
$this->params['breadcrumbs'][] = 'Atualizar: '. $model->nome;
?>
<div class="distrito-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
