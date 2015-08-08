<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserProfilePhotos;

/**
 * UserProfilePhotosSearch represents the model behind the search form about `app\models\UserProfilePhotos`.
 */
class UserProfilePhotosSearch extends UserProfilePhotos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUserProfilePhotos', 'total_count'], 'integer'],
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
        $query = UserProfilePhotos::find();

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
            'total_count' => $this->total_count,
        ]);

        return $dataProvider;
    }
}
