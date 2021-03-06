<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Concelho;

/**
 * ConcelhoSearch represents the model behind the search form about `backend\models\Concelho`.
 */
class ConcelhoSearch extends Concelho
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idConcelho'], 'integer'],
            [['nome', 'idDistrito'], 'safe'],
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
        $query = Concelho::find();
        $query->joinWith('relIdDistrito');

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
            'idConcelho' => $this->idConcelho,
            //'idDistrito' => $this->idDistrito,
        ]);

        $query->andFilterWhere(['like', 'Concelho.nome', $this->nome])
              ->andFilterWhere(['like', 'Distrito.nome', $this->idDistrito]);

        return $dataProvider;
    }
}
