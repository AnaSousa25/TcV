<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Distrito".
 *
 * @property integer $idDistrito
 * @property string $nome
 *
 * @property CodPostal[] $codPostals
 * @property Concelho[] $concelhos
 */
class Distrito extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Distrito';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDistrito' => 'ID Distrito',
            'nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodPostals()
    {
        return $this->hasMany(CodPostal::className(), ['idDistrito' => 'idDistrito']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConcelhos()
    {
        return $this->hasMany(Concelho::className(), ['idDistrito' => 'idDistrito']);
    }
}
