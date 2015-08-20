<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telegram_user".
 *
 * @property integer $id_telegram_user
 * @property string $country_code
 * @property string $cellphone
 * @property integer $id_user
 */
class TelegramUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'telegram_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_telegram_user', 'country_code', 'cellphone', 'id_user'], 'required'],
            [['id_telegram_user', 'id_user'], 'integer'],
            [['country_code'], 'string', 'max' => 10],
            [['cellphone'], 'string', 'max' => 35]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_telegram_user' => 'Id Telegram User',
            'country_code' => 'Country Code',
            'cellphone' => 'Cellphone',
            'id_user' => 'Id User',
        ];
    }
}
