<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use common\models\LoginForm;

/**
 * Site controller
 */
class StudentController extends Controller
{
    /**
     * @inheritdoc
     */
   public function actionRegister(){
       $this->layout = 'main';
        return $this->render('index');
    }
}
