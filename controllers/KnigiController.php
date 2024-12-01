<?php

namespace app\controllers;

use app\models\Knigi;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * KnigiController implements the CRUD actions for Knigi model.
 */
class KnigiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Knigi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Knigi::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'код_книги' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Knigi model.
     * @param int $код_книги Код Книги
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($код_книги)
    {
        return $this->render('view', [
            'model' => $this->findModel($код_книги),
        ]);
    }

    /**
     * Creates a new Knigi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Knigi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'код_книги' => $model->код_книги]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Knigi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $код_книги Код Книги
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($код_книги)
    {
        $model = $this->findModel($код_книги);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'код_книги' => $model->код_книги]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Knigi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $код_книги Код Книги
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($код_книги)
    {
        $this->findModel($код_книги)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Knigi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $код_книги Код Книги
     * @return Knigi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($код_книги)
    {
        if (($model = Knigi::findOne(['код_книги' => $код_книги])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
