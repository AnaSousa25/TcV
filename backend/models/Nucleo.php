<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Nucleo".
 *
 * @property integer $idNucleo
 * @property string $nome
 * @property string $parcelario
 * @property string $local
 * @property string $marcaExploracao
 *
 * @property Animal[] $animals
 * @property Exploracao $marcaExploracao0
 * @property Rebanho[] $rebanhos
 */
class Nucleo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Nucleo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['marcaExploracao'], 'required'],
            [['nome', 'parcelario', 'local'], 'string', 'max' => 45],
            [['marcaExploracao'], 'string', 'max' => 15],
            [['marcaExploracao'], 'exist', 'skipOnError' => true, 'targetClass' => Exploracao::className(), 'targetAttribute' => ['marcaExploracao' => 'marca']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNucleo' => 'Id Nucleo',
            'nome' => 'Nome',
            'parcelario' => 'Parcelario',
            'local' => 'Local',
            'marcaExploracao' => 'Marca Exploracao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::className(), ['idNucleo' => 'idNucleo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarcaExploracao0()
    {
        return $this->hasOne(Exploracao::className(), ['marca' => 'marcaExploracao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRebanhos()
    {
        return $this->hasMany(Rebanho::className(), ['idNucleo' => 'idNucleo']);
    }
}
