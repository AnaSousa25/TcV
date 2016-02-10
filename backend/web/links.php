<?php

use yii\helpers\Html;


/* Lista de operacoes de CRUD */

$this->title = 'Lista';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lista-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utilizador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
</div>
