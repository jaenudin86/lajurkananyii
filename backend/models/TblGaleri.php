<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_galeri".
 *
 * @property integer $id_foto
 * @property integer $id_album
 * @property string $foto_kecil
 * @property string $foto_besar
 */
class TblGaleri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_galeri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_album', 'foto_kecil', 'foto_besar'], 'required'],
            [['id_album'], 'integer'],
            [['foto_kecil', 'foto_besar'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_foto' => 'Id Foto',
            'id_album' => 'Id Album',
            'foto_kecil' => 'Foto Kecil',
            'foto_besar' => 'Foto Besar',
        ];
    }
}
