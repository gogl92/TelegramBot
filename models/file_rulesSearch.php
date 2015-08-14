<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\file_rules;

/**
 * file_rulesSearch represents the model behind the search form about `app\models\file_rules`.
 */
class file_rulesSearch extends file_rules
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_file_rules', 'id_file', 'id_action', 'id_next_rule'], 'integer'],
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
        $query = file_rules::find();

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
            'id_file_rules' => $this->id_file_rules,
            'id_file' => $this->id_file,
            'id_action' => $this->id_action,
            'id_next_rule' => $this->id_next_rule,
        ]);

        return $dataProvider;
    }
}
