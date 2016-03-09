<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Pastoreio */

$this->title = 'Criar novo Pastoreio';
$this->params['breadcrumbs'][] = ['label' => 'Pastoreio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pastoreio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
