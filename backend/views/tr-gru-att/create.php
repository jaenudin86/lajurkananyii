<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TrGruAtt */

$this->title = 'Create grievance attachment';
$this->params['breadcrumbs'][] = ['label' => 'Grievance', 'url' => ['tr-gru/view', 'id' =>$gru_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tr-gru-att-create">

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
