<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telegram_application".
 *
 * @property integer $id_application
 * @property string $name
 * @property string $key_application
 * @property string $hash_application
 * @property integer $id_user
 */
class TelegramApplication extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'telegram_application';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'key_application', 'hash_application', 'id_user'], 'required'],
            [['id_user'], 'integer'],
            [['name', 'key_application', 'hash_application'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_application' => 'Id Application',
            'name' => 'Name',
            'key_application' => 'Key Application',
            'hash_application' => 'Hash Application',
            'id_user' => 'Id User',
        ];
    }
}
