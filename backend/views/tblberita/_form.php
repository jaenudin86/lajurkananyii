<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use kartik\datecontrol\DateControl;
use kartik\widgets\DateTimePicker;


/* @var $this yii\web\View */
/* @var $model frontend\models\TblBerita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-berita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_berita')->textInput(['maxlength' => true]) ?>
   
    <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>

   //<?php

    // Usage with ActiveForm and model
    //change here: need to add image_path attribute from another table and add square bracket after image_path[] for multiple file upload.
//     echo $form->field($model, 'gambar')->widget(FileInput::classname(), [
  //      'options' => ['multiple' => true, 'accept' => 'image/*'],
    //    'pluginOptions' => [
     ///       'previewFileType' => 'image',
            //change here: below line is added just to hide upload button. Its up to you to add this code or not.
          //  'showUpload' => false
        //],
    //]);
    //?>
    <?php

    echo $form->field($model, 'tanggal')->widget(DateTimePicker::classname(), [
    'attribute' => 'date',
    'options' => ['placeholder' => 'Enter event time ...'],
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-dd-mm',

    ]
]);    
    ?>

     <?php
        $title = !empty($model->gambar)&&!empty($model->gambar)?$model->gambar : null;
        if(!empty($model->gambar)){
            echo Html::img($model->getImageUrl(),[
            'class'=>'img-thumbnail', 'doc',
            'width'=>'200px',
            'alt'=>$title,
            'title'=>$title
            ]);
        }
        ?>
   
        
    <?= $form->field($model, 'gambar')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
    'pluginOptions'=>[
                        'allowedFileExtensions'=>['gif', 'jpg', 'pdf', 'exe', 'xlsx', 'xls', 'xlt', 'docx', 'doc', 'dot', 'png', 'ico'],
                        'initialCaption'=>!empty($model->gambar) ? $model->gambar : 'Upload here..',
                        'initialPriview' => Html::img($model->getImageUrl(), ['class'=>'file-priview-image']),
                        'overwriteInitial'=>true
                        ]
    ]); ?>    

    

    <?= $form->field($model, 'waktu')->textInput() ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'counter')->textInput() ?>

    <?= $form->field($model, 'status_app')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kawasan')->textInput() ?>

    <?= $form->field($model, 'rating')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
