<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Profissao */

$this->title = 'Create Profissao';
$this->params['breadcrumbs'][] = ['label' => 'Profissaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profissao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
