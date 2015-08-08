<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Audio;

/**
 * AudioSearch represents the model behind the search form about `app\models\Audio`.
 */
class AudioSearch extends Audio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idAudio'], 'integer'],
            [['file_id', 'duration', 'mime_type', 'file_size'], 'safe'],
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
        $query = Audio::find();

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
            'idAudio' => $this->idAudio,
        ]);

        $query->andFilterWhere(['like', 'file_id', $this->file_id])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'mime_type', $this->mime_type])
            ->andFilterWhere(['like', 'file_size', $this->file_size]);

        return $dataProvider;
    }
}
