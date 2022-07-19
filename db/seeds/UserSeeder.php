<?php

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'first_name'    => 'Alex',
                'last_name'    => 'K',
            ]
        ];

        $users = $this->table('users');
        $users->insert($data)
              ->saveData();
    }
}
