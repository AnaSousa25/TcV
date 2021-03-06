<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pastoreio;

/**
 * PastoreioSearch represents the model behind the search form about `backend\models\Pastoreio`.
 */
class PastoreioSearch extends Pastoreio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPastor', 'idRebanho','idExploracao', 'data'], 'safe'],
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
        $query = Pastoreio::find();
        $query->joinWith('relIdPastor');
        $query->joinWith('relIdRebanho');
        $query->joinWith('relIdExploracao');

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
        /*$query->andFilterWhere([
            'idPastor' => $this->idPastor,
            'idRebanho' => $this->idRebanho,
            'data' => $this->data,
        ]);
        */
        $query->andFilterWhere(['like', 'Pessoa.nome', $this->idPastor])
              ->andFilterWhere(['like', 'Rebanho.designacao', $this->idRebanho])
              ->andFilterWhere(['like', 'Exploracao.nome', $this->idExploracao])
              ->andFilterWhere(['like', 'data', $this->data]);

        return $dataProvider;
    }
}
