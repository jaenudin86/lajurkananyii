<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblGaleriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Galeris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-galeri-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Galeri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_foto',
            'id_album',
            'foto_kecil',
            'foto_besar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
