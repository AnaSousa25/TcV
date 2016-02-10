<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Apadrinhamento */

$this->title = 'Update Apadrinhamento: ' . ' ' . $model->idApadrinhamento;
$this->params['breadcrumbs'][] = ['label' => 'Apadrinhamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idApadrinhamento, 'url' => ['view', 'id' => $model->idApadrinhamento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apadrinhamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
