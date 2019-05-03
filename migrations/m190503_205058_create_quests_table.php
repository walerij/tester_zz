<?php

use yii\db\Migration;

/**
 * Handles the creation of table `quests`.
 */
class m190503_205058_create_quests_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('quests', [
            'id' => $this->primaryKey(),
            'id_course'=> $this->integer(),
            'quest'=> $this->string(),
            'many'=> $this->integer() //много ответов или один
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('quests');
    }
}
