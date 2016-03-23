<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblAlbumGaleriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Album Galeris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-album-galeri-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Album Galeri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_album',
            'nama_album',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
