<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\TrGru;
use kartik\file\FileInput;
use yii\helpers\Url;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\TrGruAtt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tr-gru-att-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
    <div class="row">
    <div class="col-xs-6">
	<?= $form->field($model, 'gru_att_date')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Choose Date ...'],
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                ]
            ]);?>
    </div>
    <div class="col-xs-6">    
    <?= $form->field($model, 'gru_att_location')->textInput(['maxlength' => 256]) ?>
    </div>
    </div>
    <div class="row">
    <div class='col-xs-6'>
    <?= $form->field($model, 'gru_att_description')->widget(CKEditor::className(), 
    ['options' => ['rows' => 2],'preset' => 'basic']) ?>
    </div>
    </div>
    
	
     <?php
		$title = !empty($model->gru_att_orgfile)&&!empty($model->gru_att_orgfile)?$model->gru_att_orgfile : null;
		if(!empty($model->gru_att_orgfile)){
			echo Html::img($model->getImageUrl(),[
			'class'=>'img-thumbnail', 'doc',
			'width'=>'200px',
			'alt'=>$title,
			'title'=>$title
			]);
		}
		?>
   
		
    <?= $form->field($model, 'gru_att_orgfile')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
    'pluginOptions'=>[
						'allowedFileExtensions'=>['gif', 'jpg', 'pdf', 'exe', 'xlsx', 'xls', 'xlt', 'docx', 'doc', 'dot', 'png', 'ico'],
						'initialCaption'=>!empty($model->gru_att_orgfile) ? $model->gru_att_orgfile : 'Upload here..',
						'initialPriview' => Html::img($model->getImageUrl(), ['class'=>'file-priview-image']),
						'overwriteInitial'=>true
						]
    ]); ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
