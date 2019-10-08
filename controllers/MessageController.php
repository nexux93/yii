<?php
/**
 * User: Ronzin Nikita (nexux93@yandex.ru)
 * Date: 18.09.2019 : 17:48
 */

namespace app\controllers;


use app\models\UserMessage;
use yii\web\Controller;

class MessageController extends Controller
{
    public function activeIndex()
    {
        $model = new UserMessage();

        return $this->render('index.twig', compact($model));
    }

    public function actionView()
    {
        $model = new UserMessage();

        return $this->render('view.twig', [
            'model' => $model
        ]);
    }

    public function actionSubmit()
    {
        $model = new UserMessage();

        $model ->load(\Yii::$app->request->post());


        if($model->validate()) {
            return $this->redirect(['/message/result']);
        } else {
            return $this->redirect(['/message/view']);
        }
    }
}