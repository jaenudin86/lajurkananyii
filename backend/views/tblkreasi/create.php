<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblKreasi */

$this->title = 'Create Tbl Kreasi';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Kreasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-kreasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
