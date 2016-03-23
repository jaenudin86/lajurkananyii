<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_agenda".
 *
 * @property integer $id_agenda
 * @property string $tema_agenda
 * @property string $isi
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property string $tgl_posting
 * @property string $tempat
 * @property string $jam
 * @property string $keterangan
 */
class TblAgenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_agenda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tema_agenda', 'isi', 'tgl_mulai', 'tgl_selesai', 'tgl_posting', 'tempat', 'jam', 'keterangan'], 'required'],
            [['isi', 'keterangan'], 'string'],
            [['tgl_mulai', 'tgl_selesai', 'tgl_posting'], 'safe'],
            [['tema_agenda'], 'string', 'max' => 200],
            [['tempat'], 'string', 'max' => 150],
            [['jam'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_agenda' => 'Id Agenda',
            'tema_agenda' => 'Tema Agenda',
            'isi' => 'Isi',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_selesai' => 'Tgl Selesai',
            'tgl_posting' => 'Tgl Posting',
            'tempat' => 'Tempat',
            'jam' => 'Jam',
            'keterangan' => 'Keterangan',
        ];
    }
}
