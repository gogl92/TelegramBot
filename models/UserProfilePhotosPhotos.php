<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "UserProfilePhotos_photos".
 *
 * @property integer $idUserProfilePhotos
 * @property integer $PhotoSize_idPhotoSize
 *
 * @property PhotoSize $photoSizeIdPhotoSize
 * @property UserProfilePhotos $idUserProfilePhotos0
 */
class UserProfilePhotosPhotos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'UserProfilePhotos_photos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUserProfilePhotos', 'PhotoSize_idPhotoSize'], 'required'],
            [['idUserProfilePhotos', 'PhotoSize_idPhotoSize'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUserProfilePhotos' => 'Id User Profile Photos',
            'PhotoSize_idPhotoSize' => 'Photo Size Id Photo Size',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotoSizeIdPhotoSize()
    {
        return $this->hasOne(PhotoSize::className(), ['idPhotoSize' => 'PhotoSize_idPhotoSize']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUserProfilePhotos0()
    {
        return $this->hasOne(UserProfilePhotos::className(), ['idUserProfilePhotos' => 'idUserProfilePhotos']);
    }
}
