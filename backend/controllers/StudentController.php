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
        try{
            $students = \common\models\User::find()->all();
            (empty($students)?$students_detail = []:$students_detail = $this->preFill($students)); 
            
        } catch (Exception $ex) {
           throw new \yii\web\HttpException(404,$e);
        }
        return $this->render('user-listing',['students' => $students_detail]);
     }
   public function actionRegister(){
        if(Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        try{
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
                    if($user_model->signup()){
                    Yii::$app->session->setFlash('success', 'Student has been successfully registered!');
                    return $this->redirect(\Yii::$app->request->getReferrer());
                    
                    } else {
                        Yii::$app->session->setFlash('error',$user_model->getFirstErrors());
                        return $this->redirect(\Yii::$app->request->getReferrer());   
                    }
                } else{ 
                    return $this->render('index', [
                               'user_model' => $user_model,
                               'subjects' => $subjects_view,
                               'class' => $classes_view,
                            ]);
                } 
            } 
        
        } catch(Exception $e){
            throw new \yii\web\HttpException(404,$e);
        }
        return $this->render('index',['user_model' => $user_model,'subjects' => $subjects_view,
                                      'class' => $classes_view]);
    }
    /**
     * Prefill Profile Fields
     */
    public function preFill($user){ 
        
        if(!empty($user)){ 
            $student_detail_info = [];
            $detail_info = [];
            $index = 0;
            foreach($user as $userr){ 
                $index = $index + 1;
                $fields = \common\models\UserFields::find()
                           ->joinWith(['userFieldData dT' => function($uF) use ($userr){
                                    $uF->onCondition(['dT.user_id' => $userr->id]);
                                }],true,'RIGHT JOIN')
                           ->andWhere(['dT.user_id' => $userr->id])->asArray()->all();
                
                foreach($fields as $field){
                    $detail_info[$field['field_slug']] = $field['userFieldData']['field_value']; 
                }
                $student_detail_info[$index]['name'] = $userr->first_name.''.$userr->last_name;
                $student_detail_info[$index]['phone_no'] = $userr->phone_no;
                $student_detail_info[$index]['id'] = $userr->id;
                $student_detail_info[$index]['gender'] = $userr->gender;
                $student_detail_info[$index]['dob'] = $userr->dob;
                $student_detail_info[$index]['joining_date'] = $userr->joining_date;
                $student_detail_info[$index]['dynamiic_data'] = $detail_info;
            } 
            return $student_detail_info;
        } else {
            return $student_detail_info = [];
        }
        
        
    }
}
