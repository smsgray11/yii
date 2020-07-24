<?php


namespace app\controllers;


use yii\web\Controller;

class TestController extends Controller
{
 //   public $defaultAction = 'my-test';//на уровне контроллера
    public function actionIndex($name = Guest, $age = 25)
    {
        //var_dump($_GET);
 //       var_dump($name, $age);
//        return 'Hello world!';
        //return $this->renderFile('@app/views/test/index.php');
        //return $this->renderAjax('index');
        //return $this->renderPartial('index');
        return $this->render('index', compact('name', 'age'));
 /*       return $this->render('index',[
            'name' => $name,
            'age' => $age,
        ]);
 */
    }
    public function actionMyTest()// в адресе post-comment
    {
        return __METHOD__;
    }

 //   public function actions()
 //   {
 //       return [
 //           // объявляет "error" действие с помощью названия класса
 //           'test' => 'app\components\HelloAction',
 //        ];
 //   }
}