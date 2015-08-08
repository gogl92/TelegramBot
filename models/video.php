<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property integer $idvideo
 * @property string $file_id
 * @property integer $width
 * @property integer $height
 * @property integer $duration
 * @property integer $thumb
 * @property string $mime_type
 * @property integer $file_size
 * @property string $caption
 */
class video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_id', 'width', 'height', 'duration', 'thumb'], 'required'],
            [['width', 'height', 'duration', 'thumb', 'file_size'], 'integer'],
            [['file_id'], 'string', 'max' => 45],
            [['mime_type', 'caption'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idvideo' => 'This object represents a video file.',
            'file_id' => 'Unique identifier for this file',
            'width' => 'Video width as defined by sender',
            'height' => 'Video height as defined by sender',
            'duration' => 'Duration of the video in seconds as defined by sender',
            'thumb' => 'Video thumbnail',
            'mime_type' => 'Optional. Mime type of a file as defined by sender',
            'file_size' => 'Optional. File size',
            'caption' => 'Optional. Text description of the video (usually empty)',
        ];
    }
}
