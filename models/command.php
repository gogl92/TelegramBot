<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "command".
 *
 * @property integer $id_command
 * @property string $command_name
 * @property string $command_value
 * @property string $argument
 * @property integer $id_user
 */
class Command extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'command';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_command', 'command_name', 'command_value', 'argument', 'id_user'], 'required'],
            [['id_command', 'id_user'], 'integer'],
            [['command_name', 'argument'], 'string', 'max' => 100],
            [['command_value'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_command' => 'Id Command',
            'command_name' => 'Name of the command:',
            'command_value' => 'Command, should start with /',
            'argument' => 'Argument of the command. just one argument per command:',
            'id_user' => 'Id User',
        ];
    }
}
