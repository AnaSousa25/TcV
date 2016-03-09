<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use backend\models\Exploracao;
use backend\models\Pessoa;
use backend\models\Rebanho;

/* @var $this yii\web\View */
/* @var $model backend\models\Pastoreio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pastoreio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idPastor')->dropDownList( 
            ArrayHelper::map(Pessoa::find()->where(['pastor'=>'TRUE', 'ativo'=>'TRUE'])->all(), 'idPessoa', 'nome'), ['prompt' => 'Escolher Pastor']) ?>

    <?= $form->field($model, 'idRebanho')->dropDownList( 
            ArrayHelper::map(Rebanho::find()->all(), 'idRebanho', 'designacao'), ['prompt' => 'Escolher Rebanho']) ?>

    <?= $form->field($model, 'idExploracao')->dropDownList( 
            ArrayHelper::map(Exploracao::find()->all(), 'idExploracao', 'nome'), ['prompt' => 'Escolher Exploração']) ?>

    <?= $form->field($model, 'data')->widget(\yii\jui\DatePicker::className(), ['dateFormat' => 'dd/mm/yyyy']) ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
