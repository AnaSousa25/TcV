<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PessoaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idPessoa') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'morada') ?>

    <?= $form->field($model, 'localidade') ?>

    <?= $form->field($model, 'concelho') ?>

    <?php // echo $form->field($model, 'distrito') ?>

    <?php // echo $form->field($model, 'idPais') ?>

    <?php // echo $form->field($model, 'codPostal') ?>

    <?php // echo $form->field($model, 'dataNasc') ?>

    <?php // echo $form->field($model, 'genero') ?>

    <?php // echo $form->field($model, 'telef') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'nif') ?>

    <?php // echo $form->field($model, 'idProfissao') ?>

    <?php // echo $form->field($model, 'ativo') ?>

    <?php // echo $form->field($model, 'padrinho') ?>

    <?php // echo $form->field($model, 'nrSocio') ?>

    <?php // echo $form->field($model, 'nrAnimaisApadrinha') ?>

    <?php // echo $form->field($model, 'dataAssociacao') ?>

    <?php // echo $form->field($model, 'pastor') ?>

    <?php // echo $form->field($model, 'dono') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
