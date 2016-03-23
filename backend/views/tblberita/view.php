<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TblBerita */

$this->title = $model->id_berita;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-berita-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_berita], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_berita], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_berita',
            'judul_berita',
            'isi:ntext',
            'gambar',
            'tanggal',
            'waktu',
            'author',
            'counter',
            'status_app',
            'kawasan',
            'rating',
        ],
    ]) ?>

</div>
