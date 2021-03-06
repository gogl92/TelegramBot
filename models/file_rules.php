<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "file_rules".
 *
 * @property integer $id_file_rules
 * @property integer $id_file
 * @property integer $id_action
 * @property integer $id_next_rule
 * @property integer $id_user
 * @property string $action_name
 * @property string $concat
 */
class file_rules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'file_rules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_file', 'id_action', 'id_next_rule', 'id_user', 'action_name'], 'required'],
            [['id_file', 'id_action', 'id_next_rule', 'id_user'], 'integer'],
            [['concat'], 'string'],
            [['action_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_file_rules' => 'Id File Rules',
            'id_file' => 'List will appear: File,Audio, Image, Video, Sticker Location AND Max ',
            'id_action' => 'Send message (Text field pops up), Send file (File fild pops up) -> List with actions',
            'id_next_rule' => 'Id Next Rule',
            'id_user' => 'Id User',
            'action_name' => 'Action Name',
            'concat' => 'The concatenation of rules, users, locations, size, etc.',
        ];
    }
}
