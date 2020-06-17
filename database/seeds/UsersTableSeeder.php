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
                'password'       => '$2y$10$qk1kFTaNZyw8Fbc3ffgw0OrNeS2ls34W.XktZLVjqZ/RPLiE3FAve',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
