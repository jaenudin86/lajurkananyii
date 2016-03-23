<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblKreasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-kreasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_kreasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi_kreasi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gambar_kreasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_kreasi')->textInput() ?>

    <?= $form->field($model, 'waktu_kreasi')->textInput() ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'counter')->textInput() ?>

    <?= $form->field($model, 'status_app')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_kreasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
