<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Utilizador;

/**
 * UtilizadorSearch represents the model behind the search form about `backend\models\Utilizador`.
 */
class UtilizadorSearch extends Utilizador
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUtilizador'], 'integer'],
            [['nome', 'pass', 'email'], 'safe'],
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
        $query = Utilizador::find();

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
            'idUtilizador' => $this->idUtilizador,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'pass', $this->pass])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
