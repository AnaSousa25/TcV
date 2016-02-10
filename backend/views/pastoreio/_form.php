<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pastoreio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pastoreio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idPastor')->textInput() ?>

    <?= $form->field($model, 'idRebanho')->textInput() ?>

    <?= $form->field($model, 'idExploracao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
