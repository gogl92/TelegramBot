<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Location".
 *
 * @property integer $idLocation
 * @property double $longitude
 * @property double $latitude
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['longitude', 'latitude'], 'required'],
            [['longitude', 'latitude'], 'number']
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
        ];
    }
}
