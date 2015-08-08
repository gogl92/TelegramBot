<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReplyKeyboardMarkup;

/**
 * ReplyKeyboardMarkupSearch represents the model behind the search form about `app\models\ReplyKeyboardMarkup`.
 */
class ReplyKeyboardMarkupSearch extends ReplyKeyboardMarkup
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idReplyKeyboardMarkup', 'resize_keyboard', 'one_time_keyboard', 'selective'], 'integer'],
            [['keyboard'], 'safe'],
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
        $query = ReplyKeyboardMarkup::find();

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
            'idReplyKeyboardMarkup' => $this->idReplyKeyboardMarkup,
            'resize_keyboard' => $this->resize_keyboard,
            'one_time_keyboard' => $this->one_time_keyboard,
            'selective' => $this->selective,
        ]);

        $query->andFilterWhere(['like', 'keyboard', $this->keyboard]);

        return $dataProvider;
    }
}
