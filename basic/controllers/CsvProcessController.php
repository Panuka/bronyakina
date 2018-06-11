<?php

namespace app\controllers;

use app\models\CsvForm;
use Yii;
use yii\web\Controller;

class CsvProcessController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->render('index');
        }


        $model = new CsvForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('load', [
            'model' => $model,
        ]);
    }

}
