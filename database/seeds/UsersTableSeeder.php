<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$4KEKG9wKOkQO7e5qU4dNgujpL5h2UvUUhrc31F7gh2OiHehvdtNw2',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
