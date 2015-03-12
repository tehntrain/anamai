<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Anc;
use frontend\models\AncSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AncController implements the CRUD actions for Anc model.
 */
class AncController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Anc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AncSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Anc model.
     * @param string $HOSPCODE
     * @param string $PID
     * @param string $DATE_SERV
     * @return mixed
     */
    public function actionView($HOSPCODE, $PID, $DATE_SERV)
    {
        return $this->render('view', [
            'model' => $this->findModel($HOSPCODE, $PID, $DATE_SERV),
        ]);
    }

    /**
     * Creates a new Anc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Anc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'HOSPCODE' => $model->HOSPCODE, 'PID' => $model->PID, 'DATE_SERV' => $model->DATE_SERV]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Anc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $HOSPCODE
     * @param string $PID
     * @param string $DATE_SERV
     * @return mixed
     */
    public function actionUpdate($HOSPCODE, $PID, $DATE_SERV)
    {
        $model = $this->findModel($HOSPCODE, $PID, $DATE_SERV);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'HOSPCODE' => $model->HOSPCODE, 'PID' => $model->PID, 'DATE_SERV' => $model->DATE_SERV]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Anc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $HOSPCODE
     * @param string $PID
     * @param string $DATE_SERV
     * @return mixed
     */
    public function actionDelete($HOSPCODE, $PID, $DATE_SERV)
    {
        $this->findModel($HOSPCODE, $PID, $DATE_SERV)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Anc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $HOSPCODE
     * @param string $PID
     * @param string $DATE_SERV
     * @return Anc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($HOSPCODE, $PID, $DATE_SERV)
    {
        if (($model = Anc::findOne(['HOSPCODE' => $HOSPCODE, 'PID' => $PID, 'DATE_SERV' => $DATE_SERV])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
