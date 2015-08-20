<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property integer $idLocation
 * @property double $longitude
 * @property double $latitude
 * @property integer $id_user
 * @property string $location_name
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['longitude', 'latitude', 'id_user'], 'required'],
            [['longitude', 'latitude'], 'number'],
            [['id_user'], 'integer'],
            [['location_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idLocation' => 'This object represents a point on the map.',
            'longitude' => 'Longitude as defined by sender',
            'latitude' => 'Latitude as defined by sender',
            'id_user' => 'Id User',
            'location_name' => 'Location Name',
        ];
    }
}
