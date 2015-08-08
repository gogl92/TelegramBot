<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "UserProfilePhotos".
 *
 * @property integer $idUserProfilePhotos
 * @property integer $total_count
 *
 * @property UserProfilePhotosPhotos[] $userProfilePhotosPhotos
 * @property PhotoSize[] $photoSizeIdPhotoSizes
 */
class UserProfilePhotos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'UserProfilePhotos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['total_count'], 'required'],
            [['total_count'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUserProfilePhotos' => 'This object represent a user\'s profile pictures.',
            'total_count' => 'Total number of profile pictures the target user has',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfilePhotosPhotos()
    {
        return $this->hasMany(UserProfilePhotosPhotos::className(), ['idUserProfilePhotos' => 'idUserProfilePhotos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotoSizeIdPhotoSizes()
    {
        return $this->hasMany(PhotoSize::className(), ['idPhotoSize' => 'PhotoSize_idPhotoSize'])->viaTable('UserProfilePhotos_photos', ['idUserProfilePhotos' => 'idUserProfilePhotos']);
    }
}
