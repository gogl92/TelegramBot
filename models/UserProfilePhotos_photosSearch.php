<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserProfilePhotos_photos;

/**
 * UserProfilePhotos_photosSearch represents the model behind the search form about `app\models\UserProfilePhotos_photos`.
 */
class UserProfilePhotos_photosSearch extends UserProfilePhotos_photos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUserProfilePhotos', 'PhotoSize_idPhotoSize'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = UserProfilePhotos_photos::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idUserProfilePhotos' => $this->idUserProfilePhotos,
            'PhotoSize_idPhotoSize' => $this->PhotoSize_idPhotoSize,
        ]);

        return $dataProvider;
    }
}
