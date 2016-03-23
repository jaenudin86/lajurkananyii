<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_komunitas".
 *
 * @property integer $id_komunitas
 * @property string $nama
 * @property string $photo
 * @property string $keterangan
 * @property string $kegiatan
 * @property integer $wilayah
 */
class TblKomunitas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_komunitas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'photo', 'keterangan', 'kegiatan', 'wilayah'], 'required'],
            [['wilayah'], 'integer'],
            [['nama'], 'string', 'max' => 50],
            [['photo', 'keterangan', 'kegiatan'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_komunitas' => 'Id Komunitas',
            'nama' => 'Nama',
            'photo' => 'Photo',
            'keterangan' => 'Keterangan',
            'kegiatan' => 'Kegiatan',
            'wilayah' => 'Wilayah',
        ];
    }
}
