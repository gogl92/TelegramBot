<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "document".
 *
 * @property integer $idDocument
 * @property string $file_id
 * @property integer $thumb
 * @property string $file_name
 * @property string $mime_type
 * @property integer $file_size
 * @property integer $id_user
 */
class Document extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'document';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_id', 'id_user'], 'required'],
            [['thumb', 'file_size', 'id_user'], 'integer'],
            [['file_name', 'mime_type'], 'string'],
            [['file_id'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDocument' => 'This object represents a general file (as opposed to photos and audio files).',
            'file_id' => 'Unique file identifier',
            'thumb' => 'Document thumbnail as defined by sender',
            'file_name' => 'Optional. Original filename as defined by sender',
            'mime_type' => 'Optional. MIME type of the file as defined by sender',
            'file_size' => 'Optional. File size',
            'id_user' => 'Id User',
        ];
    }
}
