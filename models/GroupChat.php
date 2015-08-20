<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "groupchat".
 *
 * @property integer $idGroupChat
 * @property string $title
 * @property integer $id_user
 * @property string $group_name
 */
class Groupchat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'groupchat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'group_name'], 'required'],
            [['id_user'], 'integer'],
            [['title'], 'string', 'max' => 45],
            [['group_name'], 'string', 'max' => 255]
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
            'id_user' => 'Id User',
            'group_name' => 'Group Name',
        ];
    }
}
