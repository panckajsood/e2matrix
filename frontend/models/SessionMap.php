<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "session_map".
 *
 * @property integer $id
 * @property string $name
 * @property string $descr
 * @property string $duration
 */
class SessionMap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'session_map';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'descr', 'duration'], 'required'],
            [['descr'], 'string'],
            [['duration'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'descr' => 'Descr',
            'duration' => 'Duration',
        ];
    }
}
