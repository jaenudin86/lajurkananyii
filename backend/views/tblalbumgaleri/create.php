<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblAlbumGaleri */

$this->title = 'Create Tbl Album Galeri';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Album Galeris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-album-galeri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
