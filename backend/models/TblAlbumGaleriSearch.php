<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblAlbumGaleri;

/**
 * TblAlbumGaleriSearch represents the model behind the search form about `backend\models\TblAlbumGaleri`.
 */
class TblAlbumGaleriSearch extends TblAlbumGaleri
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_album'], 'integer'],
            [['nama_album'], 'safe'],
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
        $query = TblAlbumGaleri::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_album' => $this->id_album,
        ]);

        $query->andFilterWhere(['like', 'nama_album', $this->nama_album]);

        return $dataProvider;
    }
}
