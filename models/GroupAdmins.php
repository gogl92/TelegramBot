<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "group_admins".
 *
 * @property integer $id_group
 * @property string $name
 * @property string $description
 */
class GroupAdmins extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'group_admins';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_group' => 'Id Group',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }
}
