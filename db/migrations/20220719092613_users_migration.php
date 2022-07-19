<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UsersMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('first_name', 'string')
              ->addColumn('last_name', 'string')
              ->create();
    }
}
