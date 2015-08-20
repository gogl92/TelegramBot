<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Command;

/**
 * CommandSearch represents the model behind the search form about `app\models\Command`.
 */
class CommandSearch extends Command
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_command', 'id_user'], 'integer'],
            [['command_name', 'command_value', 'argument'], 'safe'],
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
        $query = Command::find();

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
            'id_command' => $this->id_command,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'command_name', $this->command_name])
            ->andFilterWhere(['like', 'command_value', $this->command_value])
            ->andFilterWhere(['like', 'argument', $this->argument]);

        return $dataProvider;
    }
}
