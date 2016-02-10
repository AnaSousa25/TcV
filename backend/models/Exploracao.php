<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Exploracao".
 *
 * @property string $marca
 * @property string $nome
 * @property integer $idDono
 *
 * @property Pessoa $idDono0
 * @property Nucleo[] $nucleos
 * @property Pastoreio[] $pastoreios
 */
class Exploracao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Exploracao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['marca', 'idDono'], 'required'],
            [['idDono'], 'integer'],
            [['marca'], 'string', 'max' => 15],
            [['nome'], 'string', 'max' => 45],
            [['idDono'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoa::className(), 'targetAttribute' => ['idDono' => 'idPessoa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'marca' => 'Marca',
            'nome' => 'Nome',
            'idDono' => 'Id Dono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDono0()
    {
        return $this->hasOne(Pessoa::className(), ['idPessoa' => 'idDono']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNucleos()
    {
        return $this->hasMany(Nucleo::className(), ['marcaExploracao' => 'marca']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPastoreios()
    {
        return $this->hasMany(Pastoreio::className(), ['idExploracao' => 'marca']);
    }
}
