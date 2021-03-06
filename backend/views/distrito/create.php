<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Distrito */

$this->title = 'Criar novo Distrito';
$this->params['breadcrumbs'][] = ['label' => 'Distritos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distrito-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
