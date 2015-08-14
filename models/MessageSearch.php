<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Message;

/**
 * MessageSearch represents the model behind the search form about `app\models\Message`.
 */
class MessageSearch extends Message
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_message', 'message_id', 'from_user', 'date', 'chat', 'forward_from', 'forward_date', 'reply_to_message', 'audio', 'photo', 'sticker', 'video', 'contact', 'location', 'new_chat_participant', 'left_chat_participant', 'new_chat_photo', 'delete_chat_photo', 'group_chat_created'], 'integer'],
            [['text', 'document', 'caption', 'new_chat_title'], 'safe'],
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
        $query = Message::find();

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
            'id_message' => $this->id_message,
            'message_id' => $this->message_id,
            'from_user' => $this->from_user,
            'date' => $this->date,
            'chat' => $this->chat,
            'forward_from' => $this->forward_from,
            'forward_date' => $this->forward_date,
            'reply_to_message' => $this->reply_to_message,
            'audio' => $this->audio,
            'photo' => $this->photo,
            'sticker' => $this->sticker,
            'video' => $this->video,
            'contact' => $this->contact,
            'location' => $this->location,
            'new_chat_participant' => $this->new_chat_participant,
            'left_chat_participant' => $this->left_chat_participant,
            'new_chat_photo' => $this->new_chat_photo,
            'delete_chat_photo' => $this->delete_chat_photo,
            'group_chat_created' => $this->group_chat_created,
        ]);

        $query->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'document', $this->document])
            ->andFilterWhere(['like', 'caption', $this->caption])
            ->andFilterWhere(['like', 'new_chat_title', $this->new_chat_title]);

        return $dataProvider;
    }
}
