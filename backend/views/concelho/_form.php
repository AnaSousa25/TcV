<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use backend\models\Distrito;

/* @var $this yii\web\View */
/* @var $model backend\models\Concelho */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="concelho-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idDistrito')->dropDownList( 
            ArrayHelper::map(Distrito::find()->all(), 'idDistrito', 'nome'), ['prompt' => 'Escolher Distrito']) ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
