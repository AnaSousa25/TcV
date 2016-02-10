<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Animal;

/**
 * AnimalSearch represents the model behind the search form about `backend\models\Animal`.
 */
class AnimalSearch extends Animal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idAnimal', 'idRaca', 'idEspecie', 'idRebanho', 'idNucleo'], 'integer'],
            [['marcaAuricular', 'genero', 'cor', 'dataNasc', 'dataMorte', 'nrPai', 'nrMae'], 'safe'],
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
        $query = Animal::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idAnimal' => $this->idAnimal,
            'dataNasc' => $this->dataNasc,
            'dataMorte' => $this->dataMorte,
            'idRaca' => $this->idRaca,
            'idEspecie' => $this->idEspecie,
            'idRebanho' => $this->idRebanho,
            'idNucleo' => $this->idNucleo,
        ]);

        $query->andFilterWhere(['like', 'marcaAuricular', $this->marcaAuricular])
            ->andFilterWhere(['like', 'genero', $this->genero])
            ->andFilterWhere(['like', 'cor', $this->cor])
            ->andFilterWhere(['like', 'nrPai', $this->nrPai])
            ->andFilterWhere(['like', 'nrMae', $this->nrMae]);

        return $dataProvider;
    }
}
