<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_configuration".
 *
 * @property integer $id_app
 * @property integer $api_id
 * @property string $api_hash
 * @property string $app_title
 * @property string $short_name
 * @property string $gcm_api_key
 * @property string $test_configuration
 * @property string $production_configuration
 * @property string $public_keys
 */
class AppConfiguration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'app_configuration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_app', 'api_id', 'api_hash', 'app_title', 'short_name', 'gcm_api_key', 'test_configuration', 'production_configuration', 'public_keys'], 'required'],
            [['id_app', 'api_id'], 'integer'],
            [['public_keys'], 'string'],
            [['api_hash', 'short_name', 'gcm_api_key'], 'string', 'max' => 100],
            [['app_title'], 'string', 'max' => 250],
            [['test_configuration', 'production_configuration'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_app' => 'Id App',
            'api_id' => 'App api_id:',
            'api_hash' => 'App api_hash:',
            'app_title' => 'App title:',
            'short_name' => 'Short name:',
            'gcm_api_key' => 'GCM API key:',
            'test_configuration' => 'Test configuration:',
            'production_configuration' => 'Production configuration:',
            'public_keys' => 'Public keys:',
        ];
    }
}
