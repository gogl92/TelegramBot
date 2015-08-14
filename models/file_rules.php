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
            [['id_file', 'id_action', 'id_next_rule'], 'required'],
            [['id_file', 'id_action', 'id_next_rule'], 'integer']
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
        ];
    }
}
