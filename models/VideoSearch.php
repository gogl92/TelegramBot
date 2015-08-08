<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\video;

/**
 * VideoSearch represents the model behind the search form about `app\models\video`.
 */
class VideoSearch extends video
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idvideo', 'width', 'height', 'duration', 'thumb', 'file_size'], 'integer'],
            [['file_id', 'mime_type', 'caption'], 'safe'],
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
        $query = video::find();

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
            'idvideo' => $this->idvideo,
            'width' => $this->width,
            'height' => $this->height,
            'duration' => $this->duration,
            'thumb' => $this->thumb,
            'file_size' => $this->file_size,
        ]);

        $query->andFilterWhere(['like', 'file_id', $this->file_id])
            ->andFilterWhere(['like', 'mime_type', $this->mime_type])
            ->andFilterWhere(['like', 'caption', $this->caption]);

        return $dataProvider;
    }
}
