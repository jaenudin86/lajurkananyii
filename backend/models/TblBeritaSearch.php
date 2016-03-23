<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblBerita;

/**
 * TblBeritaSearch represents the model behind the search form about `backend\models\TblBerita`.
 */
class TblBeritaSearch extends TblBerita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_berita', 'counter', 'kawasan', 'rating'], 'integer'],
            [['judul_berita', 'isi', 'gambar', 'tanggal', 'waktu', 'author', 'status_app'], 'safe'],
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
        $query = TblBerita::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_berita' => $this->id_berita,
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu,
            'counter' => $this->counter,
            'kawasan' => $this->kawasan,
            'rating' => $this->rating,
        ]);

        $query->andFilterWhere(['like', 'judul_berita', $this->judul_berita])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'status_app', $this->status_app]);

        return $dataProvider;
    }
}
