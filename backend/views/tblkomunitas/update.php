<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblKomunitas */

$this->title = 'Update Tbl Komunitas: ' . ' ' . $model->id_komunitas;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Komunitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_komunitas, 'url' => ['view', 'id' => $model->id_komunitas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-komunitas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
