<?php

use Phinx\Seed\AbstractSeed;

class ArticleSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'article'    => 'Article1',
                'user_id'    => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],[
                'article'    => 'Article2',
                'user_id'    => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ];

        $articles = $this->table('articles');
        $articles->insert($data)
              ->saveData();
    }
}
