<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TrGruAtt;

/**
 * TrGruAttSearch represents the model behind the search form about `app\models\TrGruAtt`.
 */
class TrGruAttSearch extends TrGruAtt
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gru_id', 'gru_att_id'], 'integer'],
            [['gru_att_description', 'gru_att_date', 'gru_att_location', 'gru_att_orgfile'], 'safe'],
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
        $query = TrGruAtt::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'gru_id' => $this->gru_id,
            'gru_att_id' => $this->gru_att_id,
            'gru_att_date' => $this->gru_att_date,
        ]);

        $query->andFilterWhere(['like', 'gru_att_description', $this->gru_att_description])
            ->andFilterWhere(['like', 'gru_att_location', $this->gru_att_location])
            ->andFilterWhere(['like', 'gru_att_orgfile', $this->gru_att_orgfile]);

        return $dataProvider;
    }
}
