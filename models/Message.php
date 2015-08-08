<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Message".
 *
 * @property integer $message_id
 * @property integer $from
 * @property integer $date
 * @property integer $chat
 * @property integer $forward_from
 * @property integer $forward_date
 * @property integer $reply_to_message
 * @property string $text
 * @property integer $audio
 * @property string $document
 * @property integer $photo
 * @property integer $sticker
 * @property integer $video
 * @property integer $contact
 * @property integer $location
 * @property integer $new_chat_participant
 * @property integer $left_chat_participant
 * @property string $new_chat_title
 * @property integer $new_chat_photo
 * @property integer $delete_chat_photo
 * @property integer $group_chat_created
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from', 'date', 'chat', 'forward_from', 'forward_date', 'reply_to_message'], 'required'],
            [['from', 'date', 'chat', 'forward_from', 'forward_date', 'reply_to_message', 'audio', 'photo', 'sticker', 'video', 'contact', 'location', 'new_chat_participant', 'left_chat_participant', 'new_chat_photo', 'delete_chat_photo', 'group_chat_created'], 'integer'],
            [['text', 'document', 'new_chat_title'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'message_id' => 'Unique message identifier',
            'from' => 'From',
            'date' => 'Date the message was sent in Unix time',
            'chat' => 'User or GroupChat
Conversation the message belongs to — user in case of a private message, GroupChat in case of a group',
            'forward_from' => 'Forward From',
            'forward_date' => 'Forward Date',
            'reply_to_message' => 'Reply To Message',
            'text' => 'Text',
            'audio' => 'Audio',
            'document' => 'Document',
            'photo' => 'Photo',
            'sticker' => 'Sticker',
            'video' => 'Video',
            'contact' => 'Contact',
            'location' => 'Location',
            'new_chat_participant' => 'New Chat Participant',
            'left_chat_participant' => 'Left Chat Participant',
            'new_chat_title' => 'New Chat Title',
            'new_chat_photo' => 'New Chat Photo',
            'delete_chat_photo' => 'Delete Chat Photo',
            'group_chat_created' => 'Group Chat Created',
        ];
    }
}
