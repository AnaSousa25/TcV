<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use backend\models\Exploracao;

/* @var $this yii\web\View */
/* @var $model backend\models\Nucleo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nucleo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parcelario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'local')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marcaExploracao')->dropDownList( 
            ArrayHelper::map(Exploracao::find()->all(), 'marca', 'nome'), ['prompt' => 'Escolher Exploração']) ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
