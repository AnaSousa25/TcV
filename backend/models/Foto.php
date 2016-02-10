<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Foto".
 *
 * @property integer $idFoto
 * @property string $titulo
 * @property string $legenda
 * @property string $localizacao
 * @property string $data
 * @property string $nomeFicheiro
 *
 * @property AnimaisFoto[] $animaisFotos
 * @property Animal[] $idAnimals
 */
class Foto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Foto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data'], 'safe'],
            [['nomeFicheiro'], 'required'],
            [['titulo', 'legenda', 'localizacao', 'nomeFicheiro'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idFoto' => 'Id Foto',
            'titulo' => 'Titulo',
            'legenda' => 'Legenda',
            'localizacao' => 'Localizacao',
            'data' => 'Data',
            'nomeFicheiro' => 'Nome Ficheiro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimaisFotos()
    {
        return $this->hasMany(AnimaisFoto::className(), ['idFoto' => 'idFoto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAnimals()
    {
        return $this->hasMany(Animal::className(), ['idAnimal' => 'idAnimal'])->viaTable('Animais_Foto', ['idFoto' => 'idFoto']);
    }
}
