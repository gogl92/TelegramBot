<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userprofilephotos_photos".
 *
 * @property integer $idUserProfilePhotos
 * @property integer $PhotoSize_idPhotoSize
 * @property integer $id_user
 *
 * @property Photosize $photoSizeIdPhotoSize
 * @property Userprofilephotos $idUserProfilePhotos0
 */
class UserprofilephotosPhotos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userprofilephotos_photos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUserProfilePhotos', 'PhotoSize_idPhotoSize', 'id_user'], 'required'],
            [['idUserProfilePhotos', 'PhotoSize_idPhotoSize', 'id_user'], 'integer']
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
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotoSizeIdPhotoSize()
    {
        return $this->hasOne(Photosize::className(), ['idPhotoSize' => 'PhotoSize_idPhotoSize']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUserProfilePhotos0()
    {
        return $this->hasOne(Userprofilephotos::className(), ['idUserProfilePhotos' => 'idUserProfilePhotos']);
    }
}
