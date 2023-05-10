<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        $users = [
            [
                'name' => 'Member 2', 'role_id' => 2, 'email' => 'member2@kerent.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Member 1', 'role_id' => 2, 'email' => 'member1@kerent.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Admin', 'role_id' => 1, 'email' => 'admin@kerent.com',
                'password' => bcrypt('12345678')
            ],
        ];

        User::insert($users);
    }
}
