<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Raca */

$this->title = 'Criar nova Raça';
$this->params['breadcrumbs'][] = ['label' => 'Raças', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raca-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
