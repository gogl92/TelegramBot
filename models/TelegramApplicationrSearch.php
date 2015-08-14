<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TelegramApplication;

/**
 * TelegramApplicationrSearch represents the model behind the search form about `app\models\TelegramApplication`.
 */
class TelegramApplicationrSearch extends TelegramApplication
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_application'], 'integer'],
            [['name', 'key_application', 'hash_application'], 'safe'],
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
        $query = TelegramApplication::find();

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
            'id_application' => $this->id_application,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'key_application', $this->key_application])
            ->andFilterWhere(['like', 'hash_application', $this->hash_application]);

        return $dataProvider;
    }
}
