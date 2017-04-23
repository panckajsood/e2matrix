<?php
namespace backend\controllers;

use Yii;
use yii\base\DynamicModel;
use yii\web\Controller;
use common\models\User;
use common\models\User_Fields;
use common\models\LoginForm;
use backend\models\SignupForm;
use yii\db\Expression;

/**
 * Site controller
 */
class StudentController extends Controller
{
    /**
     * @inheritdoc
     */
   public function actionRegister(){
        if(Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $user_model = new SignupForm();
        $this->layout = 'main';
        if(Yii::$app->request->post()){ 
            if($user_model->load(Yii::$app->request->post())&& $user_model->signup()){ 
                return $this->goBack();
                
            } else{ 
                return $this->render('index', [
                           'user_model' => $user_model,
                        ]);
            } 
        }
        return $this->render('index',['user_model' => $user_model]);
    }
}
