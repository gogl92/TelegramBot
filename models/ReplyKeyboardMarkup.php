<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ReplyKeyboardMarkup".
 *
 * @property integer $idReplyKeyboardMarkup
 * @property string $keyboard
 * @property integer $resize_keyboard
 * @property integer $one_time_keyboard
 * @property integer $selective
 */
class ReplyKeyboardMarkup extends \yii\db\ActiveRecord
{
    private $keyboard;
    private $resize_keyboard;
    private $one_time_keyboard;
    private $selective;

    public function __construct($resize_keyboard=FALSE, $one_time_keyboard = FALSE, $selective=FALSE){
        $this->keyboard=array();
        $this->keyboard[0]=array();
        $this->resize_keyboard=$resize_keyboard;
        $this->one_time_keyboard=$one_time_keyboard;
        $this->selective=$selective;
    }
    public function add_option($option){
        $this->keyboard = $option;
    }

    public function getKeyBoard(){
        //$myObject = new ReplyKeyboardMarkup();
        return $this;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ReplyKeyboardMarkup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idReplyKeyboardMarkup'], 'required'],
            [['idReplyKeyboardMarkup', 'resize_keyboard', 'one_time_keyboard', 'selective'], 'integer'],
            [['keyboard'], 'string']
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
        ];
    }


}
