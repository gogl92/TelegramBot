<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\command;

/**
 * commandSearch represents the model behind the search form about `app\models\command`.
 */
class commandSearch extends command
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_bot', 'bot_picture', 'join_groups', 'privacy', 'deletebot'], 'integer'],
            [['name', 'username', 'description', 'about', 'http_token'], 'safe'],
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
        $query = command::find();

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
            'id_bot' => $this->id_bot,
            'bot_picture' => $this->bot_picture,
            'join_groups' => $this->join_groups,
            'privacy' => $this->privacy,
            'deletebot' => $this->deletebot,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'about', $this->about])
            ->andFilterWhere(['like', 'http_token', $this->http_token]);

        return $dataProvider;
    }
}
