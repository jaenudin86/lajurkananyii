<?php

namespace backend\models;
use yii\web\UploadedFile;
use Yii;
//use yii\web\UploadedFile;

Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/upload/berita/';
Yii::$app->params['uploadUrl'] = Yii::$app->urlManager->baseUrl . '/upload/berita/';

/**
 * This is the model class for table "tbl_berita".
 *
 * @property integer $id_berita
 * @property string $judul_berita
 * @property string $isi
 * @property string $gambar
 * @property string $tanggal
 * @property string $waktu
 * @property string $author
 * @property inter $counter
 * @property string $status_app
 * @property integer $kawasan
 * @property integer $rating
 */
class TblBerita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_berita';
    }

    /**
     * @inheritdoc
     */
    public $image;
    
    public function rules()
    {
        return [
            [['judul_berita', 'isi', 'gambar', 'tanggal', 'waktu', 'author', 'counter', 'status_app', 'kawasan', 'rating'], 'required'],
            [['isi'], 'string'],
            [['tanggal', 'waktu'], 'safe'],
            [['counter', 'kawasan', 'rating'], 'integer'],
            [['judul_berita', 'gambar'], 'string', 'max' => 100],
            [['author'], 'string', 'max' => 20],
            [['status_app'], 'string', 'max' => 2],
            [['gambar'], 'file', 'extensions'=>'jpg, gif, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'judul_berita' => 'Judul Berita',
            'isi' => 'Isi',
            'gambar' => 'Gambar',
            'tanggal' => 'Tanggal',
            'waktu' => 'Waktu',
            'author' => 'Author',
            'counter' => 'Counter',
            'status_app' => 'Status App',
            'kawasan' => 'Kawasan',
            'rating' => 'Rating',
        ];
    }
    public function getImageFile() 
    {
        return isset($this->gambar) ? Yii::$app->params['uploadPath'] . $this->gambar : null;
    }
    
    public function getImageUrl() 
    {
      // return a default image placeholder if your source avatar is not found
        $gambar = !empty($this->gambar) ? $this->gambar : 'Deserts.jpg';
        return Yii::$app->params['uploadUrl'] . $gambar;
        
    }
    
     /**
    * Process upload of image
    *
    * @return mixed the uploaded image instance
    */
    public static function uploadImage() {
        // get the uploaded file instance. for multiple file uploads
        // the following data will return an array (you may need to use
        // getInstances method)
        $image = UploadedFile::getInstance($this, 'gambar');

 
        // if no image was uploaded abort the upload
        if (empty($image)) {
            return false;
        }
 
        // store the source file name
        //$this->gru_att_orgfile = $image->name;
        $ext = end((explode(".", $image->name)));
 
       // generate a unique file name
        $this->gambar = Yii::$app->security->generateRandomString().".{$ext}";
 
        // the uploaded image instance
        return $image;
    }
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

 
}
