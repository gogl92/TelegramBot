<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TelegramUser;

/**
 * TelegramUserSearch represents the model behind the search form about `app\models\TelegramUser`.
 */
class TelegramUserSearch extends TelegramUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_telegram_user'], 'integer'],
            [['country_code', 'cellphone'], 'safe'],
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
        $query = TelegramUser::find();

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
            'id_telegram_user' => $this->id_telegram_user,
        ]);

        $query->andFilterWhere(['like', 'country_code', $this->country_code])
            ->andFilterWhere(['like', 'cellphone', $this->cellphone]);

        return $dataProvider;
    }
}
