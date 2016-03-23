<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel frontend\modelsTblBeritaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
 $this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
<div class"panel-body">
<div class="box-header with-border" >
<div class="box-title" > <h2><?= Html::encode($this->title) ?></h2></div>
</div>
<p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <p>
        <?= Html::a('Create Tbl Berita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_berita',
            'judul_berita',
            'isi:ntext',
            'gambar',
            'tanggal',
            // 'waktu',
            // 'author',
            // 'counter',
            // 'status_app',
            // 'kawasan',
            // 'rating',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>

