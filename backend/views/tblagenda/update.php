<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblAgenda */

$this->title = 'Update Tbl Agenda: ' . ' ' . $model->id_agenda;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Agendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_agenda, 'url' => ['view', 'id' => $model->id_agenda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-agenda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
