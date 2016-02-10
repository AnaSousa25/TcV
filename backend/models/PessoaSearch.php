<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pessoa;

/**
 * PessoaSearch represents the model behind the search form about `backend\models\Pessoa`.
 */
class PessoaSearch extends Pessoa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPessoa', 'idPais', 'idProfissao', 'ativo', 'padrinho', 'nrAnimaisApadrinha', 'pastor', 'dono'], 'integer'],
            [['nome', 'morada', 'localidade', 'concelho', 'distrito', 'codPostal', 'dataNasc', 'genero', 'telef', 'email', 'nif', 'nrSocio', 'dataAssociacao'], 'safe'],
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
        $query = Pessoa::find();

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
            'idPessoa' => $this->idPessoa,
            'idPais' => $this->idPais,
            'dataNasc' => $this->dataNasc,
            'idProfissao' => $this->idProfissao,
            'ativo' => $this->ativo,
            'padrinho' => $this->padrinho,
            'nrAnimaisApadrinha' => $this->nrAnimaisApadrinha,
            'dataAssociacao' => $this->dataAssociacao,
            'pastor' => $this->pastor,
            'dono' => $this->dono,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'morada', $this->morada])
            ->andFilterWhere(['like', 'localidade', $this->localidade])
            ->andFilterWhere(['like', 'concelho', $this->concelho])
            ->andFilterWhere(['like', 'distrito', $this->distrito])
            ->andFilterWhere(['like', 'codPostal', $this->codPostal])
            ->andFilterWhere(['like', 'genero', $this->genero])
            ->andFilterWhere(['like', 'telef', $this->telef])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'nif', $this->nif])
            ->andFilterWhere(['like', 'nrSocio', $this->nrSocio]);

        return $dataProvider;
    }
}
