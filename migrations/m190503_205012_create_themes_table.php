<?php

use yii\db\Migration;

/**
 * Handles the creation of table `themes`.
 */
class m190503_205012_create_themes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('themes', [
            'id' => $this->primaryKey(),
            'name'=> $this->string(),
            'info'=> $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('themes');
    }
}
