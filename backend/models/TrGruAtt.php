<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/tr_gru_att/';
Yii::$app->params['uploadUrl'] = Yii::$app->urlManager->baseUrl . '/uploads/tr_gru_att/';

/**
 * This is the model class for table "tr_gru_att".
 *
 * @property integer $gru_id
 * @property integer $gru_att_id
 * @property string $gru_att_description
 * @property string $gru_att_date
 * @property string $gru_att_location
 * @property string $gru_att_orgfile
 */
class TrGruAtt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tr_gru_att';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gru_id', 'gru_att_id', 'gru_att_description', 'gru_att_date', 'gru_att_location', 'gru_att_orgfile'], 'required'],
            [['gru_id', 'gru_att_id'], 'integer'],
            [['gru_att_description'], 'string'],
            [['gru_att_date'], 'safe'],
            [['gru_att_location', 'gru_att_orgfile'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gru_id' => 'ID',
            'gru_att_id' => 'Attachment ID',
            'gru_att_description' => 'Description',
            'gru_att_date' => 'Date',
            'gru_att_location' => 'Location',
            'gru_att_orgfile' => 'Attachment Organization file',
        ];
    }
	
	public function getImageFile() 
    {
        return isset($this->gru_att_orgfile) ? Yii::$app->params['uploadPath'] . $this->gru_att_orgfile : null;
    }
	
	public function getImageUrl() 
    {
      // return a default image placeholder if your source avatar is not found
        $gru_att_orgfile = !empty($this->gru_att_orgfile) ? $this->gru_att_orgfile : 'Deserts.jpg';
        return Yii::$app->params['uploadUrl'] . $gru_att_orgfile;
		
    }
	
	 /**
    * Process upload of image
    *
    * @return mixed the uploaded image instance
    */
    public function uploadImage() {
        // get the uploaded file instance. for multiple file uploads
        // the following data will return an array (you may need to use
        // getInstances method)
        $image = UploadedFile::getInstance($this, 'gru_att_orgfile');
 
        // if no image was uploaded abort the upload
        if (empty($image)) {
            return false;
        }
 
        // store the source file name
        //$this->gru_att_orgfile = $image->name;
        $ext = end((explode(".", $image->name)));
 
       // generate a unique file name
        $this->gru_att_orgfile = Yii::$app->security->generateRandomString().".{$ext}";
 
        // the uploaded image instance
        return $image;
    }
 
    /**
    * Process deletion of image
    *
    * @return boolean the status of deletion
    */
    public function deleteImage() {
        $file = $this->getImageFile();
 
        // check if file exists on server
        if (empty($file) || !file_exists($file)) {
            return false;
        }
 
        // check if uploaded file can be deleted on server
        if (!unlink($file)) {
            return false;
        }
 
        // if deletion successful, reset your file attributes
        $this->gru_att_orgfile = null;
      //  $this->gru_att_orgfile = null;
 
        return true;
    }
	
	 public function newAttID($id)
    {
        $gru_att_id=self::find()
            ->where(['gru_id' => $id])
            ->orderBy(['gru_att_id' => SORT_DESC])
            ->one();

        if (!empty($gru_att_id)){
            $gru_att_id = $gru_att_id->gru_att_id + 1;
        }
        else {
            $gru_att_id = 1;
        }

        return $gru_att_id;
    }
}
