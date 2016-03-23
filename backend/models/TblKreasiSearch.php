<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblKreasi;

/**
 * TblKreasiSearch represents the model behind the search form about `backend\models\TblKreasi`.
 */
class TblKreasiSearch extends TblKreasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kreasi', 'counter', 'category_kreasi'], 'integer'],
            [['judul_kreasi', 'isi_kreasi', 'gambar_kreasi', 'tanggal_kreasi', 'waktu_kreasi', 'author', 'status_app'], 'safe'],
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
        $query = TblKreasi::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_kreasi' => $this->id_kreasi,
            'tanggal_kreasi' => $this->tanggal_kreasi,
            'waktu_kreasi' => $this->waktu_kreasi,
            'counter' => $this->counter,
            'category_kreasi' => $this->category_kreasi,
        ]);

        $query->andFilterWhere(['like', 'judul_kreasi', $this->judul_kreasi])
            ->andFilterWhere(['like', 'isi_kreasi', $this->isi_kreasi])
            ->andFilterWhere(['like', 'gambar_kreasi', $this->gambar_kreasi])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'status_app', $this->status_app]);

        return $dataProvider;
    }
}
