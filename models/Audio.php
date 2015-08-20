<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audio".
 *
 * @property integer $idAudio
 * @property string $file_id
 * @property string $duration
 * @property string $mime_type
 * @property string $file_size
 * @property integer $id_user
 * @property string $file_name
 */
class Audio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'audio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_id', 'duration', 'id_user'], 'required'],
            [['id_user'], 'integer'],
            [['file_id', 'duration', 'mime_type', 'file_size'], 'string', 'max' => 45],
            [['file_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idAudio' => 'This object represents an audio file (voice note).',
            'file_id' => 'Unique identifier for this file',
            'duration' => 'Duration of the audio in seconds as defined by sender',
            'mime_type' => 'Optional. MIME type of the file as defined by sender',
            'file_size' => 'File Size',
            'id_user' => 'Id User',
            'file_name' => 'File Name',
        ];
    }
}
