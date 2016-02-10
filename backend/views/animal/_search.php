<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AnimalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idAnimal') ?>

    <?= $form->field($model, 'marcaAuricular') ?>

    <?= $form->field($model, 'genero') ?>

    <?= $form->field($model, 'cor') ?>

    <?= $form->field($model, 'dataNasc') ?>

    <?php // echo $form->field($model, 'dataMorte') ?>

    <?php // echo $form->field($model, 'nrPai') ?>

    <?php // echo $form->field($model, 'nrMae') ?>

    <?php // echo $form->field($model, 'idRaca') ?>

    <?php // echo $form->field($model, 'idEspecie') ?>

    <?php // echo $form->field($model, 'idRebanho') ?>

    <?php // echo $form->field($model, 'idNucleo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
