<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Profissao".
 *
 * @property integer $idProfissao
 * @property string $nome
 *
 * @property Pessoa[] $pessoas
 */
class Profissao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Profissao';
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
            'idProfissao' => 'ID Profissão',
            'nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPessoas()
    {
        return $this->hasMany(Pessoa::className(), ['idProfissao' => 'idProfissao']);
    }
}
