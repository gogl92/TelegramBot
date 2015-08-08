<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\force_reply;

/**
 * force_replySearch represents the model behind the search form about `app\models\force_reply`.
 */
class force_replySearch extends force_reply
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idForeceReply', 'force_reply', 'selective'], 'integer'],
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
        $query = force_reply::find();

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
            'idForeceReply' => $this->idForeceReply,
            'force_reply' => $this->force_reply,
            'selective' => $this->selective,
        ]);

        return $dataProvider;
    }
}
