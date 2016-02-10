<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Pessoa".
 *
 * @property integer $idPessoa
 * @property string $nome
 * @property string $morada
 * @property string $localidade
 * @property string $concelho
 * @property string $distrito
 * @property integer $idPais
 * @property string $codPostal
 * @property string $dataNasc
 * @property string $genero
 * @property string $telef
 * @property string $email
 * @property string $nif
 * @property integer $idProfissao
 * @property integer $ativo
 * @property integer $padrinho
 * @property string $nrSocio
 * @property integer $nrAnimaisApadrinha
 * @property string $dataAssociacao
 * @property integer $pastor
 * @property integer $dono
 *
 * @property Apadrinhamento[] $apadrinhamentos
 * @property Exploracao[] $exploracaos
 * @property Pastoreio[] $pastoreios
 * @property Pais $idPais0
 * @property Profissao $idProfissao0
 */
class Pessoa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Pessoa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'idPais', 'codPostal', 'dataNasc', 'idProfissao', 'ativo', 'padrinho', 'pastor', 'dono'], 'required'],
            [['idPais', 'idProfissao', 'ativo', 'padrinho', 'nrAnimaisApadrinha', 'pastor', 'dono'], 'integer'],
            [['dataNasc', 'dataAssociacao'], 'safe'],
            [['nome', 'morada'], 'string', 'max' => 70],
            [['localidade', 'concelho', 'distrito', 'nrSocio'], 'string', 'max' => 45],
            [['codPostal'], 'string', 'max' => 10],
            [['genero', 'telef'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 100],
            [['nif'], 'string', 'max' => 9],
            [['idPais'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::className(), 'targetAttribute' => ['idPais' => 'idPais']],
            [['idProfissao'], 'exist', 'skipOnError' => true, 'targetClass' => Profissao::className(), 'targetAttribute' => ['idProfissao' => 'idProfissao']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPessoa' => 'Id Pessoa',
            'nome' => 'Nome',
            'morada' => 'Morada',
            'localidade' => 'Localidade',
            'concelho' => 'Concelho',
            'distrito' => 'Distrito',
            'idPais' => 'Id Pais',
            'codPostal' => 'Cod Postal',
            'dataNasc' => 'Data Nasc',
            'genero' => 'Genero',
            'telef' => 'Telef',
            'email' => 'Email',
            'nif' => 'Nif',
            'idProfissao' => 'Id Profissao',
            'ativo' => 'Ativo',
            'padrinho' => 'Padrinho',
            'nrSocio' => 'Nr Socio',
            'nrAnimaisApadrinha' => 'Nr Animais Apadrinha',
            'dataAssociacao' => 'Data Associacao',
            'pastor' => 'Pastor',
            'dono' => 'Dono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApadrinhamentos()
    {
        return $this->hasMany(Apadrinhamento::className(), ['idPessoa' => 'idPessoa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExploracaos()
    {
        return $this->hasMany(Exploracao::className(), ['idDono' => 'idPessoa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPastoreios()
    {
        return $this->hasMany(Pastoreio::className(), ['idPastor' => 'idPessoa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPais0()
    {
        return $this->hasOne(Pais::className(), ['idPais' => 'idPais']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProfissao0()
    {
        return $this->hasOne(Profissao::className(), ['idProfissao' => 'idProfissao']);
    }
}
