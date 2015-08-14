<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "force_reply".
 *
 * @property integer $idForeceReply
 * @property integer $force_reply
 * @property integer $selective
 */
class ForceReply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'force_reply';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['force_reply', 'selective'], 'required'],
            [['force_reply', 'selective'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idForeceReply' => 'Id Forece Reply',
            'force_reply' => 'Shows reply interface to the user, as if they manually selected the bot‘s message and tapped ’Reply\'',
            'selective' => 'Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot\'s message is a reply (has reply_to_message_id), sender of the original message.',
        ];
    }
}
