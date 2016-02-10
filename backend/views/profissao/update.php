<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Profissao */

$this->title = 'Update Profissao: ' . ' ' . $model->idProfissao;
$this->params['breadcrumbs'][] = ['label' => 'Profissaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idProfissao, 'url' => ['view', 'id' => $model->idProfissao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profissao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
