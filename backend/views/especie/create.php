<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Especie */

$this->title = 'Criar nova Espécie';
$this->params['breadcrumbs'][] = ['label' => 'Espécies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="especie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
