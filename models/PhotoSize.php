<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "PhotoSize".
 *
 * @property integer $idPhotoSize
 * @property string $file_id
 * @property integer $width
 * @property integer $height
 * @property integer $file_size
 *
 * @property UserProfilePhotosPhotos[] $userProfilePhotosPhotos
 * @property UserProfilePhotos[] $idUserProfilePhotos
 */
class PhotoSize extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PhotoSize';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_id', 'width', 'height'], 'required'],
            [['width', 'height', 'file_size'], 'integer'],
            [['file_id'], 'string', 'max' => 45]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfilePhotosPhotos()
    {
        return $this->hasMany(UserProfilePhotosPhotos::className(), ['PhotoSize_idPhotoSize' => 'idPhotoSize']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUserProfilePhotos()
    {
        return $this->hasMany(UserProfilePhotos::className(), ['idUserProfilePhotos' => 'idUserProfilePhotos'])->viaTable('UserProfilePhotos_photos', ['PhotoSize_idPhotoSize' => 'idPhotoSize']);
    }
}
