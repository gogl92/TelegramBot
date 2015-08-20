<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "text_rules".
 *
 * @property integer $id_text_rule
 * @property integer $command
 * @property integer $recieved_message
 * @property string $type
 * @property integer $action
 * @property integer $id_next_rule
 * @property integer $id_user
 * @property string $action_name
 * @property string $concat
 */
class TextRules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'text_rules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['command', 'recieved_message', 'type', 'action', 'id_user', 'action_name'], 'required'],
            [['command', 'recieved_message', 'action', 'id_next_rule', 'id_user'], 'integer'],
            [['concat'], 'string'],
            [['type'], 'string', 'max' => 50],
            [['action_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_text_rule' => 'Id Text Rule',
            'command' => 'List of commands, populated from the command table.',
            'recieved_message' => 'The message from the table.',
            'type' => 'Equals different containts < > >= <= between (Fileds text popup).',
            'action' => 'Send message (Text field pops up), Send file (File fild pops up).',
            'id_next_rule' => 'id of the next rule, could be empty.',
            'id_user' => 'Id User',
            'action_name' => 'Action Name',
            'concat' => 'The concatenation of rules, users, date, etc.',
        ];
    }
}
