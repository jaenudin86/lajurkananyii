<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblGaleri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-galeri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_album')->textInput() ?>

    <?= $form->field($model, 'foto_kecil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto_besar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
