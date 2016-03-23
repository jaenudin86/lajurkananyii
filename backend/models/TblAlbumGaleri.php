<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_album_galeri".
 *
 * @property integer $id_album
 * @property string $nama_album
 */
class TblAlbumGaleri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_album_galeri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_album'], 'required'],
            [['nama_album'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_album' => 'Id Album',
            'nama_album' => 'Nama Album',
        ];
    }
}
