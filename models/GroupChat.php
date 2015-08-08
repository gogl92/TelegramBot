<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "GroupChat".
 *
 * @property integer $idGroupChat
 * @property string $title
 */
class GroupChat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'GroupChat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idGroupChat' => 'Unique identifier for this group chat',
            'title' => 'Group name',
        ];
    }
}
