<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblGaleri */

$this->title = 'Update Tbl Galeri: ' . ' ' . $model->id_foto;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Galeris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_foto, 'url' => ['view', 'id' => $model->id_foto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-galeri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
