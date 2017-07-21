<?php
/**
 * Created by PhpStorm.
 * User: ignatenkovnikita
 * Web Site: http://IgnatenkovNikita.ru
 */

namespace ignatenkovnikita\swagger\controllers;


use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;

class DefaultController extends Controller
{

    public function actionIndex()
    {

//        $this->module->url;
        $this->layout = '_clear';
        $url = '/api/swagger/swagger.yaml';
        return $this->render('index', [
            'url' => $this->module->url ? $this->module->url : Url::to(['default/json'])
        ]);
    }

    public function actionJson()
    {
        $path = \Yii::getAlias($this->module->path);
        $swagger = \Swagger\scan($path);

        \Yii::$app->response->format = Response::FORMAT_JSON;
        echo $swagger;
    }


}