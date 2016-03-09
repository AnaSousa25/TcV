<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PastoreioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pastoreio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idPastor') ?>

    <?= $form->field($model, 'idRebanho') ?>

    <?= $form->field($model, 'idExploracao') ?>

    <?= $form->field($model, 'data')->widget(\yii\jui\DatePicker::className(), ['dateFormat' => 'dd/mm/yyyy']) ?>

    <div class="form-group">
        <?= Html::submitButton('Pesquisar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
