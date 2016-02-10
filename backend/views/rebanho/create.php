<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Rebanho */

$this->title = 'Create Rebanho';
$this->params['breadcrumbs'][] = ['label' => 'Rebanhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rebanho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
