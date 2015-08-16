<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Bot".
 *
 * @property integer $id_bot
 * @property string $name
 * @property string $username
 * @property string $description
 * @property string $about
 * @property integer $bot_picture
 * @property integer $join_groups
 * @property integer $privacy
 * @property integer $deletebot
 * @property string $http_token
 */
class Bot extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Bot';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'username', 'join_groups', 'privacy', 'deletebot'], 'required'],
            [['bot_picture', 'join_groups', 'privacy', 'deletebot'], 'integer'],
            [['name', 'username', 'http_token'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 512],
            [['about'], 'string', 'max' => 120]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_bot' => 'unique id for the bot.',
            'name' => 'bot\'s name.',
            'username' => 'Username. It must end in *bot*. Example: TetrisBot or tetris_bot.',
            'description' => 'bot\'s description, a short text of up to 512 characters',
            'about' => 'bot\'s about info, an even shorter text of up to 120 characters. Users will see this text on the bot\'s profile page. When they share your bot with someone, this text will be sent together with the link.',
            'bot_picture' => 'bot‘s profile pictures. It’s always nice to put a face to a name.',
            'join_groups' => 'join groups? determines whether your bot can be added to groups or not. Any bot must be able to process private messages, but if your bot was not designed to work in groups, you can disable this.',
            'privacy' => 'Privacy, determines which messages your bot will receive when added to a group. With privacy mode disabled, the bot will receive all messages. We recommend leaving privacy mode enabled.',
            'deletebot' => 'deletes your bot and frees its username.',
            'http_token' => 'Token given by the botfather to recieve and send messages.',
        ];
    }
}
