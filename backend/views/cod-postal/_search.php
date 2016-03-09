<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CodPostalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cod-postal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'idCodPostal') ?> -->

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'localidade') ?>

    <?= $form->field($model, 'idConcelho') ?>

    <?= $form->field($model, 'idDistrito') ?>

    <div class="form-group">
        <?= Html::submitButton('Pesquisar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
