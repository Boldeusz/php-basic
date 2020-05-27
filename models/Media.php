<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "media".
 *
 * @property int $id
 * @property string|null $filename
 * @property string|null $filepath
 * @property string|null $desc_gun
 * @property int $category_id
 */
class Media extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'media';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['filename'], 'file', 'maxFiles'=> 10],
            [['filepath'], 'string'],
            [['title'], 'string'],
            [['desc_gun'], 'string'],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            
            'filename' => 'Filename',
            
        ];
    }
}
