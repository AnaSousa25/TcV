<?php

namespace backend\controllers;

use Yii;
use backend\models\Pessoa;
use backend\models\PessoaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PessoaController implements the CRUD actions for Pessoa model.
 */
class PessoaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pessoa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PessoaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pessoa model.
     * @param integer $idPessoa
     * @param integer $idPais
     * @param integer $idProfissao
     * @return mixed
     */
    public function actionView($idPessoa, $idPais, $idProfissao)
    {
        return $this->render('view', [
            'model' => $this->findModel($idPessoa, $idPais, $idProfissao),
        ]);
    }

    /**
     * Creates a new Pessoa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pessoa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idPessoa' => $model->idPessoa, 'idPais' => $model->idPais, 'idProfissao' => $model->idProfissao]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pessoa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idPessoa
     * @param integer $idPais
     * @param integer $idProfissao
     * @return mixed
     */
    public function actionUpdate($idPessoa, $idPais, $idProfissao)
    {
        $model = $this->findModel($idPessoa, $idPais, $idProfissao);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idPessoa' => $model->idPessoa, 'idPais' => $model->idPais, 'idProfissao' => $model->idProfissao]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pessoa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idPessoa
     * @param integer $idPais
     * @param integer $idProfissao
     * @return mixed
     */
    public function actionDelete($idPessoa, $idPais, $idProfissao)
    {
        $this->findModel($idPessoa, $idPais, $idProfissao)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pessoa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idPessoa
     * @param integer $idPais
     * @param integer $idProfissao
     * @return Pessoa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idPessoa, $idPais, $idProfissao)
    {
        if (($model = Pessoa::findOne(['idPessoa' => $idPessoa, 'idPais' => $idPais, 'idProfissao' => $idProfissao])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
