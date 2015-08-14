<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Message".
 *
 * @property integer $id_message
 * @property integer $message_id
 * @property integer $from_user
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
 * @property string $caption
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
            [['id_message', 'message_id', 'from_user', 'date', 'chat', 'forward_from', 'forward_date', 'reply_to_message'], 'required'],
            [['id_message', 'message_id', 'from_user', 'date', 'chat', 'forward_from', 'forward_date', 'reply_to_message', 'audio', 'photo', 'sticker', 'video', 'contact', 'location', 'new_chat_participant', 'left_chat_participant', 'new_chat_photo', 'delete_chat_photo', 'group_chat_created'], 'integer'],
            [['text', 'document', 'new_chat_title'], 'string'],
            [['caption'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_message' => 'Id Message',
            'message_id' => 'Unique message identifier',
            'from_user' => 'Sender',
            'date' => 'Date the message was sent in Unix time',
            'chat' => 'User or GroupChat
Conversation the message belongs to — user in case of a private message, GroupChat in case of a group',
            'forward_from' => 'Optional. For forwarded messages, sender of the original message',
            'forward_date' => 'Optional. For forwarded messages, date the original message was sent in Unix time',
            'reply_to_message' => 'Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.',
            'text' => 'Optional. For text messages, the actual UTF-8 text of the message.',
            'audio' => 'Optional. Message is an audio file, information about the file.',
            'document' => 'Optional. Message is a general file, information about the file',
            'photo' => 'Optional. Message is a photo, available sizes of the photo',
            'sticker' => 'Optional. Message is a sticker, information about the sticker',
            'video' => 'Optional. Message is a video, information about the video',
            'caption' => 'Optional. Caption for the photo or video',
            'contact' => 'Optional. Message is a shared contact, information about the contact',
            'location' => 'Optional. Message is a shared location, information about the location',
            'new_chat_participant' => 'Optional. A new member was added to the group, information about them (this member may be bot itself)',
            'left_chat_participant' => 'Optional. A member was removed from the group, information about them (this member may be bot itself)',
            'new_chat_title' => 'Optional. A group title was changed to this value',
            'new_chat_photo' => 'Optional. A group photo was change to this value',
            'delete_chat_photo' => 'Optional. Informs that the group photo was deleted',
            'group_chat_created' => 'Optional. Informs that the group has been created',
        ];
    }
}
