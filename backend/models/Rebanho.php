<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Rebanho".
 *
 * @property integer $idRebanho
 * @property string $designacao
 * @property integer $idNucleo
 *
 * @property Animal[] $animals
 * @property Pastoreio[] $pastoreios
 * @property Nucleo $idNucleo0
 */
class Rebanho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Rebanho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['designacao', 'idNucleo'], 'required'],
            [['idNucleo'], 'integer'],
            [['designacao'], 'string', 'max' => 45],
            [['idNucleo'], 'exist', 'skipOnError' => true, 'targetClass' => Nucleo::className(), 'targetAttribute' => ['idNucleo' => 'idNucleo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRebanho' => 'Id Rebanho',
            'designacao' => 'Designacao',
            'idNucleo' => 'Id Nucleo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::className(), ['idRebanho' => 'idRebanho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPastoreios()
    {
        return $this->hasMany(Pastoreio::className(), ['idRebanho' => 'idRebanho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdNucleo0()
    {
        return $this->hasOne(Nucleo::className(), ['idNucleo' => 'idNucleo']);
    }
}
