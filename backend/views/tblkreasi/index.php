<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblKreasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Kreasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-kreasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Kreasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kreasi',
            'judul_kreasi',
            'isi_kreasi:ntext',
            'gambar_kreasi',
            'tanggal_kreasi',
            // 'waktu_kreasi',
            // 'author',
            // 'counter',
            // 'status_app',
            // 'category_kreasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
