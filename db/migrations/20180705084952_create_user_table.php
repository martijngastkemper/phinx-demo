<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    public function change()
    {
        $this->table('users')
            ->addColumn('name', 'string')
            ->addColumn('email', 'string')
            ->addColumn('description', 'text')
            ->create();
    }
}
