<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ApadrinhamentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apadrinhamento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idApadrinhamento') ?>

    <?= $form->field($model, 'dataInicio') ?>

    <?= $form->field($model, 'dataFim') ?>

    <?= $form->field($model, 'nrRenovacoes') ?>

    <?= $form->field($model, 'quota') ?>

    <?php // echo $form->field($model, 'obs') ?>

    <?php // echo $form->field($model, 'idAnimal') ?>

    <?php // echo $form->field($model, 'idPessoa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
