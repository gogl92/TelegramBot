<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property integer $idVideo
 * @property string $file_id
 * @property integer $width
 * @property integer $height
 * @property integer $duration
 * @property integer $thumb
 * @property string $mime_type
 * @property integer $file_size
 * @property integer $id_user
 * @property string $video_name
 */
class Video extends \yii\db\ActiveRecord
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
            [['file_id', 'width', 'height', 'duration', 'id_user'], 'required'],
            [['width', 'height', 'duration', 'thumb', 'file_size', 'id_user'], 'integer'],
            [['file_id'], 'string', 'max' => 45],
            [['mime_type'], 'string', 'max' => 100],
            [['video_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idVideo' => 'This object represents a video file.',
            'file_id' => 'Unique identifier for this file',
            'width' => 'Video width as defined by sender',
            'height' => 'Video height as defined by sender',
            'duration' => 'Duration of the video in seconds as defined by sender',
            'thumb' => 'Video thumbnail',
            'mime_type' => 'Optional. Mime type of a file as defined by sender',
            'file_size' => 'Optional. File size',
            'id_user' => 'Id User',
            'video_name' => 'Video Name',
        ];
    }
}
