<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Mylist;



class SiteController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionTest()
    {
        $var = 'My page';
        $array = Mylist::getAll();
        return $this->render('test', ['varInView' => $var, 'arrayInView' => $array]);
    }

    public function actionView()
    {
        $one = Mylist::getOne();
        return $this->render('view',['one'=>$one]);
    }
}
