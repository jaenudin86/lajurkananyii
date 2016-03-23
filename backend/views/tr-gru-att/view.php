<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TrGruAtt */

$this->title = $model->gru_att_id;
$this->params['breadcrumbs'][] = ['label' => 'Tr Gru Atts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tr-gru-att-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->gru_att_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->gru_att_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'gru_id',
            'gru_att_id',
            'gru_att_description:ntext',
            'gru_att_date',
            'gru_att_location',
            'gru_att_orgfile',
        ],
    ]) ?>

</div>
