<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use backend\models\Distrito;
use backend\models\Concelho;

/* @var $this yii\web\View */
/* @var $model backend\models\CodPostal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cod-postal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idConcelho')->dropDownList( 
            ArrayHelper::map(Concelho::find()->all(), 'idConcelho', 'nome'), ['prompt' => 'Escolher Concelho']) ?>

    <?= $form->field($model, 'idDistrito')->dropDownList( 
            ArrayHelper::map(Distrito::find()->all(), 'idDistrito', 'nome'), ['prompt' => 'Escolher Distrito']) ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
