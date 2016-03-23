<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblAlbumGaleri */

$this->title = 'Update Tbl Album Galeri: ' . ' ' . $model->id_album;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Album Galeris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_album, 'url' => ['view', 'id' => $model->id_album]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-album-galeri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
