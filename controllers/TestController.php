<?php


namespace app\controllers;



use yii\web\View;

class TestController extends AppController
{
    //   public $defaultAction = 'my-test';//на уровне контроллера
    public $my_var;
//    public $layout = 'test';

    public function actionIndex($name = Guest, $age = 25)
    {
        $this->layout = 'test';
//        var_dump($_GET);
//        var_dump($name, $age);
//        return 'Hello world!';
//        return $this->renderFile('@app/views/test/index.php');
//        return $this->renderAjax('index');
//        return $this->renderPartial('index');
        $this->my_var = 'My variable';
//        debug(\yii::$app);
//        \yii::$app->view->params['t1'] = 'T1 params 123';
        $this->view->params['t1'] = 'T1 params 123';
        \Yii::$app->view->on(View::EVENT_END_BODY, function () {
            echo " <p> &copy; Yii2 " . date("Y") . "</p>";
        });
        return $this->render('index', compact('name', 'age'));
        /*       return $this->render('index',[
                   'name' => $name,
                   'age' => $age,
               ]);
        */
    }

    public function actionMyTest()// в адресе post-comment
    {
//        return __METHOD__;
        $this->view->title = 'Test Page';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'мета теги...'], 'description');
        return $this->render('my-test');
    }

    //   public function actions()
    //   {
    //       return [
    //           // объявляет "error" действие с помощью названия класса
    //           'test' => 'app\components\HelloAction',
    //        ];
    //   }
}