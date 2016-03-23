<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblKomunitas */

$this->title = 'Create Tbl Komunitas';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Komunitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-komunitas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
