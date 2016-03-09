<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Exploracao */

$this->title = 'Criar nova Exploração';
$this->params['breadcrumbs'][] = ['label' => 'Explorações', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exploracao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
