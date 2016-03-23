<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblAlbumGaleri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-album-galeri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_album')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
