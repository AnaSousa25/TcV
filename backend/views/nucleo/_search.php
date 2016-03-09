<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NucleoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nucleo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'idNucleo') ?> -->

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'parcelario') ?>

    <?= $form->field($model, 'local') ?>

    <?= $form->field($model, 'marcaExploracao') ?>

    <div class="form-group">
        <?= Html::submitButton('Pesquisar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
