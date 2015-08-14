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
            [['command', 'recieved_message', 'type', 'action'], 'required'],
            [['command', 'recieved_message', 'action', 'id_next_rule'], 'integer'],
            [['type'], 'string', 'max' => 50]
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
        ];
    }
}
