<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use backend\models\Pessoa;

/* @var $this yii\web\View */
/* @var $model backend\models\Exploracao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exploracao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idDono')->dropDownList( 
            ArrayHelper::map(Pessoa::find()->where(['dono'=>'TRUE'])->all(), 'idPessoa', 'nome'), ['prompt' => 'Escolher Dono']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
