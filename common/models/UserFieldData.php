<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%user_fields_data}}".
 *
 * @property integer $user_fields_data_id
 * @property integer $field_id
 * @property integer $user_id
 * @property string $field_value
 * @property boolean $is_active
 * @property integer $createdby
 * @property string $createddate
 * @property integer $updatedby
 * @property string $updateddate
 *
 * @property User $createdby0
 * @property Fields $field
 * @property User $updatedby0
 * @property User $user
 */
class UserFieldData extends ActiveRecord 
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_fields_data}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['field_id', 'user_id', 'field_value', 'createdby', 'createddate'], 'required'],
            [['field_id', 'user_id', 'createdby', 'updatedby'], 'integer'],
            [['field_value'], 'string'],
            [['is_active'], 'boolean'],
            //[['createddate', 'updateddate'], 'safe'],
            //[['createdby'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['createdby' => 'user_id']],
            //[['field_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fields::className(), 'targetAttribute' => ['field_id' => 'field_id']],
            //[['updatedby'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updatedby' => 'user_id']],
            //[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_fields_data_id' => 'User Fields Data ID',
            'field_id' => 'Field ID',
            'user_id' => 'User ID',
            'field_value' => 'Field Value',
            'is_active' => 'Is Active',
            'createdby' => 'Createdby',
            'createddate' => 'Createddate',
            'updatedby' => 'Updatedby',
            'updateddate' => 'Updateddate',
        ];
    }

  
    
}
