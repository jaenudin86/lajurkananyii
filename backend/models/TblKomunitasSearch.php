<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblKomunitas;

/**
 * TblKomunitasSearch represents the model behind the search form about `backend\models\TblKomunitas`.
 */
class TblKomunitasSearch extends TblKomunitas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_komunitas', 'wilayah'], 'integer'],
            [['nama', 'photo', 'keterangan', 'kegiatan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TblKomunitas::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_komunitas' => $this->id_komunitas,
            'wilayah' => $this->wilayah,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'kegiatan', $this->kegiatan]);

        return $dataProvider;
    }
}
