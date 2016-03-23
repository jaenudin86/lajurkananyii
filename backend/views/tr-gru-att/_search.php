<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrGruAttSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tr-gru-att-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'gru_id') ?>

    <?= $form->field($model, 'gru_att_id') ?>

    <?= $form->field($model, 'gru_att_description') ?>

    <?= $form->field($model, 'gru_att_date') ?>

    <?= $form->field($model, 'gru_att_location') ?>

    <?php // echo $form->field($model, 'gru_att_orgfile') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
