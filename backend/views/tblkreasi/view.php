<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TblKreasi */

$this->title = $model->id_kreasi;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Kreasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-kreasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kreasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kreasi], [
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
            'id_kreasi',
            'judul_kreasi',
            'isi_kreasi:ntext',
            'gambar_kreasi',
            'tanggal_kreasi',
            'waktu_kreasi',
            'author',
            'counter',
            'status_app',
            'category_kreasi',
        ],
    ]) ?>

</div>
