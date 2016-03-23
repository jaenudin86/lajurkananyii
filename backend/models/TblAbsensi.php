<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_absensi".
 *
 * @property integer $id_absensi
 * @property integer $id_siswa
 * @property integer $id_kelas
 * @property string $absen
 * @property integer $tanggal
 * @property integer $bulan
 * @property integer $tahun
 */
class TblAbsensi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_absensi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_siswa', 'id_kelas', 'absen', 'tanggal', 'bulan', 'tahun'], 'required'],
            [['id_siswa', 'id_kelas', 'tanggal', 'bulan', 'tahun'], 'integer'],
            [['absen'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_absensi' => 'Id Absensi',
            'id_siswa' => 'Id Siswa',
            'id_kelas' => 'Id Kelas',
            'absen' => 'Absen',
            'tanggal' => 'Tanggal',
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
        ];
    }
}
