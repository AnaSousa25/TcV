<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Animal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'marcaAuricular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataNasc')->textInput() ?>

    <?= $form->field($model, 'dataMorte')->textInput() ?>

    <?= $form->field($model, 'nrPai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nrMae')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idRaca')->textInput() ?>

    <?= $form->field($model, 'idEspecie')->textInput() ?>

    <?= $form->field($model, 'idRebanho')->textInput() ?>

    <?= $form->field($model, 'idNucleo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
