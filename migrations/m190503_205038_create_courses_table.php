<?php

use yii\db\Migration;

/**
 * Handles the creation of table `courses`.
 */
class m190503_205038_create_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('courses', [
            'id' => $this->primaryKey(),
            'id_theme'=> $this->integer(),
            'name'=> $this->string(),
            'info'=> $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('courses');
    }
}
