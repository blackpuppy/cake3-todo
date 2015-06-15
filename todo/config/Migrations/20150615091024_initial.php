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
              ->addColumn('created', 'datetime')
              ->addColumn('updated', 'datetime')
              ->addColumn('is_done', 'boolean')
              ->create();
    }
}
