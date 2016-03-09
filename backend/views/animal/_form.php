<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use backend\models\Raca;
use backend\models\Especie;
use backend\models\Rebanho;
use backend\models\Nucleo;

/* @var $this yii\web\View */
/* @var $model backend\models\Animal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'marcaAuricular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero')->dropDownList(['M' => 'Masculino', 'F' => 'Feminino'], ['prompt' => 'Escolha o género']) ?>

    <?= $form->field($model, 'cor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataNasc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataMorte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nrPai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nrMae')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idEspecie')->dropDownList( 
            ArrayHelper::map(Especie::find()->all(), 'idEspecie', 'designacao'), ['prompt' => 'Escolher Espécie']) ?>

    <?= $form->field($model, 'idRaca')->dropDownList( 
            ArrayHelper::map(Raca::find()->all(), 'idRaca', 'designacao'), ['prompt' => 'Escolher Raça']) ?>

    <?= $form->field($model, 'idRebanho')->dropDownList( 
            ArrayHelper::map(Rebanho::find()->all(), 'idRebanho', 'designacao'), ['prompt' => 'Escolher Rebanho']) ?>

    <?= $form->field($model, 'idNucleo')->dropDownList( 
            ArrayHelper::map(Nucleo::find()->all(), 'idNucleo', 'nome'), ['prompt' => 'Escolher Núcleo']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Inserir' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
