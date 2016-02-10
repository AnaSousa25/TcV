<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Apadrinhamento */

$this->title = 'Create Apadrinhamento';
$this->params['breadcrumbs'][] = ['label' => 'Apadrinhamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apadrinhamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
