<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "CodPostal".
 *
 * @property integer $idCodPostal
 * @property string $codigo
 * @property string $localidade
 * @property integer $idConcelho
 * @property integer $idDistrito
 *
 * @property Concelho $idConcelho0
 * @property Distrito $idDistrito0
 */
class CodPostal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CodPostal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'localidade', 'idConcelho', 'idDistrito'], 'required'],
            [['idConcelho', 'idDistrito'], 'integer'],
            [['codigo'], 'string', 'max' => 10],
            [['localidade'], 'string', 'max' => 45],
            [['idConcelho'], 'exist', 'skipOnError' => true, 'targetClass' => Concelho::className(), 'targetAttribute' => ['idConcelho' => 'idConcelho']],
            [['idDistrito'], 'exist', 'skipOnError' => true, 'targetClass' => Distrito::className(), 'targetAttribute' => ['idDistrito' => 'idDistrito']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCodPostal' => 'Id Cod Postal',
            'codigo' => 'Codigo',
            'localidade' => 'Localidade',
            'idConcelho' => 'Id Concelho',
            'idDistrito' => 'Id Distrito',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdConcelho0()
    {
        return $this->hasOne(Concelho::className(), ['idConcelho' => 'idConcelho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDistrito0()
    {
        return $this->hasOne(Distrito::className(), ['idDistrito' => 'idDistrito']);
    }
}
