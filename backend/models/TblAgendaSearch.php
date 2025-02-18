<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblAgenda;

/**
 * TblAgendaSearch represents the model behind the search form about `backend\models\TblAgenda`.
 */
class TblAgendaSearch extends TblAgenda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_agenda'], 'integer'],
            [['tema_agenda', 'isi', 'tgl_mulai', 'tgl_selesai', 'tgl_posting', 'tempat', 'jam', 'keterangan'], 'safe'],
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
        $query = TblAgenda::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_agenda' => $this->id_agenda,
            'tgl_mulai' => $this->tgl_mulai,
            'tgl_selesai' => $this->tgl_selesai,
            'tgl_posting' => $this->tgl_posting,
        ]);

        $query->andFilterWhere(['like', 'tema_agenda', $this->tema_agenda])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'tempat', $this->tempat])
            ->andFilterWhere(['like', 'jam', $this->jam])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
