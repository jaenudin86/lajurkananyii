<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblGaleriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-galeri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_foto') ?>

    <?= $form->field($model, 'id_album') ?>

    <?= $form->field($model, 'foto_kecil') ?>

    <?= $form->field($model, 'foto_besar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
