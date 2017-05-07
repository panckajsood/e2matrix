<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use common\models\UserFieldData;


/**
 * User_Fields model
 *
 * @property integer $field_id
 * @property string $field_name
 * @property string $field_slug
 * @property string $field_type
 * @property integer $is_searchable
 * @property integer $is_required
 * @property integer $category_id
 * @property integer $group_id
 * @property integer $is_active
 * @property integer $created_by
 * @property datetime $createddate
 * @property int $updatedby
 * @property  datetime $updateddate 
 */
class UserFields extends ActiveRecord 
{
    
    const CATEGORY_ID = 8;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fields}}';
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
     * UserFieldData
     */
    public function getUserFieldData(){
        return $this->hasOne(UserFieldData::className(), ['field_id' => 'field_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['category_id', 'default', 'value' => self::CATEGORY_ID],
            
        ];
    }

    
}
