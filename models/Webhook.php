<?php

namespace app\models;

use Yii;
use app\models\Bot;
use yii\db\Query;
use app\models\TelegramBot;
/**
 * This is the model class for table "webhook".
 *
 * @property integer $idWebohook
 * @property integer $idBot
 * @property string $webhook_hash
 */
class Webhook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'webhook';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idBot', 'webhook_hash'], 'required'],
            [['idBot'], 'integer'],
            [['webhook_hash'], 'string', 'max' => 45],
            [['absolute_url'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idWebohook' => 'Id Webohook',
            'idBot' => 'Id Bot',
            'webhook_hash' => 'Webhook Hash',
            'absolute_url' => 'URL'
        ];
    }

    public function checkIfHashExist($hash){
        $query = new Query;
        $query->select('idWebohook, webhook_hash, idBot')
        ->from('webhook')->where(['webhook_hash' => $hash]);
        $rows = $query->all();
        if ($rows){
            return $rows[0]['idBot'];
        }
        else {
            return false;
        }
    }
    /**
     * Creates the webhook files from the bots in the database
     */
    public function createWebhookFile()
    {
        
    }
    /**
     * Sets the webhook to the corresponding file
     */
    public function setWebhookFile($bot)
    {

    }

    /**
     * Free the bot from the webhook
     */
    public function freeWebhookFile($bot)
    {
        $query = new Query;
        //$telegrambot = new TelegramBot("");
    }

}
