<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Audio".
 *
 * @property integer $idAudio
 * @property string $file_id
 * @property string $duration
 * @property string $mime_type
 * @property string $file_size
 */
class Audio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Audio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_id', 'duration'], 'required'],
            [['file_id', 'duration', 'mime_type', 'file_size'], 'string', 'max' => 45]
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
        ];
    }
}
