<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Exploracao */

$this->title = 'Create Exploracao';
$this->params['breadcrumbs'][] = ['label' => 'Exploracaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exploracao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
