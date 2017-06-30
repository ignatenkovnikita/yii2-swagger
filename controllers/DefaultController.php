<?php
/**
 * Created by PhpStorm.
 * User: ignatenkovnikita
 * Web Site: http://IgnatenkovNikita.ru
 */

namespace ignatenkovnikita\swagger;


use yii\web\Controller;

class DefaultController extends Controller
{


    public function actionIndex(){

        $this->render('index');
    }


}