<?php

use Garp\Functional as f;
use Phinx\Migration\AbstractMigration;

class PopulateRoleColumn extends AbstractMigration
{
    public function up()
    {
        $users = $this->getQueryBuilder()
            ->select(['id', 'description'])
            ->from('users')
            ->getIterator();

        foreach($users as $user) {
            $identifier = f\prop('id', $user);
            $description = f\prop('description', $user);

            if (f\contains('directeur', $description)) {
                $role = 'manager';
            } else {
                $role = 'employee';
            }

            $this->getQueryBuilder()
                ->update('users')
                ->set('role', $role)
                ->where(['id =' => $identifier])
                ->execute();
        }
    }

    public function down() {}
}
