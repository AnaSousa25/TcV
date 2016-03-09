<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NucleoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Núcleos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nucleo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Novo Núcleo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idNucleo',
            'nome',
            'parcelario',
            'local',
            'marcaExploracao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
