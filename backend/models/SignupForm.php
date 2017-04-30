<?php 
namespace backend\models;
use yii\base\Model;
use common\models\User;
use common\models\UserFields;
use common\models\UserFieldData;
use yii\db\Expression;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $phone_no;
    public $gender;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $dob;
    public $father_name;
    public $school_name;
    public $address;
    public $fees;
    public $subjects;
    public $class;
    public $other_detail;
    public $joining_date;
    


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            [['username','first_name','fees','father_name','dob','subjects','school_name',
             'last_name','class','phone_no','gender', 'joining_date'], 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['address', 'string', 'min' => 2, 'max' => 500],
            [['email','username','father_name'], 'trim'],
            ['fees', 'integer','min'=>400,'max'=>5000],
            ['email', 'required'],
            ['email', 'email'],
            ['phone_no','number'],
            [['dob','joining_date'], 'date', 'format' => 'php:m-d-Y'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            [['password','other_detail'], 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        //if (!$this->validate()) { 
          //  return null;
        //}
        $db = \Yii::$app->db->beginTransaction();
        $return = true;
        try{
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->save(); 
            if($this->updateProfile($user)){
                $db->commit();  
                $return = $user;
            } else{
                $return = false;
            }
        
        } catch(Exception $e){
            $db->rollBack();
            $return = false;
        }
        return $return;
    }
    
    public function updateProfile($user = false){
    
        /**
         * User Field Data Class Object
         */
        if($user){
            $user_object =  (array) $this; 
            $field_data = new UserFieldData();
            $profile_fields = UserFields::find('field_slug')->asArray()->all();
            /**
              * Profile Fields Array
            */
            $i = 0;
            foreach($profile_fields as $fields){
                $field[$i]['slug'] = $fields['field_slug'];
                $field[$i]['id'] = $fields['field_id'];
                $i++;
            } //print_r($field);  //die;
            for($index = 0 ; $index<count($field); $index++){  
                if(isset($user_object[$field[$index]['slug']])){
                    $field_data = new UserFieldData();
                    $field_data->field_id = $field[$index]['id']; 
                    $field_data->field_value = $user_object[$field[$index]['slug']];
                    $field_data->user_id = $user->id;
                    $field_data->is_active = 1;
                    $field_data->updatedby = 1;
                    $field_data->createdby = 1;
                    $field_data->createddate = date("Y-m-d");
                    if(!$field_data->save()){  
                        return false;
                    } 
                } else{
                        return false;
                }
            }
            return true;
        } else {
            return false;
        }
    }
}
?>