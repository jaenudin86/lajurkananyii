<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modelsTblBeritaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-berita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_berita') ?>

    <?= $form->field($model, 'judul_berita') ?>

    <?= $form->field($model, 'isi') ?>

    <?= $form->field($model, 'gambar') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?php // echo $form->field($model, 'waktu') ?>

    <?php // echo $form->field($model, 'author') ?>

    <?php // echo $form->field($model, 'counter') ?>

    <?php // echo $form->field($model, 'status_app') ?>

    <?php // echo $form->field($model, 'kawasan') ?>

    <?php // echo $form->field($model, 'rating') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
