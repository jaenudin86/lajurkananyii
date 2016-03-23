<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblKomunitasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Komunitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-komunitas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Komunitas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_komunitas',
            'nama',
            'photo',
            'keterangan',
            'kegiatan',
            // 'wilayah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
