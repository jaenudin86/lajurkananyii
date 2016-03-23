<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TipeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipe-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipe', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',
            'desc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
