<?php

namespace frontend\models;

use Yii;

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
 * @property integer $counter
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
}
