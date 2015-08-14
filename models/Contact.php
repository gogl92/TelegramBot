<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Contact".
 *
 * @property integer $idContact
 * @property string $phone_number
 * @property string $first_name
 * @property string $last_name
 * @property integer $user_id
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone_number', 'first_name'], 'required'],
            [['user_id'], 'integer'],
            [['phone_number', 'first_name', 'last_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idContact' => 'This object represents a phone contact.',
            'phone_number' => 'Contact\'s phone number',
            'first_name' => 'Contact\'s first name',
            'last_name' => 'Optional. Contact\'s last name',
            'user_id' => 'Optional. Contact\'s user identifier in Telegram',
        ];
    }
}
