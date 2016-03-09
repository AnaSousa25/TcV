<?php

namespace backend\controllers;

use Yii;
use backend\models\Pastoreio;
use backend\models\PastoreioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PastoreioController implements the CRUD actions for Pastoreio model.
 */
class PastoreioController extends Controller
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
                    //'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pastoreio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PastoreioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pastoreio model.
     * @param integer $idPastor
     * @param integer $idRebanho
     * @param string $idExploracao
     * @return mixed
     */
    public function actionView($idPastor, $idRebanho, $idExploracao)
    {
        return $this->render('view', [
            'model' => $this->findModel($idPastor, $idRebanho, $idExploracao),
        ]);
    }

    /**
     * Creates a new Pastoreio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pastoreio();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idPastor' => $model->idPastor, 'idRebanho' => $model->idRebanho, 'idExploracao' => $model->idExploracao]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pastoreio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idPastor
     * @param integer $idRebanho
     * @param string $idExploracao
     * @return mixed
     */
    public function actionUpdate($idPastor, $idRebanho, $idExploracao)
    {
        $model = $this->findModel($idPastor, $idRebanho, $idExploracao);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idPastor' => $model->idPastor, 'idRebanho' => $model->idRebanho, 'idExploracao' => $model->idExploracao]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pastoreio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idPastor
     * @param integer $idRebanho
     * @param string $idExploracao
     * @return mixed
     */
    public function actionDelete($idPastor, $idRebanho, $idExploracao)
    {
        $this->findModel($idPastor, $idRebanho, $idExploracao)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pastoreio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idPastor
     * @param integer $idRebanho
     * @param string $idExploracao
     * @return Pastoreio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idPastor, $idRebanho, $idExploracao)
    {
        if (($model = Pastoreio::findOne(['idPastor' => $idPastor, 'idRebanho' => $idRebanho, 'idExploracao' => $idExploracao])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
