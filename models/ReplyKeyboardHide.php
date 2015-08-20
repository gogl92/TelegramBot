<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "replykeyboardhide".
 *
 * @property integer $idReplyKeyboardHide
 * @property integer $hide_keyboard
 * @property integer $selective
 * @property integer $id_user
 * @property integer $reply_keyboard_hide_name
 */
class ReplykeyboardHide extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'replykeyboardhide';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idReplyKeyboardHide', 'hide_keyboard', 'id_user'], 'required'],
            [['idReplyKeyboardHide', 'hide_keyboard', 'selective', 'id_user', 'reply_keyboard_hide_name'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idReplyKeyboardHide' => 'Upon receiving a message with this object, Telegram clients will hide the current custom keyboard and display the default letter-keyboard. By default, custom keyboards are displayed until a new keyboard is sent by a bot. An exception is made for one-time keyboards that are hidden immediately after the user presses a button (seeReplyKeyboardMarkup).',
            'hide_keyboard' => 'Requests clients to hide the custom keyboard',
            'selective' => 'Optional. Use this parameter if you want to hide keyboard for specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot\'s message is a reply (has reply_to_message_id), sender of the original message.

Example: A user votes in a poll, bot returns confirmation message in reply to the vote and hides keyboard for that user, while still showing the keyboard with poll options to users who haven\'t voted yet.',
            'id_user' => 'Id User',
            'reply_keyboard_hide_name' => 'Reply Keyboard Hide Name',
        ];
    }
}
