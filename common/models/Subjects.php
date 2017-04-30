<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;


/**
 * User_Fields model
 *
 * @property integer $id
 * @property string $subjects
 
 */
class Subjects extends ActiveRecord 
{
    
    const CATEGORY_ID = 8;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%subjects}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['subject', 'required'],
            ['subject','string']
            
        ];
    }
    public function getSubjects(){
        return $this::find()->all();
    }

    
}
