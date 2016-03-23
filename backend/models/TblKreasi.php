<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_kreasi".
 *
 * @property integer $id_kreasi
 * @property string $judul_kreasi
 * @property string $isi_kreasi
 * @property string $gambar_kreasi
 * @property string $tanggal_kreasi
 * @property string $waktu_kreasi
 * @property string $author
 * @property integer $counter
 * @property string $status_app
 * @property integer $category_kreasi
 */
class TblKreasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_kreasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul_kreasi', 'isi_kreasi', 'gambar_kreasi', 'tanggal_kreasi', 'waktu_kreasi', 'author', 'counter', 'status_app', 'category_kreasi'], 'required'],
            [['isi_kreasi'], 'string'],
            [['tanggal_kreasi', 'waktu_kreasi'], 'safe'],
            [['counter', 'category_kreasi'], 'integer'],
            [['judul_kreasi', 'gambar_kreasi'], 'string', 'max' => 100],
            [['author'], 'string', 'max' => 50],
            [['status_app'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kreasi' => 'Id Kreasi',
            'judul_kreasi' => 'Judul Kreasi',
            'isi_kreasi' => 'Isi Kreasi',
            'gambar_kreasi' => 'Gambar Kreasi',
            'tanggal_kreasi' => 'Tanggal Kreasi',
            'waktu_kreasi' => 'Waktu Kreasi',
            'author' => 'Author',
            'counter' => 'Counter',
            'status_app' => 'Status App',
            'category_kreasi' => 'Category Kreasi',
        ];
    }
}
