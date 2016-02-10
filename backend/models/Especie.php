<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Especie".
 *
 * @property integer $idEspecie
 * @property string $designacao
 *
 * @property Animal[] $animals
 */
class Especie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Especie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['designacao'], 'required'],
            [['designacao'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEspecie' => 'Id Especie',
            'designacao' => 'Designacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::className(), ['idEspecie' => 'idEspecie']);
    }
}
