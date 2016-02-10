<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Animais_Foto".
 *
 * @property integer $idFoto
 * @property integer $idAnimal
 *
 * @property Animal $idAnimal0
 * @property Foto $idFoto0
 */
class AnimaisFoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Animais_Foto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idFoto', 'idAnimal'], 'required'],
            [['idFoto', 'idAnimal'], 'integer'],
            [['idAnimal'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['idAnimal' => 'idAnimal']],
            [['idFoto'], 'exist', 'skipOnError' => true, 'targetClass' => Foto::className(), 'targetAttribute' => ['idFoto' => 'idFoto']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idFoto' => 'Id Foto',
            'idAnimal' => 'Id Animal',
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
    public function getIdFoto0()
    {
        return $this->hasOne(Foto::className(), ['idFoto' => 'idFoto']);
    }
}
