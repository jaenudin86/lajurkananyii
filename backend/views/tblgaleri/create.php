<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblGaleri */

$this->title = 'Create Tbl Galeri';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Galeris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-galeri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
