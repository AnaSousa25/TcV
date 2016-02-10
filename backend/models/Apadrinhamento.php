<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Apadrinhamento".
 *
 * @property integer $idApadrinhamento
 * @property string $dataInicio
 * @property string $dataFim
 * @property integer $nrRenovacoes
 * @property double $quota
 * @property string $obs
 * @property integer $idAnimal
 * @property integer $idPessoa
 *
 * @property Animal $idAnimal0
 * @property Pessoa $idPessoa0
 */
class Apadrinhamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Apadrinhamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dataInicio', 'dataFim'], 'safe'],
            [['nrRenovacoes', 'idAnimal', 'idPessoa'], 'integer'],
            [['quota'], 'number'],
            [['idAnimal', 'idPessoa'], 'required'],
            [['obs'], 'string', 'max' => 70],
            [['idAnimal'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['idAnimal' => 'idAnimal']],
            [['idPessoa'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoa::className(), 'targetAttribute' => ['idPessoa' => 'idPessoa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idApadrinhamento' => 'Id Apadrinhamento',
            'dataInicio' => 'Data Inicio',
            'dataFim' => 'Data Fim',
            'nrRenovacoes' => 'Nr Renovacoes',
            'quota' => 'Quota',
            'obs' => 'Obs',
            'idAnimal' => 'Id Animal',
            'idPessoa' => 'Id Pessoa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAnimal0()
    {
        return $this->hasOne(Animal::className(), ['idAnimal' => 'idAnimal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPessoa0()
    {
        return $this->hasOne(Pessoa::className(), ['idPessoa' => 'idPessoa']);
    }
}
