<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sticker;

/**
 * StickerSearch represents the model behind the search form about `app\models\Sticker`.
 */
class StickerSearch extends Sticker
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSticker', 'width', 'height', 'thumb', 'file_size'], 'integer'],
            [['file_id'], 'safe'],
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
        $query = Sticker::find();

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
            'idSticker' => $this->idSticker,
            'width' => $this->width,
            'height' => $this->height,
            'thumb' => $this->thumb,
            'file_size' => $this->file_size,
        ]);

        $query->andFilterWhere(['like', 'file_id', $this->file_id]);

        return $dataProvider;
    }
}
