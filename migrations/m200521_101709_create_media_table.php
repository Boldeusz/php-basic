<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%media}}`.
 */
class m200521_101709_create_media_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%media}}', [
            'id' => $this->primaryKey(),
            'filename' => $this->text(),
            'filepath' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%media}}');
    }
}
