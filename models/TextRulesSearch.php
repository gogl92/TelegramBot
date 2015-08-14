<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TextRules;

/**
 * TextRulesSearch represents the model behind the search form about `app\models\TextRules`.
 */
class TextRulesSearch extends TextRules
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_text_rule', 'command', 'recieved_message', 'action', 'id_next_rule'], 'integer'],
            [['type'], 'safe'],
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
        $query = TextRules::find();

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
            'id_text_rule' => $this->id_text_rule,
            'command' => $this->command,
            'recieved_message' => $this->recieved_message,
            'action' => $this->action,
            'id_next_rule' => $this->id_next_rule,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
