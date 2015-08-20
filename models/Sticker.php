<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sticker".
 *
 * @property integer $idSticker
 * @property string $file_id
 * @property integer $width
 * @property integer $height
 * @property integer $thumb
 * @property integer $file_size
 * @property integer $id_user
 * @property string $sticker_name
 */
class Sticker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sticker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_id', 'width', 'height', 'id_user'], 'required'],
            [['width', 'height', 'thumb', 'file_size', 'id_user'], 'integer'],
            [['file_id'], 'string', 'max' => 45],
            [['sticker_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idSticker' => 'This object represents a sticker.',
            'file_id' => 'Unique identifier for this file',
            'width' => 'Sticker width',
            'height' => 'Sticker height',
            'thumb' => 'Sticker thumbnail in .webp or .jpg format',
            'file_size' => 'Optional. File size',
            'id_user' => 'Id User',
            'sticker_name' => 'Sticker Name',
        ];
    }
}
