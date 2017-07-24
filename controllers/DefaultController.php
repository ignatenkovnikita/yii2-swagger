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

/**
 * Class DefaultController
 * @package ignatenkovnikita\swagger\controllers
 */
class DefaultController extends Controller
{

    /**
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = '_clear';
        return $this->render('index', [
            'url' => Url::to(['default/json'], true)
        ]);
    }

    /**
     *
     */
    public function actionJson()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        echo $this->getContent();
    }


    public function getContent()
    {
        $content = '';
        if ($this->module->path) {
            $path = \Yii::getAlias($this->module->path);
            $content = \Swagger\scan($path);
        }
        if ($this->module->url) {
            $content = file_get_contents($this->module->url);
        }


        if (is_callable($this->module->afterRender)) {
            $content = call_user_func($this->module->afterRender, $content);
        }


        return $content;
    }

}