<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrGruAttSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grievance attachment';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tr-gru-att-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'gru_id',
            'gru_att_id',
            'gru_att_description:ntext',
            'gru_att_date',
            'gru_att_location',
			'gru_att_orgfile',
				
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
