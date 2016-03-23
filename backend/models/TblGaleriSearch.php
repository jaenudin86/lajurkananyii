<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblGaleri;

/**
 * TblGaleriSearch represents the model behind the search form about `backend\models\TblGaleri`.
 */
class TblGaleriSearch extends TblGaleri
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_foto', 'id_album'], 'integer'],
            [['foto_kecil', 'foto_besar'], 'safe'],
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
        $query = TblGaleri::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_foto' => $this->id_foto,
            'id_album' => $this->id_album,
        ]);

        $query->andFilterWhere(['like', 'foto_kecil', $this->foto_kecil])
            ->andFilterWhere(['like', 'foto_besar', $this->foto_besar]);

        return $dataProvider;
    }
}
