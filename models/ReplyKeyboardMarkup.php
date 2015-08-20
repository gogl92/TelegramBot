<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "replykeyboardmarkup".
 *
 * @property integer $idReplyKeyboardMarkup
 * @property string $keyboard
 * @property integer $resize_keyboard
 * @property integer $one_time_keyboard
 * @property integer $selective
 * @property integer $id_user
 * @property string $keyboard_name
 */
class ReplyKeyBoardMarkup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'replykeyboardmarkup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idReplyKeyboardMarkup', 'id_user', 'keyboard_name'], 'required'],
            [['idReplyKeyboardMarkup', 'resize_keyboard', 'one_time_keyboard', 'selective', 'id_user'], 'integer'],
            [['keyboard'], 'string'],
            [['keyboard_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idReplyKeyboardMarkup' => 'Upon receiving a message with this object, Telegram clients will hide the current custom keyboard and display the default letter-keyboard. By default, custom keyboards are displayed until a new keyboard is sent by a bot. An exception is made for one-time keyboards that are hidden immediately after the user presses a button (seeReplyKeyboardMarkup).',
            'keyboard' => 'Array of button rows, each represented by an Array of Strings',
            'resize_keyboard' => 'Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app\'s standard keyboard.',
            'one_time_keyboard' => 'Optional. Requests clients to hide the keyboard as soon as it\'s been used. Defaults to false.',
            'selective' => 'Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot\'s message is a reply (has reply_to_message_id), sender of the original message.

Example: A user requests to change the bot‘s language, bot replies to the request with a keyboard to select the new language. Other users in the group don’t see the keyboard.',
            'id_user' => 'Id User',
            'keyboard_name' => 'Keyboard Name',
        ];
    }
}
