<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\app_configuration;

/**
 * app_configurationSearch represents the model behind the search form about `app\models\app_configuration`.
 */
class app_configurationSearch extends app_configuration
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_app', 'api_id'], 'integer'],
            [['api_hash', 'app_title', 'short_name', 'gcm_api_key', 'test_configuration', 'production_configuration', 'public_keys'], 'safe'],
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
        $query = app_configuration::find();

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
            'id_app' => $this->id_app,
            'api_id' => $this->api_id,
        ]);

        $query->andFilterWhere(['like', 'api_hash', $this->api_hash])
            ->andFilterWhere(['like', 'app_title', $this->app_title])
            ->andFilterWhere(['like', 'short_name', $this->short_name])
            ->andFilterWhere(['like', 'gcm_api_key', $this->gcm_api_key])
            ->andFilterWhere(['like', 'test_configuration', $this->test_configuration])
            ->andFilterWhere(['like', 'production_configuration', $this->production_configuration])
            ->andFilterWhere(['like', 'public_keys', $this->public_keys]);

        return $dataProvider;
    }
}
