<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 */
class UserTelegram extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name'], 'required'],
            [['first_name', 'last_name', 'username'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Unique identifier for this user or bot',
            'first_name' => 'User‘s or bot’s first name',
            'last_name' => 'Optional. User‘s or bot’s last name',
            'username' => 'Optional. User‘s or bot’s username',
        ];
    }
}
