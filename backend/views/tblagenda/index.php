<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblAgendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Agendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-agenda-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Agenda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_agenda',
            'tema_agenda',
            'isi:ntext',
            'tgl_mulai',
            'tgl_selesai',
            // 'tgl_posting',
            // 'tempat',
            // 'jam',
            // 'keterangan:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
