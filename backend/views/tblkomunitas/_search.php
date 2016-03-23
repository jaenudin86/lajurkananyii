<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblKomunitasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-komunitas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_komunitas') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'photo') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'kegiatan') ?>

    <?php // echo $form->field($model, 'wilayah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
