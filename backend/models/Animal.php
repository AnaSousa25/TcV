<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Animal".
 *
 * @property integer $idAnimal
 * @property string $marcaAuricular
 * @property string $genero
 * @property string $cor
 * @property string $dataNasc
 * @property string $dataMorte
 * @property string $nrPai
 * @property string $nrMae
 * @property integer $idRaca
 * @property integer $idEspecie
 * @property integer $idRebanho
 * @property integer $idNucleo
 *
 * @property AnimaisFoto[] $animaisFotos
 * @property Foto[] $idFotos
 * @property Especie $idEspecie0
 * @property Nucleo $idNucleo0
 * @property Raca $idRaca0
 * @property Rebanho $idRebanho0
 * @property Apadrinhamento[] $apadrinhamentos
 */
class Animal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Animal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['marcaAuricular', 'genero', 'dataNasc', 'idRaca', 'idEspecie', 'idRebanho', 'idNucleo'], 'required'],
            [['dataNasc', 'dataMorte'], 'safe'],
            [['idRaca', 'idEspecie', 'idRebanho', 'idNucleo'], 'integer'],
            [['marcaAuricular', 'genero', 'nrPai', 'nrMae'], 'string', 'max' => 15],
            [['cor'], 'string', 'max' => 35],
            [['idEspecie'], 'exist', 'skipOnError' => true, 'targetClass' => Especie::className(), 'targetAttribute' => ['idEspecie' => 'idEspecie']],
            [['idNucleo'], 'exist', 'skipOnError' => true, 'targetClass' => Nucleo::className(), 'targetAttribute' => ['idNucleo' => 'idNucleo']],
            [['idRaca'], 'exist', 'skipOnError' => true, 'targetClass' => Raca::className(), 'targetAttribute' => ['idRaca' => 'idRaca']],
            [['idRebanho'], 'exist', 'skipOnError' => true, 'targetClass' => Rebanho::className(), 'targetAttribute' => ['idRebanho' => 'idRebanho']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idAnimal' => 'Id Animal',
            'marcaAuricular' => 'Marca Auricular',
            'genero' => 'Genero',
            'cor' => 'Cor',
            'dataNasc' => 'Data Nasc',
            'dataMorte' => 'Data Morte',
            'nrPai' => 'Nr Pai',
            'nrMae' => 'Nr Mae',
            'idRaca' => 'Id Raca',
            'idEspecie' => 'Id Especie',
            'idRebanho' => 'Id Rebanho',
            'idNucleo' => 'Id Nucleo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimaisFotos()
    {
        return $this->hasMany(AnimaisFoto::className(), ['idAnimal' => 'idAnimal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFotos()
    {
        return $this->hasMany(Foto::className(), ['idFoto' => 'idFoto'])->viaTable('Animais_Foto', ['idAnimal' => 'idAnimal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEspecie0()
    {
        return $this->hasOne(Especie::className(), ['idEspecie' => 'idEspecie']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdNucleo0()
    {
        return $this->hasOne(Nucleo::className(), ['idNucleo' => 'idNucleo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRaca0()
    {
        return $this->hasOne(Raca::className(), ['idRaca' => 'idRaca']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRebanho0()
    {
        return $this->hasOne(Rebanho::className(), ['idRebanho' => 'idRebanho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApadrinhamentos()
    {
        return $this->hasMany(Apadrinhamento::className(), ['idAnimal' => 'idAnimal']);
    }
}
