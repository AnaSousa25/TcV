<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use backend\models\Nucleo;

/* @var $this yii\web\View */
/* @var $model backend\models\Rebanho */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rebanho-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'designacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idNucleo')->dropDownList( 
            ArrayHelper::map(Nucleo::find()->all(), 'idNucleo', 'nome'), ['prompt' => 'Escolher Núcleo']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
