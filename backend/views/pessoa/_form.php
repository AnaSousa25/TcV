<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pessoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'morada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'concelho')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'distrito')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idPais')->textInput() ?>

    <?= $form->field($model, 'codPostal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataNasc')->textInput() ?>

    <?= $form->field($model, 'genero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telef')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idProfissao')->textInput() ?>

    <?= $form->field($model, 'ativo')->textInput() ?>

    <?= $form->field($model, 'padrinho')->textInput() ?>

    <?= $form->field($model, 'nrSocio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nrAnimaisApadrinha')->textInput() ?>

    <?= $form->field($model, 'dataAssociacao')->textInput() ?>

    <?= $form->field($model, 'pastor')->textInput() ?>

    <?= $form->field($model, 'dono')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
