<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Foto;

/**
 * FotoSearch represents the model behind the search form about `backend\models\Foto`.
 */
class FotoSearch extends Foto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idFoto'], 'integer'],
            [['titulo', 'legenda', 'localizacao', 'data', 'nomeFicheiro'], 'safe'],
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
        $query = Foto::find();

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
            'idFoto' => $this->idFoto,
            'data' => $this->data,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'legenda', $this->legenda])
            ->andFilterWhere(['like', 'localizacao', $this->localizacao])
            ->andFilterWhere(['like', 'nomeFicheiro', $this->nomeFicheiro]);

        return $dataProvider;
    }
}
