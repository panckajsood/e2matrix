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
   public function actionUser(){
       if(Yii::$app->user->isGuest) {
            return $this->goHome();
        }   
        return $this->render('user-listing');
     }
   public function actionRegister(){
        if(Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $user_model = new SignupForm();
        $subjects =  new \common\models\Subjects();
        $subjects_array =  (array)$subjects->subjects;
        $classes =  new \common\models\Classes();
        $classes_array =  (array)$classes->classes;
        $subjects_view = [];
        $classes_view = [];
        if(!empty($subjects_array)){
            foreach($subjects_array as $obj_key => $obj_val){ 
                $subjects_view[$obj_val['subject']] = $obj_val['subject'];
            }
        } 
        if(!empty($classes_array)){
            foreach($classes_array as $obj_key => $obj_val){
                $classes_view[$obj_val['class']] = $obj_val['class'];
            }
        } 
        $this->layout = 'main';
        if(Yii::$app->request->post()){ 
            if($user_model->load(Yii::$app->request->post())&&$user_model->validate()){ 
                $user_model->signup();
                return $this->goBack();
                
            } else{ 
                return $this->render('index', [
                           'user_model' => $user_model,
                           'subjects' => $subjects->subjects,
                           'class' => $class->classes,
                        ]);
            } 
        }
        return $this->render('index',['user_model' => $user_model,'subjects' => $subjects_view,
                                      'class' => $classes_view]);
    }
}
