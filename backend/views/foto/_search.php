<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FotoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idFoto') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'legenda') ?>

    <?= $form->field($model, 'localizacao') ?>

    <?= $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'nomeFicheiro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
