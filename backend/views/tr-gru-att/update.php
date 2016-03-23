<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TrGruAtt */

$this->title = 'Update Grievance Attachment: ' . ' ' . $model->gru_att_id;
$this->params['breadcrumbs'][] = ['label' => 'Grievance', 'url' => ['tr-gru/view', 'id' => $model->gru_id]];

$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tr-gru-update">

   <div class="box box-default">

	    <div class="box-header">
	        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
	    </div><!-- /.box-header -->

	    <div class="box-body">

		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>

		</div>
	</div>
</div>
