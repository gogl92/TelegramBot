<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PhotoSize;

/**
 * PhotoSizeSearch represents the model behind the search form about `app\models\PhotoSize`.
 */
class PhotoSizeSearch extends PhotoSize
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPhotoSize', 'width', 'height', 'file_size'], 'integer'],
            [['file_id'], 'safe'],
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
        $query = PhotoSize::find();

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
            'idPhotoSize' => $this->idPhotoSize,
            'width' => $this->width,
            'height' => $this->height,
            'file_size' => $this->file_size,
        ]);

        $query->andFilterWhere(['like', 'file_id', $this->file_id]);

        return $dataProvider;
    }
}
