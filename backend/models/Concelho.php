<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Concelho".
 *
 * @property integer $idConcelho
 * @property string $nome
 * @property integer $idDistrito
 *
 * @property CodPostal[] $codPostals
 * @property Distrito $idDistrito0
 */
class Concelho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Concelho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'idDistrito'], 'required'],
            [['idDistrito'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['idDistrito'], 'exist', 'skipOnError' => true, 'targetClass' => Distrito::className(), 'targetAttribute' => ['idDistrito' => 'idDistrito']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idConcelho' => 'Id Concelho',
            'nome' => 'Nome',
            'idDistrito' => 'Id Distrito',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodPostals()
    {
        return $this->hasMany(CodPostal::className(), ['idConcelho' => 'idConcelho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDistrito0()
    {
        return $this->hasOne(Distrito::className(), ['idDistrito' => 'idDistrito']);
    }
}
