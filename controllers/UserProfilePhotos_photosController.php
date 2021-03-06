<?php

namespace app\controllers;

use Yii;
use app\models\UserProfilePhotos_photos;
use app\models\UserProfilePhotos_photosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserProfilePhotos_photosController implements the CRUD actions for UserProfilePhotos_photos model.
 */
class UserProfilePhotos_photosController extends Controller
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
     * Lists all UserProfilePhotos_photos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserProfilePhotos_photosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserProfilePhotos_photos model.
     * @param integer $idUserProfilePhotos
     * @param integer $PhotoSize_idPhotoSize
     * @return mixed
     */
    public function actionView($idUserProfilePhotos, $PhotoSize_idPhotoSize)
    {
        return $this->render('view', [
            'model' => $this->findModel($idUserProfilePhotos, $PhotoSize_idPhotoSize),
        ]);
    }

    /**
     * Creates a new UserProfilePhotos_photos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserProfilePhotos_photos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idUserProfilePhotos' => $model->idUserProfilePhotos, 'PhotoSize_idPhotoSize' => $model->PhotoSize_idPhotoSize]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing UserProfilePhotos_photos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idUserProfilePhotos
     * @param integer $PhotoSize_idPhotoSize
     * @return mixed
     */
    public function actionUpdate($idUserProfilePhotos, $PhotoSize_idPhotoSize)
    {
        $model = $this->findModel($idUserProfilePhotos, $PhotoSize_idPhotoSize);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idUserProfilePhotos' => $model->idUserProfilePhotos, 'PhotoSize_idPhotoSize' => $model->PhotoSize_idPhotoSize]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing UserProfilePhotos_photos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idUserProfilePhotos
     * @param integer $PhotoSize_idPhotoSize
     * @return mixed
     */
    public function actionDelete($idUserProfilePhotos, $PhotoSize_idPhotoSize)
    {
        $this->findModel($idUserProfilePhotos, $PhotoSize_idPhotoSize)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UserProfilePhotos_photos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idUserProfilePhotos
     * @param integer $PhotoSize_idPhotoSize
     * @return UserProfilePhotos_photos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idUserProfilePhotos, $PhotoSize_idPhotoSize)
    {
        if (($model = UserProfilePhotos_photos::findOne(['idUserProfilePhotos' => $idUserProfilePhotos, 'PhotoSize_idPhotoSize' => $PhotoSize_idPhotoSize])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
