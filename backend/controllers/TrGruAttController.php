<?php

namespace backend\controllers;

use Yii;
use backend\models\TrGruAtt;
use backend\models\TrGruAttSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TrGruAttController implements the CRUD actions for TrGruAtt model.
 */
class TrGruAttController extends Controller
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
     * Lists all TrGruAtt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TrGruAttSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TrGruAtt model.
     * @param integer $gru_id
     * @param integer $gru_att_id
     * @return mixed
     */
    public function actionView($gru_id, $gru_att_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($gru_id, $gru_att_id),
        ]);
    }

    /**
     * Creates a new TrGruAtt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id='')
	  {
		 $model = new TrGruAtt;
 
        if ($model->load(Yii::$app->request->post())) {
			
            // process uploaded image file instance
            $image = $model->uploadImage();
			$model->gru_id = $id;
			$model->gru_att_id = $model->newAttID($id);
            
            //$model->rec_datecreate = date('yyyy-mm-dd hh:mm');
           // $model->rec_dateupdate = date('yyyy-mm-dd hh:mm');
 
            if ($model->save()) {
                // upload only if valid uploaded file instance found
                if ($image !== false) {
                    $path = $model->getImageFile();
                    $image->saveAs($path);
                }
                Yii::$app->getSession()->setFlash('success', 'Add attachment success!');
                return $this->redirect(['tr-gru/view', 'id' => $model->gru_id]);
            }
        }
        else {
            return $this->render('create', [
                'model' => $model,
                'gru_id' => $id
            ]);
        }
    }

    /**
     * Updates an existing TrGruAtt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $gru_id
     * @param integer $gru_att_id
     * @return mixed
     */
   public function actionUpdate($gru_id, $gru_att_id)
    {
		$model = $this->findModel($gru_id, $gru_att_id);
		$oldfile = $model->getimageFile();
		$gru_att_orgfile = $model -> gru_att_orgfile;
		

        if ($model->load(Yii::$app->request->post())){
			$image = $model->uploadImage();
			
			if($image === false){
				$model->gru_att_orgfile = $gru_att_orgfile;
			}
		if ($model->save()) {
                // upload only if valid uploaded file instance found
                if ($image !== false && !empty($gru_att_orgfile)) { // delete old and overwrite
                   // unlink($oldFile);
                    $path = $model->getImageFile();
                    $image->saveAs($path);
                }

                // else {
                //     $path = $model->getImageFile();
                //     $image->saveAs($path);
                // }
                
                Yii::$app->getSession()->setFlash('success', 'Update attachment success!');
                return $this->redirect(['tr-gru/view', 'id' => $model->gru_id]);
            } else {
                // error in saving model
            }
        }
        return $this->render('update', [
            'model'=>$model,
        ]);
    }

    /**
     * Deletes an existing TrGruAtt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $gru_id
     * @param integer $gru_att_id
     * @return mixed
     */
     public function actionDelete($gru_id, $gru_att_id)
    {
		$model = $this->findModel($gru_id, $gru_att_id);
 
        // validate deletion and on failure process any exception 
        // e.g. display an error message 
        if ($model->delete()) {
            if (!$model->deleteImage()) {
                Yii::$app->session->setFlash('error', 'Error deleting image');
            }

            Yii::$app->getSession()->setFlash('success', 'Delete attachment success!');
            return $this->redirect(['tr-gru/view', 'id' => $model->gru_id]);
        }
		
		
    }

    /**
     * Finds the TrGruAtt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $gru_id
     * @param integer $gru_att_id
     * @return TrGruAtt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($gru_id, $gru_att_id)
    {
        if (($model = TrGruAtt::findOne(['gru_id' => $gru_id, 'gru_att_id' => $gru_att_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
