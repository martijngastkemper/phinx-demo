<?php

use Phinx\Migration\AbstractMigration;

class AddRoleToUser extends AbstractMigration
{
    public function up()
    {
        $this->table('users')
            ->addColumn('role', 'enum', ['values' => ['manager', 'employee']])
            ->update();
    }

    public function down()
    {
        $this->table('users')
            ->removeColumn('role')
            ->update();
    }
}
