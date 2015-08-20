<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userprofilephotos".
 *
 * @property integer $idUserProfilePhotos
 * @property integer $total_count
 * @property integer $id_user
 *
 * @property UserprofilephotosPhotos[] $userprofilephotosPhotos
 * @property Photosize[] $photoSizeIdPhotoSizes
 */
class Userprofilephotos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userprofilephotos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['total_count', 'id_user'], 'required'],
            [['total_count', 'id_user'], 'integer']
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
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserprofilephotosPhotos()
    {
        return $this->hasMany(UserprofilephotosPhotos::className(), ['idUserProfilePhotos' => 'idUserProfilePhotos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotoSizeIdPhotoSizes()
    {
        return $this->hasMany(Photosize::className(), ['idPhotoSize' => 'PhotoSize_idPhotoSize'])->viaTable('userprofilephotos_photos', ['idUserProfilePhotos' => 'idUserProfilePhotos']);
    }
}
