<?php

/**
 * User: Ronzin Nikita (nexux93@yandex.ru)
 * Date: 16.09.2019 : 13:55
 */

namespace app\controllers;

use app\models\Active;
use yii\base\Controller;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;

class ActiveController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index', 'view', 'create'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex($sort = false)
    {

        $query = Active::find();
        $provider = new ActiveDataProvider([
           'query' => $query
        ]);

        return $this->render('index.twig', [
            'provider' => $provider
        ]);
    }

    public function actionView()
    {

        $id = \Yii::$app->request->get('id');
        $activeItem = Active::findOne($id);


        return $this->render('view.twig', [
            'model' => $activeItem
        ]);
    }

    public function actionCreate()
    {
        $activeItem = new Active();
        $activeItem->title = 'Create Quest';

        return $this->render('create.twig', [
            'model' => $activeItem
        ]);
    }

    public function actionDelite()
    {
        return 'Action@Delite';
    }

    public function actionSubmit()
    {
        $model = new Active();

        if ($model->load(\Yii::$app->request->post())) {

            if ($model->validate()) {

                $model->save();
                return 'Success' . VarDumper::export($model->attributes);

            } else {

                return "Failed" . VarDumper::export($model->errors);
            }
        }
        return 'Active@Submit';
    }
}