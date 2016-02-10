<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CodPostal;

/**
 * CodPostalSearch represents the model behind the search form about `backend\models\CodPostal`.
 */
class CodPostalSearch extends CodPostal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCodPostal', 'idConcelho', 'idDistrito'], 'integer'],
            [['codigo', 'localidade'], 'safe'],
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
        $query = CodPostal::find();

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
            'idCodPostal' => $this->idCodPostal,
            'idConcelho' => $this->idConcelho,
            'idDistrito' => $this->idDistrito,
        ]);

        $query->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'localidade', $this->localidade]);

        return $dataProvider;
    }
}
