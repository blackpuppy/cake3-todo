<?php

use Phinx\Migration\AbstractMigration;

class Initial extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
        // create the table
        $table = $this->table('todos');
        $table->addColumn('todo', 'string', ['limit' => 200])
              ->addColumn('created', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('updated', 'datetime', ['null' => true])
              ->addColumn('is_done', 'boolean', ['default' => '0'])
              ->create();
    }
}
