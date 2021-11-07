<?php

namespace app\modules\student\controllers;

use app\modules\student\models\student;
use app\modules\student\models\studentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StudentController implements the CRUD actions for student model.
 */
class StudentController extends Controller
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
     * Lists all student models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new studentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single student model.
     * @param int $studID Stud ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($studID)
    {
        return $this->render('view', [
            'model' => $this->findModel($studID),
        ]);
    }

    /**
     * Creates a new student model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new student();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'studID' => $model->studID]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing student model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $studID Stud ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($studID)
    {
        $model = $this->findModel($studID);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'studID' => $model->studID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing student model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $studID Stud ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($studID)
    {
        $this->findModel($studID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the student model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $studID Stud ID
     * @return student the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($studID)
    {
        if (($model = student::findOne($studID)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
