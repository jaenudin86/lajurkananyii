<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblKreasi */

$this->title = 'Update Tbl Kreasi: ' . ' ' . $model->id_kreasi;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Kreasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kreasi, 'url' => ['view', 'id' => $model->id_kreasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-kreasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
