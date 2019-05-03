<?php

use yii\db\Migration;

/**
 * Handles the creation of table `answers`.
 */
class m190503_205118_create_answers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('answers', [
            'id' => $this->primaryKey(),
            'id_quest'=> $this->integer(),
            'answer'=> $this->string(),
            'right'=> $this->string()
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('answers');
    }
}
