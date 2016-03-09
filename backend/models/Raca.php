<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Raca".
 *
 * @property integer $idRaca
 * @property string $designacao
 *
 * @property Animal[] $animals
 */
class Raca extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Raca';
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
            'idRaca' => 'ID Raça',
            'designacao' => 'Designação',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::className(), ['idRaca' => 'idRaca']);
    }
}
