<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Pastoreio".
 *
 * @property integer $idPastor
 * @property integer $idRebanho
 * @property string $idExploracao
 * @property string $data
 *
 * @property Exploracao $idExploracao0
 * @property Pessoa $idPastor0
 * @property Rebanho $idRebanho0
 */
class Pastoreio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Pastoreio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPastor', 'idRebanho', 'idExploracao'], 'required'],
            [['idPastor', 'idRebanho'], 'integer'],
            [['data'], 'safe'],
            [['idExploracao'], 'string', 'max' => 30],
            [['idExploracao'], 'exist', 'skipOnError' => true, 'targetClass' => Exploracao::className(), 'targetAttribute' => ['idExploracao' => 'marca']],
            [['idPastor'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoa::className(), 'targetAttribute' => ['idPastor' => 'idPessoa']],
            [['idRebanho'], 'exist', 'skipOnError' => true, 'targetClass' => Rebanho::className(), 'targetAttribute' => ['idRebanho' => 'idRebanho']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPastor' => 'Id Pastor',
            'idRebanho' => 'Id Rebanho',
            'idExploracao' => 'Id Exploracao',
            'data' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdExploracao0()
    {
        return $this->hasOne(Exploracao::className(), ['marca' => 'idExploracao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPastor0()
    {
        return $this->hasOne(Pessoa::className(), ['idPessoa' => 'idPastor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRebanho0()
    {
        return $this->hasOne(Rebanho::className(), ['idRebanho' => 'idRebanho']);
    }
}
