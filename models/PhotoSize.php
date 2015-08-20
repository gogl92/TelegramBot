<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photosize".
 *
 * @property integer $idPhotoSize
 * @property string $file_id
 * @property integer $width
 * @property integer $height
 * @property integer $file_size
 * @property integer $id_user
 * @property string $file_name
 *
 * @property UserprofilephotosPhotos[] $userprofilephotosPhotos
 * @property Userprofilephotos[] $idUserProfilePhotos
 */
class Photosize extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photosize';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_id', 'width', 'height', 'id_user', 'file_name'], 'required'],
            [['width', 'height', 'file_size', 'id_user'], 'integer'],
            [['file_id'], 'string', 'max' => 45],
            [['file_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPhotoSize' => 'This object represents one size of a photo or a file / sticker thumbnail.',
            'file_id' => 'Unique identifier for this file',
            'width' => 'Photo width',
            'height' => 'Photo height',
            'file_size' => 'Optional. File size',
            'id_user' => 'Id User',
            'file_name' => 'File Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserprofilephotosPhotos()
    {
        return $this->hasMany(UserprofilephotosPhotos::className(), ['PhotoSize_idPhotoSize' => 'idPhotoSize']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUserProfilePhotos()
    {
        return $this->hasMany(Userprofilephotos::className(), ['idUserProfilePhotos' => 'idUserProfilePhotos'])->viaTable('userprofilephotos_photos', ['PhotoSize_idPhotoSize' => 'idPhotoSize']);
    }
}
