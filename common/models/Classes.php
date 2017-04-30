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
class Classes extends ActiveRecord 
{
    
   
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%class}}';
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
            ['class', 'required'],
        ];
    }
    public function getClasses(){
        return $this::find()->all();
    }

    
}
