<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CodPostal */

$this->title = 'Criar novo Código Postal';
$this->params['breadcrumbs'][] = ['label' => 'Cód. Postais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cod-postal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
