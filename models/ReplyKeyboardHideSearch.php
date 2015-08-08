<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReplyKeyboardHide;

/**
 * ReplyKeyboardHideSearch represents the model behind the search form about `app\models\ReplyKeyboardHide`.
 */
class ReplyKeyboardHideSearch extends ReplyKeyboardHide
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idReplyKeyboardHide', 'hide_keyboard', 'selective'], 'integer'],
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
        $query = ReplyKeyboardHide::find();

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
            'idReplyKeyboardHide' => $this->idReplyKeyboardHide,
            'hide_keyboard' => $this->hide_keyboard,
            'selective' => $this->selective,
        ]);

        return $dataProvider;
    }
}
