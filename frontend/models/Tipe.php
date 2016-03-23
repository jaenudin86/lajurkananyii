<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tipe".
 *
 * @property string $nama
 * @property string $desc
 */
class Tipe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'desc'], 'required'],
            [['nama'], 'string', 'max' => 201],
            [['desc'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'desc' => 'Desc',
        ];
    }
}
