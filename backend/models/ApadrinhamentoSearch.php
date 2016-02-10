<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Apadrinhamento;

/**
 * ApadrinhamentoSearch represents the model behind the search form about `backend\models\Apadrinhamento`.
 */
class ApadrinhamentoSearch extends Apadrinhamento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idApadrinhamento', 'nrRenovacoes', 'idAnimal', 'idPessoa'], 'integer'],
            [['dataInicio', 'dataFim', 'obs'], 'safe'],
            [['quota'], 'number'],
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
        $query = Apadrinhamento::find();

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
            'idApadrinhamento' => $this->idApadrinhamento,
            'dataInicio' => $this->dataInicio,
            'dataFim' => $this->dataFim,
            'nrRenovacoes' => $this->nrRenovacoes,
            'quota' => $this->quota,
            'idAnimal' => $this->idAnimal,
            'idPessoa' => $this->idPessoa,
        ]);

        $query->andFilterWhere(['like', 'obs', $this->obs]);

        return $dataProvider;
    }
}
