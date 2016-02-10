<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Utilizador".
 *
 * @property integer $idUtilizador
 * @property string $nome
 * @property string $pass
 * @property string $email
 */
class Utilizador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Utilizador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'pass', 'email'], 'required'],
            [['nome', 'pass', 'email'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUtilizador' => 'Id Utilizador',
            'nome' => 'Nome',
            'pass' => 'Pass',
            'email' => 'Email',
        ];
    }
}
