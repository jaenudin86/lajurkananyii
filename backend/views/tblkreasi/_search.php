<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblKreasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-kreasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kreasi') ?>

    <?= $form->field($model, 'judul_kreasi') ?>

    <?= $form->field($model, 'isi_kreasi') ?>

    <?= $form->field($model, 'gambar_kreasi') ?>

    <?= $form->field($model, 'tanggal_kreasi') ?>

    <?php // echo $form->field($model, 'waktu_kreasi') ?>

    <?php // echo $form->field($model, 'author') ?>

    <?php // echo $form->field($model, 'counter') ?>

    <?php // echo $form->field($model, 'status_app') ?>

    <?php // echo $form->field($model, 'category_kreasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
