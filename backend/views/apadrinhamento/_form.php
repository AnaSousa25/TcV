<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Apadrinhamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apadrinhamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dataInicio')->textInput() ?>

    <?= $form->field($model, 'dataFim')->textInput() ?>

    <?= $form->field($model, 'nrRenovacoes')->textInput() ?>

    <?= $form->field($model, 'quota')->textInput() ?>

    <?= $form->field($model, 'obs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idAnimal')->textInput() ?>

    <?= $form->field($model, 'idPessoa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
