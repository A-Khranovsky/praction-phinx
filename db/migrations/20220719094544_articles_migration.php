<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ArticlesMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('articles');
        $table->addColumn('article', 'text')
              ->addColumn('created_at', 'datetime')
              ->addColumn('user_id', 'integer', 'null')
              ->create();
    }
}
